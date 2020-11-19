<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::allowed()->get();

        return view ('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->hasRole('Admin')){
            return view('Admin.users.create');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,User $user)
    {

        
        $role = $request->get('admin');
        if($role == "true")
        {
           $user->assignRole('Admin');
        }
        $user->name= $request->get('name');
        $user->email= $request->get('email');
        $passwordAux=$request->get('password');
        $user->password=bcrypt($passwordAux);   
        $user->save();

        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view',$user); 
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
       // $this->authorize('edit',$user);  
        $this->authorize('update',$user);  
        return view('Admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        
        $this->validate($request,
        ['name'=>'required',
        'email'=>'required',
        'password'=>'required',
        'password_confirmation'=>'required'
    ]);
       
        $user->name= $request->get('name');
        $user->email= $request->get('email');
        $passwordAux=$request->get('password');
        $passwordAux2=$request->get('password_confirmation');
        if($passwordAux==$passwordAux2){
            $user->password=bcrypt($passwordAux);
            $user->save();
            return redirect()->route('admin');
        }   
        return $errors;

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('edit',$user);
        $user->delete();

        return view('admin.users.show',compact('user'));

    }
}
