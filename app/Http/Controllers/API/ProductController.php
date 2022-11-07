<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
//use App\Models\Product;
use App\Http\Requests\Alo\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $successCode=200;
    public function index()
    {
      $products=Product::all();
      //return response()->json(['data'=>$products]);
      return response()->json(['data'=>'test']);
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
    public function store(ProductRequest $request)
    {
        if (isset($request->validator) && $request->validator->fails()) 
        {
            return response()->json($request->validator->messages(), 400);
        }
        else
        {
            $validatedData=$request->validated();
            //if($validatedData['price']==null)
                
            return response()->json(['data'=>$validatedData]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(ProductRequest $request, $id)
    {
        $validatedData= $request->validated();
       // $product=$request->all();
    $product=Product::find($id)->update($validatedData);
        //$requiredRecord->update($data);
    return response()->json(['m'=>$product]);

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
}
