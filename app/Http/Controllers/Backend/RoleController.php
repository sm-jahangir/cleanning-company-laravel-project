<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->can('role-view')) {
            $roles = Role::all();
            return view('backend.roles.index', compact('roles'));
        }else{
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
        if (auth()->user()->can('role-create')) {
            $all_permissions  = Permission::all();
            return view('backend.roles.create', compact('all_permissions'));
        }else{
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
        
        if (auth()->user()->can('role-create')) {
            // Validation Data
            $request->validate([
                'name' => 'required|max:100|unique:roles'
            ], [
                'name.requried' => 'Please give a role name'
            ]);
    
            // Process Data
            $role = Role::create(['name' => $request->name]);
            $permissions = $request->input('permissions');
    
            if (!empty($permissions)) {
                $role->syncPermissions($permissions);
            }
    
            session()->flash('success', 'Role has been created !!');
            return redirect('admin/roles');
        }else{
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
        if (auth()->user()->can('role-edit')) {
            $role = Role::findById($id);
            $all_permissions  = Permission::all();
            return view('backend.roles.edit', compact('role', 'all_permissions'));
        }else{
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
        if (auth()->user()->can('role-update')) {
            // Validation Data
            $request->validate([
                'name' => 'required|max:100|unique:roles,name,' . $id
            ], [
                'name.requried' => 'Please give a role name'
            ]);
    
            $role = Role::findById($id);
            $permissions = $request->input('permissions');
    
            if (!empty($permissions)) {
                $role->name = $request->name;
                $role->save();
                $role->syncPermissions($permissions);
            }
    
            session()->flash('success', 'Role has been updated !!');
            return redirect('admin/roles');
        }else{
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
        if (auth()->user()->can('role-delete')) {
            $role = Role::findById($id);
            if (!is_null($role)) {
                $role->delete();
            }
            session()->flash('success', 'Role has been deleted !!');
            return back();
        }else{
            abort(403, 'Unathorizid to Access');
        }
    }
}
