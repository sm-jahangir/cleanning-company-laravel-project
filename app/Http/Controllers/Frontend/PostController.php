<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return view('frontend/blog',compact('posts'));
    }
    public function details($slug)
    {
        $post = Post::where('slug',$slug)->first();

        $blogKey = 'blog_' . $post->id;
        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey, 1);
        }
        
        $categories = Category::latest()->paginate(5);
        $tags = Tag::latest()->paginate(5);
        $randomposts = Post::all()->random(3);
        return view('frontend.post-details',compact('post','randomposts', 'categories', 'tags'));
    }
    public function categorybypost($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('frontend.categorybypost', compact('category'));
    }
    public function tagbypost($slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        return view('frontend.tagbypost', compact('tag'));
    }
}
