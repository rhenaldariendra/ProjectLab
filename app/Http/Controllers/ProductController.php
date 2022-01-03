<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showAllProducts(){
        // $data = DB::table('products')->get();
        $data = Product::paginate();
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

    public function addToCart(Request $request){
        $validate = $request->validate([
            'product_id'=> 'required',
            'quantity'=>'required',
            'stock' => 'required',
        ]);
        $product = Product::find($validate['product_id']);
        // dd($product->stock);
        $cart_table = Cart::find($validate['product_id']);
        if(Cart::find($validate['product_id'])){
            return redirect()->back()->withErrors('Item already in cart');
        }
        else if($product->stock < $validate['quantity']){
            return redirect()->back()->withErrors('Stock does not meet the request');
        }
        else{
            // if()
            $cart = new Cart();
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $validate['product_id'];
            $cart->quantity = $validate['quantity'];
            $cart->save();

            return redirect('/');
        }
    }

    public function getCart($id){
        $cart = Cart::where('user_id', $id)->get();
        return $cart;
    }

    public function viewSearch(Request $request){
        $product = Product::where('title', 'LIKE', "%$request->search%")->simplePaginate(2);
        // dd($product);
        return view('home', ['listProducts' => $product]);
    }
}

