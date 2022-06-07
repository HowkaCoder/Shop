<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brend;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::select( 'products.id as ID' , 'products.name as Name' , 'categories.name as Category' , 'products.price as Price' , 'products.dsb as Describtion')
        ->join('categories' , 'categories.id' , 'products.category_id')
        ->get();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->validate([
            'name'=>'required|min:3|max:50',
            'category_id'=>'required',
            'price'=>'required',
            'dsb'=>'required|min:3|max:250',
            'img'=>'required'
        ]);
        Product::create($product);
        return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id' , $id)->get();
        if(count($product) != 0)
        {
        return $product;
        }
        else
        {
            return "error";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Product::where('id' , $id)->update([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'dsb'=>$request->dsb
        ]);
        return 'Success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id' , $id)->delete();
        return "success";
    }
}
