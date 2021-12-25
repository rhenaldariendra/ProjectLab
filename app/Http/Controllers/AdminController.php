<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function addData(Request $request){
        $new = new Product();

        $file = $request->file('image');
        $image_name = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/Asset/Image', $file, $image_name);
        $image_name = 'Asset/Image/'.$image_name;


        $new->category = $request->category;
        $new->title = $request->title;
        $new->description = $request->description;
        $new->price = $request->price;
        $new->stock = $request->stock;
        $new->image = $image_name;
        $new->save();

        return redirect('/');
    }



}
