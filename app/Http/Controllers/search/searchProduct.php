<?php

namespace App\Http\Controllers\search;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\product;
use App\Http\Resources\productGet as productGetResource;
class searchProduct extends Controller
{
    public function search(Request $request,$id){
        
        if($request->isMethod('post')){
           
            $product = product::where('category_id',$id)->where('name','like','%'.$request->name.'%')->get();
            //return productGetResource::collection($product);
             return productGetResource::collection($product);
        
               // return response()->json(['error'=>'An error occured']);
        
        }
    }
}
