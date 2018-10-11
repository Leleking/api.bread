<?php

namespace App\Http\Controllers\web\report;
use App\model\order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class reportController extends Controller
{
    public function index(){
        return view('defaultPages.reports.index');
    }
    public function salesReport(){
        $order = order::all();
        return view('defaultPages.reports.salesReport')->with('order',$order);
    }
}
