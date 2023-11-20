<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("/template-dasar/HalLogin");
    }

    function login(Request $request)
    {
        Session::flash('name',$request->name);
        $request->validate([
            'name'=>'required',
            'password'=> 'required'
        ],[
            'name.required'=> 'Username wajib diisi',
            'password.required'=> 'password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->name,
            'password'=> $request->password
        ];


        if (Auth::attempt($infologin)){
            return redirect('/Dashboard')->with('message','Berhasil Login!');
        }else{
            return redirect("/login")->withErrors(['email / password yang dimasukkan tidak valid!']);
        }
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/login')->with('success','Berhasil logout');
    }
}
