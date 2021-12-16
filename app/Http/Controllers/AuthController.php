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
        // dd($credential);
        if(Auth::check($credential)){
            // if(Str::contains($request->only('account_type'), 'User')){
            //     $request->session()->put('User', $user);

            // }
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




}
