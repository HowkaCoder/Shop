<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brend;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // sign in
    public function admin(){
        $products = Product::all();
        return view('admin.admin' , ['products'=>$products]);
    }
    public function delete($id){
        Product::where('id' , $id)->delete();
        return redirect()->route('admin_welcome');
    }
    public function update($id){
        $categories = Category::all();
        $data = Product::where('id' , $id)->get();
        return view('admin.update' , [ 'data'=>$categories,   'product'=>$data]);
    }
    public function add_update(Request $request){
        // dd($path);
        Product::where('id' ,$request->id)->update([
            'name'=>$request->name,
            'dsb'=>$request->dsb,
            'price'=>$request->price,
            'category_id'=>$request->category_id
            
        ]);
        $products = Product::all();
        $categories = Category::all();
        return redirect()->route('admin_welcome',  ['data'=>$categories , 'products'=>$products]);
    
    }
    // public function signin(){
    //     return view('admin.login');
    // }
    // public function signup(){
    //     return view('admin.reg');
    // }

    // public function signup_check(Request $request){
    //     $uesr = $request->validate([
    //         'name'=>'required',
    //         'email'=>'required|email',
    //         'password'=>'required'
    //     ]);
    //     User::create($uesr);
    //     // dd($request);
    // }


    // public function signin_check(Request $request){
    //     $user = $request->validate([
    //         'name'=>'required',
    //         'password'=>'required'
    //     ]);
    //     if(Auth::attempt($user)){
    //         $request->session()->regenerate();
    //         return redirect()->route('admin_welcome');
    //     }
    //         // return $user;
        
    //     return abort(401);
    // }


    // admin panel 
    public function category(){
        $categories = Category::all();
        return view('admin.category' , ['data'=>$categories]);
    }
        
    public function product(){
        $categories = Category::all();
        $products = Product::all();
        $brends = Brend::all();
        return view('admin.product' ,  ['data'=>$categories  , 'products'=>$products , 'brends'=>$brends]);
    }
    public function brend(){
        $categories = Category::all();
        return view('admin.brend' ,  ['categories'=>$categories  ]);
    }




    // admin activites

    public function add_brend(Request $request){
        $categories = Category::all();
        Brend::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id
        ]);
        return redirect()->route('admin_brend' , ['categories'=>$categories]);

    }

    public function add_category(Request $request){
        Category::create([
            'name'=>$request->name
        ]);
        $categories = Category::all();
        return redirect()->route('admin_category' , ['data'=>$categories]);
    } 
    public function add_product(Request $request){
        $fileName = time().'_'.$request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('public/images', $fileName);
        // dd($path);
        Product::create([
            'name'=>$request->name,
            'dsb'=>$request->dsb,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'img'=>$fileName
            
        ]);
        $products = Product::all();
        $categories = Category::all();
        return redirect()->route('admin_product',  ['data'=>$categories , 'products'=>$products]);
    }
}
