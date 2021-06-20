<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return view('admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $request->validate([
        'username' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
    ]);
        User::create([
            'name' => $request->username,
            'email' =>  $request->email,
            'password' =>Hash::make($request->password)
        ]);
        return redirect()->route('user.index')->with('success','user is created');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       $user->name = $request->full_name;
       $user->email = $request->email;
       $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
    public function update_password(Request $request,$id)
    {

        $this->validate($request, [

            'oldpassword' => 'required',
            'newpassword' => 'required|required_with:password_confirmation|same:password_confirmation',
        ]);


        $user=User::find($id);
        $hashedPassword = $user->password;

        if (Hash::check($request->oldpassword , $hashedPassword )) {

            if (!Hash::check($request->newpassword , $hashedPassword)) {

                //$users =Auth::user()->id;
                $user->password = bcrypt($request->newpassword);
                User::where( 'id' , $id)->update( array( 'password' =>  $user->password));

                session()->flash('message','password updated successfully');
                return redirect()->route('user.index');
            }

            else{
                session()->flash('error','new password can not be the old password!');
                return redirect()->back();
            }

        }

        else{
            session()->flash('error','old password doesnt matched ');
            return redirect()->back();
        }

    }
    public function update_pass($id)
    {

        return view('admin.users.update-password',compact('id'));
    }
}
