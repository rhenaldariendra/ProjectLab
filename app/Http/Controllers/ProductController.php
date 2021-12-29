<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showAllProducts(){
        // $data = DB::table('products')->get();
        $data = Product::all();
        return view('home', ['listProducts' => $data]);
    }


    public function detailProduct($id){
        $data = Product::find($id);
        $title = $data['title'];
        return view('detail', compact('data', 'title'));
    }

    public function showUpdateDetail(Product $id){
        $data = Product::find($id->id);
        return view('updateProduct', ['data' => $data]);
    }

}

