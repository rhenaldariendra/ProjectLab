<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    // use AuthenticatesUsers;
    public function index(){
        return view('login');
    }
    public function loginValidateToShowDetailProduct($id){
        if(!Auth::check()){
            return redirect("login")->withSuccess('You are not allowed to access');
        }
        $data = Product::find($id);
        $title = $data['title'];
        return view('detail', compact('data', 'title'));
    }


    public function updateProfile(Request $request){
        // $request->validate([
        //     'password' => 'same:confpassword',
        // ]);
        User::find(auth()->user()->id)->update(['name'=>$request->name]);
        User::find(auth()->user()->id)->update(['gender'=>$request->gender]);
        return redirect('myaccount');
    }

    public function updatePassword(Request $request){
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->newpassword)]);
        return redirect('myaccount');

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
            if($request->remember_me==null){

            }
            else{
                setcookie('email', $request->email, time()+7200);
                setcookie('password', $request->password, time()+7200);
            }
            Auth::login($user);
            return redirect()->intended('home')->withSuccess('Login successful');
        }
        return redirect()->intended('login')->withSuccess('Login failed');
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
