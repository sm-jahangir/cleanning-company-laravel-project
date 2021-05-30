<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use Brian2694\Toastr\Facades\Toastr;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::latest()->get();
        return view('backend.subscribers',compact('subscribers'));
    }

    public function destroy($subscriber)
    {
        $subscriber = Subscriber::findOrFail($subscriber);
        $subscriber->delete();
        Toastr::success('Subscriber Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
