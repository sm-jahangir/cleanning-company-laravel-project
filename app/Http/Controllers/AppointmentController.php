<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $post = new Appointment();

        $post->name = $request->name;
        $post->user_id = Auth::id();
        $post->phone = $request->phone;
        $post->service_name = $request->service;
        $post->cleaner_id = $request->cleaner;
        
        
        $post->save();

        return redirect()->route('index');

    }
    public function indexbackend()
    {
        $appointments = Appointment::all();
        return view('backend.appointment.index', compact('appointments'));
    }
}
