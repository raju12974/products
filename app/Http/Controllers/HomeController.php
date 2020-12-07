<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('home', compact('products'));
    }

    public function add_product(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->code = $request->code;
        $product->count = 0;
        $product->save();

        return back();
    }

    public function increase_count(Request $request){
        $code = $request->code;
        $product = Product::where('code', $code)->first();

        if(!$product){
            return ['success'=> 'N', 'msg'=>'product not exists'];
        }else{
            $product->increment('count');
            return ['success'=> 'Y'];
        }
    }
}
