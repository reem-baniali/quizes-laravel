<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
     $users=User::all(); 
     $update=false;  
     return view('adminSite.manageUsers',compact('users','update'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminSite.manageUsers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'name'=>'required',
        //     'email'=>'required',
        //     'password'=>'required',
        //     'role_id'=>'required',
        // ]);

        User::create([
            'name'     =>$request->name,
            'email'    =>$request->email,
            'password' =>$request->password,
            'role_id' =>$request->role_id,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role,$id)
    {
       $user=User::find($id);
       $update=true;
       $users=User::all();
       return view('adminSite.manageUsers',compact('user','update','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role,$id)
    {
        $user=User::find($id);
        // $this->validate($request,[
        //     'name'=>'required',
        //     'email'=>'required',
        //     'password'=>'required',
        //     'role_id'=>'required',
        // ]);
        
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = $request->password;
        $user->role_id  = $request->role_id;

        $user->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($request)
    {
        $user=User::find($request);
        $user->delete($request);

        return redirect()->back();
    }
}
