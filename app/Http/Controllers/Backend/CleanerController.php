<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cleaner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class CleanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cleaners = Cleaner::all();
        return view('backend.cleaner.index', compact('cleaners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.cleaner.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clean = new Cleaner();
        $clean->name = $request->name;
        $clean->slug = Str::slug($request->name);
        $clean->save();

        $clean->cleanertouser()->attach($request->user);
        Toastr::success('Cleaner Successfully Saved', 'success');
        return redirect()->route('admin.cleaner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cleaner = Cleaner::find($id);
        $users = User::all();
        return view('backend.cleaner.edit', compact('cleaner','users'));
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
        $clean = Cleaner::find($id);
        $clean->name = $request->name;
        $clean->slug = Str::slug($request->name);
        $clean->save();

        $clean->cleanertouser()->sync($request->user);
        Toastr::success('Cleaner Successfully Updated', 'success');
        return redirect()->route('admin.cleaner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clean = Cleaner::find($id);
        $clean->cleanertouser()->detach();
        $clean->delete();
        Toastr::success('Cleaner Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
