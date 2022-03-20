<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = Products::all();
        return view('pages.homepage', ['products'=>$data]);
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
        $request->validate([
            'product_name' => 'required',
            'product_company' => 'required',
            'product_quantity' => 'required',
            'total_number_of_product' => 'required',
            'price_per_product' => 'required',
        ],
        [
            'product_name.required' => 'Enter the product name please',
            'company_name.required' => 'Enter the company name please',
            'product_quantity.required' => 'Enter the product quantity please',
            'total_number_of_product.required' => 'Enter the total number of product please please',
            'price_per_product.required' => 'Enter the price per product please please',
        ]
        );

        $product = new Products([
            'product_name' => $request->get('product_name'),
            'product_company' => $request->get('product_company'),
            'product_quantity' => $request->get('product_quantity'),
            'total_number_of product' => $request->get('total_number_of_product'),
            'price_per_product' => $request->get('price_per_product')
        ]);

        $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.homepage',['id'=>$id]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function getProducts(){
        return Products::all();
    }

    function getSpecificProduct($id){
        return Products::find($id);
    }

    function addProduct(Request $request){
        $product = new Products([
            'product_name' => $request->product_name,
            'product_company' => $request->product_company,
            'product_quantity' => $request->product_quantity,
            'total_number_of product' => $request->total_number_of_product,
            'price_per_product' => $request->price_per_product
        ]);
        $result = $product->save();
        if($result){
            return ['result'=>'succesfully added'];
        }else{
            return ['result'=>'data has not been saved'];
        }
        
    }

    function modify(Request $request){
        $product = Products::find($request->id);
        $product->product_name = $request->product_name;
        $product->product_company = $request->product_company;
        $product->price_per_product = $request->price_per_product;

        // return ['result'=>$product];
        $result = $product->save();
        if($result){
            return ['result'=>'succesfully updated'];
        }else{
            return ['result'=>'data has not been updated'];
        }
    }

    function search($product_company){
        
        return Products::where("product_company","like","%".$product_company."%")->get();
    }

    function delete($id){

        $result = Products::find($id)->delete();
        if($result){
            return ['result'=>'succesfully deleted'];
        }else{
            return ['result'=>'data has not been deleted'];
        }
        
    }
}
