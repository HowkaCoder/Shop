<?php

namespace App\Http\Controllers;

use App\Models\Brend;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $products = Product::all();
        $all_categories = Category::all();
        $brends = Brend::all();
        $data = Category::select( 'products.img as ProductImg', 'products.name as ProductName' ,'categories.id as CategoryId' ,'categories.name as CategoryName' , 'products.id as ProductId' , 'products.price as ProductPrice' , 'products.dsb as ProductDsb')
        ->join('products' , 'products.category_id' , 'categories.id')
        ->get();
        foreach($all_categories as $categories){
        $id = $categories->id; 
        $categories->file =  Brend::where('category_id' , $id)->get();
    }
        foreach($data as $product){
            $id  = $product->CategoryId;
            $product->file = Product::where('category_id' , $id)->get();
        }
        return view('index' , ['data'=>$products , 'categories'=>$all_categories , 'products' =>$data , 'brends'=>$brends] );
    }


    public function shop(){
        
        $products = Product::all();
        $all_categories = Category::all();
        $brends = Brend::all();
        $data = Category::select( 'products.img as ProductImg', 'products.name as ProductName' , 'categories.name as CategoryName' , 'products.id as ProductId' , 'products.price as ProductPrice' , 'products.dsb as ProductDsb')
        ->join('products' , 'products.category_id' , 'categories.id')
        ->get();
        foreach($all_categories as $categories){
        $id = $categories->id; 
        $categories->file =  Brend::where('category_id' , $id)->get();
    }
        foreach($data as $product){
            $id  = $product->CategoryId;
            $product->file = Product::where('category_id' , $id)->get();
        }
        // dd($data);
        return view('shop' , ['data'=>$products , 'categories'=>$all_categories , 'products'=>$data , 'brends'=>$brends] );
    }
    
    public function product_details(){
        
        $products = Product::all(); 
        $all_categories = Category::all();
        $brends = Brend::all();
        $data = Category::select( 'products.img as ProductImg', 'products.name as ProductName' , 'categories.name as CategoryName' , 'products.id as ProductId' , 'products.price as ProductPrice' , 'products.dsb as ProductDsb')
        ->join('products' , 'products.category_id' , 'categories.id')
        ->get();
        foreach($all_categories as $categories){
        $id = $categories->id; 
        $categories->file =  Brend::where('category_id' , $id)->get();
    }
        foreach($data as $product){
            $id  = $product->CategoryId;
            $product->file = Product::where('category_id' , $id)->get();
        }
        // dd($data);
        return view('product-details' , ['data'=>$products , 'categories'=>$all_categories , 'products'=>$data , 'brends'=>$brends] );
    }
    public function checkout(){
        return view('checkout');
    }
    public function cart(){
        return view('cart');
    }
    public function login(){
        return view('login');
    }
    public function blog(){
        return view('blog');
    }
    public function blog_single(){
        return view('blog-single');
    }
    public function error(){
        return view('404');
    }
    public function contact_us(){
        return view('contact-us');
    }
}
