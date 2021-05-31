<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class CommentController extends Controller
{
    public function store(Request $request, $post)
    { 
        
        $this->validate($request,[
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->post_id = $post;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back();
    }
    public function index()
    {
        $comments = Comment::all();
        return view('backend.comments',compact('comments'));
    }
    public function destroy($comment)
    {
        $comment = Comment::findOrFail($comment);

        if ($comment->post->user->id == Auth::id())
        {
            $comment->delete();
            Toastr::success('Comment Successfully Deleted','Success');
        } else {
            Toastr::error('You are not authorized to delete this comment :(','Access Denied !!!');
        }
        return redirect()->back();
    }

}
