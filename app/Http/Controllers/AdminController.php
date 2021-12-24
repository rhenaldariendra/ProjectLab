<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showUsers(){
        $data = User::all();
        return view('manageUser', ['listUsers' => $data]);
    }

    public function deleteUser($id){
        $data = User::find($id);
        // dd($data);
        $data->delete();
        $data = User::all();
        return redirect()->back();
        // return ('manageUser', ['listUsers' => $data]);
    }



}
