<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class SignInController extends Controller
{
    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signin(Request $request){
       

        $request->validate(
            [
                'email' => 'required | email',
                //is required and must be a type of email
                'password' => 'required',
            ]
        );

        //$admin= Admin::where('email', $request['email']) -> get();
        $admins = Admin::all();
        $admins=$admins->toArray();

        foreach ($admins as $admin){
        //echo ($admin->email);
            $password=$request['password'];
            if (($admin['email']== $request['email']) && ($admin['password']== $password) ){
                return redirect('/adminHomePage');
            } 

       }


        return view("LoginU");
        //session()->flash('message', 'Incorrect email or password!');
    }
    
}
