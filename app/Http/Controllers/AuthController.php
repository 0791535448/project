<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //show login page
    public function index()
    {
        return view('auth/login');
    }
    //authedicate user
    public function auth(Request $req)
    {
        $credentials = $req->only('email','password');
        if(Auth::attempt($credentials)){
            return view('index');
        }
        return back();
    }
    //show register page
    public function register()
    {
        return view('auth/register');
    }

    public function create()
    {
        //
    }
    //register new user
    public function store(Request $request)
    {
        $input = $request->all();
        Auth::login(User::create($input));
        /*$user = new User();
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();*/
        return redirect('/');//redirect to login
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
