<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller {


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $products = Product::all();
        
        return view('product.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('product.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        if($request->ajax()) {
            Product::create($request->all());
            $message = 'El producto fue insertado satisfactoriamente';
            return response()->json(['message' => $message]);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
        $product = Product::findOrfail($id);
        
        return view('product.edit', compact('product'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
        if($request->ajax()) {
            $product = Product::findOrFail($id);
            $product->update($request->all());
            $message = 'El producto fue actualizado satisfactoriamente';
            return response()->json(['message' => $message, 'url' => '/']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {

        if($request->ajax()) {
            Product::destroy($id);
            $message = 'El producto fue eliminado satisfactoriamente';
            return response()->json(['message' => $message]);
        }
    }
}
