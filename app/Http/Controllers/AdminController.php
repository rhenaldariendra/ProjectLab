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
    }

    public function addData(Request $request){
        $new = new Product();

        $file = $request->file('image');
        dd($request);
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

    public function updateProduct(Request $request){
        $product = Product::find($request->id);
        $file = $request->file('image');
        
        if($file!=null){
            $image_name = time().'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('public/Asset/Image', $file, $image_name);
            // dd($request);
            $image_name = 'Asset/Image/'.$image_name;

            Storage::delete('public/'.$product->image);
        }
        else{
            $image_name = $product->image;
            dd($image_name);
        }

        $product->category = $request['category'];
        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->image = $image_name;
        $product->save();

        return redirect('/');
    }



}
