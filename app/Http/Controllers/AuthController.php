<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class AuthController extends Controller
{
    public function index(){
        return view('login');
    }



    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credential = $request->only('email', 'password');
        $user = User::where(['email'=>$request->email])->first();

        if(Auth::attempt($credential)){
            $request->session()->put('user', $user);
            return redirect()->intended('home')->withSuccess('Login successful');
        }
        return redirect()->intended('home')->withSuccess('Login failed');
    }

    public function register(){
        return view('register');
    }

    public function registration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|required_with:confpassword',
            'confpassword' => 'required|min:8',
            'gender' => 'required',
        ]);
        $data = $request->all();
        // dd($data);
        $check = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender'=>$data['gender']
        ]);
        $check->save();
        return redirect('home')->withSuccess('Logged in');
    }

    public function dashboard(){
        if(Auth::check()){
            return view('home');
        }
        return redirect('login')->withSuccess('Not Allowed');
    }

    public function logout() {
        Session::flush();
        Session::forget('user');
        Auth::logout();
        return Redirect('login');
    }
}
