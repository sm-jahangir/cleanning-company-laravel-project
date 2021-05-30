<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\NewAuthorPost;
use App\Notifications\AuthorPostApproved;
use App\Notifications\NewPostNotify;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('backend.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);
        
        $post = new Post();


        $image = $request->file('image');
        $ext = $image->extension();
        $file = time(). '.'.$ext;
        $image->storeAs('public/post',$file);//above 4 line process the image code
        $post->image =  $file;//ai code ta image ke insert kore

        $post->title = $request->title;
        $post->slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        $post->user_id = Auth::id();
        $post->body = $request->body;
        if (isset($request->status)) {
            $post->status = true;
        } else {
            $post->status = false;
        }
        if (Auth::user()->hasAnyRole(['super-admin', 'admin'])) {
            $post->is_approved = true;
        } else {
            $post->is_approved = false;
            $users = User::where('id','3')->get();
            Notification::send($users, new NewAuthorPost($post));
        }
        
        $post->save();

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);


        
        $subscribers = Subscriber::all();
        foreach ($subscribers as $subscriber)
        {
            Notification::route('mail',$subscriber->email)
                ->notify(new NewPostNotify($post));
        }


        Toastr::success('Post Successfully Saved :)','Success');
        return redirect()->route('admin.post.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.posts.edit',compact('post', 'categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'title' => 'required',
            'image' => 'image',
            'categories' => 'required',
            'tags' => 'required',
        ]);

        $post = Post::find($id);

        if($request->has('image')){
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time(). '.'.$ext;
            $image->storeAs('public/post',$file);//above 4 line process the image code
            $post->image =  $file;//ai code ta image ke insert kore
        }

        
        $post->title = $request->title;
        $post->slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        $post->user_id = Auth::id();
        $post->body = $request->body;
        if (isset($request->status)) {
            $post->status = true;
        } else {
            $post->status = false;
        }
        if (Auth::user()->hasAnyRole(['super-admin', 'admin'])) {
            $post->is_approved = true;
        } else {
            $post->is_approved = false;
        }
        $post->save();

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);
   
        Toastr::success('Post Successfully Updated', 'success');
        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (Storage::disk('public')->exists('post/'.$post->image))
        {
            Storage::disk('public')->delete('post/'.$post->image);
        }
        $post->categories()->detach();
        $post->tags()->detach();
        $post->delete();
        Toastr::success('Post Successfully Deleted :)','Success');
        return redirect()->back();
    }
    public function pending()
    {
        $posts = Post::where('is_approved', false)->get();
        return view('backend.posts.pending', compact('posts'));
    }
    public function approval($id)
    {
        $post = Post::find($id);
        if ($post->is_approved == false)
        {
            $post->is_approved = true;
            $post->save();
            $post->user->notify(new AuthorPostApproved($post));
            Toastr::success('Post Successfully Approved :)','Success');
        } else {
            Toastr::info('This Post is already approved','Info');
        }
        return redirect()->back();
    }
}
