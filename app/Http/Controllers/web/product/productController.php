<?php

namespace App\Http\Controllers\web\product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\product;
use App\model\category;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = product::all();
        $category = category::all();
        return view('defaultPages.product.index')->with('product',$product)->with('category',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('defaultPages.product.add');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'details'=> 'required',
            'category_id'=>'required',
            'image'=>'required',
            'pieces'=>'required',
            'price'=>'required'
          ]);
        $image_file= $request->image;
        
        if($image_file){
            $imagename=$image_file->getClientOriginalName();
            $image_file->move('img/product',$imagename);
            $image_file= $imagename;

        }
        $product = new product;
        $product->category_id = $request->category_id;
        $product->name=$request->name;
        $product->details=$request->details;
        $product->image=$image_file;
        $product->pieces=$request->pieces;
        $product->price=$request->price;
        $product->user_id=Auth()->user()->id;
        $product->save();
        return back()->withMessage("Product successfully added");
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
}
