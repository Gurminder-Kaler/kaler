<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $roles = Role::pluck('name','id')->all();

        //$roles= Role::lists('name','id')->all();

        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        if (trim($request->password) == ''){
        $input = $request->except('password');
        }else
        {
            $input=$request->all();
            $input['password']= bcrypt($request->password);
        }
            User::create($input);
        return redirect('admin/users');

    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //

        $user = User::findOrFail($id);

        $roles = Role::pluck('name','id')->all();


        return view('admin.users.edit', compact('user','roles'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //
        $user = User::findorFail($id);
            if(trim($request->all())==''){
                $input  = $request->except('password');
            } else{
                $input = $request->all();
                $input['password']=bcrypt($request->password);
            }
        $user->update($input);
            return redirect('/admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin/users');
    }
}
