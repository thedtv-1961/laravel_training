<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index(){

        $pro = Product->new();
        $products = Product::all()->sortByDesc('id');
        return view('products.index', ['products' => $products]);
    }

    function create(){
        $categories = Category::all()->sortBy('id');
        return view('products.create', ['categories'=>$categories]);
    }

    function store(ProductRequest $request){
        $input = $request->only([
            'name',
            'price'
        ]);

        $product = array(
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id
        );

        $result = DB::table('products')->insert($product);

        if($result){
            return redirect('/')->with('flash.message', trans('message.product.success'))->with('flash.class', 'success');
        }
        else{
            return redirect('product/create')->with('flash.message', 'message.product.error')->with('flash.class', 'danger');
        }
    }
}
