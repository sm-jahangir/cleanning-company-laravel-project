<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->can('admin-view')) {
            $users = User::all();
            return view('backend.users.index', compact('users'));
        }else {
            abort(403, 'Unathorizid to Access');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->can('admin-create')) {
            $roles = Role::all();
            return view('backend.users.create', compact('roles'));
        } else {
            abort(403, 'Unathorizid to Access');
        }
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->user()->can('admin-create')) {
            // Validation Data
            $request->validate([
                'name' => 'required|max:50',
                'email' => 'required|max:100|email|unique:users',
                'password' => 'required|min:6|confirmed',
            ]);

            // Create New User
            $user = new User();
            $user->name = $request->name;
            $user->username = Str::slug($request->name);
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            if ($request->roles) {
                $user->assignRole($request->roles);
            }

            session()->flash('success', 'User has been created !!');
            return redirect()->route('admin.users.index');
        }else {
            abort(403, 'Unathorizid to Access');
        }
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
        if (auth()->user()->can('admin-edit')) {
            $user = User::find($id);
            $roles  = Role::all();
            return view('backend.users.edit', compact('user', 'roles'));
        } else {
            abort(403, 'Unathorizid to Access');
        }
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
        if (auth()->user()->can('admin-edit')) {
                
            // Create New User
            $user = User::find($id);

            // Validation Data
            $request->validate([
                'name' => 'required|max:50',
                'email' => 'required|max:100|email|unique:users,email,' . $id,
                'password' => 'nullable|min:6|confirmed',
            ]);


            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }
            $user->save();

            $user->roles()->detach();
            if ($request->roles) {
                $user->assignRole($request->roles);
            }

            session()->flash('success', 'User has been updated !!');
            return redirect()->route('admin.users.index');

        } else {
            abort(403, 'Unathorizid to Access');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->can('admin-delete')) {
                
            $user = User::find($id);
            if (!is_null($user)) {
                $user->delete();
            }

            session()->flash('success', 'User has been deleted !!');
            return redirect('admin/users');
        } else {
            abort(403, 'Unathorizid to Access');
        }
    }
}
