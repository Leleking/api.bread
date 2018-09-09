<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\order;
class pagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }
    public function index(){
        return view('defaultPages.home');
    }
    public function categoryIndex(){
        return view('defaultPages.category.index');
    }
    public function orders(){
        $order = order::all();
        return view('defaultPages.orders.index')->with('order',$order);
    }
}
