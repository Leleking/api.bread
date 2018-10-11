<?php

namespace App\Http\Controllers\web\ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\product;
use App\model\category;
use App\model\orderDetail;
use App\model\order;
class ajaxController extends Controller
{
    public function deleteProduct(Request $request){
        if($request->ajax()){
            $product = product::find($request->item_id);
            $product->delete();
            return response()->json(['response'=>"Product successfully deleted"]);
        }
        
    }
    public function deleteCategory(Request $request){
        if($request->ajax()){
            $category = category::find($request->item_id);
            $category->delete();
            product::where('category_id',$request->item_id)->delete();
            return response()->json(['response'=>"Category and products successfully deleted"]);
        }
        
    }
    public function deleteOrder(Request $request){
        if($request->ajax()){
            $order = order::find($request->item_id);
            $order->delete();
            orderDetail::where('order_id',$request->item_id)->delete();
            return response()->json(['response'=>"Order successfully deleted"]);
        }
    }
}
