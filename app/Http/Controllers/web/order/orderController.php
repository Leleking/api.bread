<?php

namespace App\Http\Controllers\web\order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\order;

class orderController extends Controller
{
    public function changeStatus(Request $request){
        $order = order::find($request->item_id);
        $order->status = $request->status;
        $order->save();
        return back()->withMessage("Mark successfully changed");
        
    }
}
