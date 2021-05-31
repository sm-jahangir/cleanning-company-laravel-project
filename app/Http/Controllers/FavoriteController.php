<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function add($post)
    {
        $user = Auth::user();
        $isFavorite = $user->favorite_posts()->where('post_id',$post)->count();

        if ($isFavorite == 0)
        {
            $user->favorite_posts()->attach($post);
            return redirect()->back();
        } else {
            $user->favorite_posts()->detach($post);
            return redirect()->back();
        }
    }
    public function index()
    {
        $posts = Auth::user()->favorite_posts;
        return view('backend.favorite',compact('posts'));
    }
    
    public function removefavpost($post)
    {
        $user = Auth::user();
        $isFavorite = $user->favorite_posts()->where('post_id',$post)->count();

        if ($isFavorite == 1)
        {
            $user->favorite_posts()->detach($post);
            return redirect()->back();
        }
    }

}
