<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // $cart_table = Cart::find($validate['product_id']);
        $cart_table = Cart::where('product_id', $validate['product_id'])->first();
        // dd($cart_table);
        // return Auth::user()->id;
        // return $cart_table[0]->user_id;

        if(!empty($cart_table)){
            // return $cart_table;
            if($cart_table->user_id == Auth::user()->id){
                return redirect()->back()->withErrors('Item already in cart');
            }
        }
        if($product->stock < $validate['quantity']){
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
        $user = Cart::where('user_id', $id)->get();
        $total = 0;
        foreach ($user as $item) {
            $total = $total + ($item->quantity *$item->product[0]->price);
        }

        return view('cart', compact('user', 'total'));
    }

    public function viewSearch(Request $request){
        $product = Product::where('title', 'LIKE', "%$request->search%")->simplePaginate(2);
        // dd($product);
        return view('home', ['listProducts' => $product]);
    }

    public function deleteItemCart($id){
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
    }
}

