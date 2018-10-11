<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\order;
use App\User;
class pagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }
    public function index(){
        $income = order::where('status',1)->sum('total');
        $orderCount = count(order::all());
        $orderPending = order::where('status',0)->get();
        $order = order::paginate(5);
        $orderPending = $orderPending;
        return view('defaultPages.home')->with('order',$order)->with('orderPending',$orderPending)->with('orderCount',$orderCount)->with('income',$income);
    }
    public function categoryIndex(){
        return view('defaultPages.category.index');
    }
    public function orders(){
        $order = order::all();
        return view('defaultPages.orders.index')->with('order',$order);
    }
    public function orderReturns(){
        $order = order::where('status',2)->orderBy('updated_at','ASC')->get();
        return view('defaultPages.orders.returns')->with('order',$order);
    }
    public function orderDetail($id){
        $order = order::find($id);
        return view('defaultPages.orders.show')->with('order',$order);
    }
    public function customers(){
        $users = User::where('isAdmin',0)->get();
        return view('defaultPages.customers.index')->with('users',$users);
    }
    public function customerGroups(){
        $users = User::where('isAdmin',0)->get();
        return view('defaultPages.customers.groups')->with('users',$users);
    }
    public function settings(){
        return view('defaultPages.settings.index');
    }
    public function addAdmin(){
        return view('defaultPages.settings.admin.add');
    }
    public function viewAdmin(){
        $users = User::where('isAdmin',1)->get();
        return view('defaultPages.settings.admin.view')->with('users',$users);
    }
}
