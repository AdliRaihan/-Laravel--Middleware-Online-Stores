<?php

namespace App\Http\Controllers\Stores;

use Cookie;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class addStoreController extends Controller
{
    public function index(Request $retcook){
        $val = $retcook->cookie('nama');
        $items = array($retcook->cookie('item_image'),$retcook->cookie('item_name'));
        return view('stores',['valery' => $val, 'items' => $items]);
    }
    public function store_data(Request $req){}
    public function viewContent(){
        return view('stores');
    }
    public function store(Request $setInformation){
        $response = new \Illuminate\Http\Response('Role User');
        return redirect('/list')->withCookie(cookie('nama',$setInformation->role,60));
    }
    public function destroy(Request $deleteInformation){
        $deleteValue = $deleteInformation->cookie('nama');
        return redirect('/')->withCookie(Cookie::forget('nama'));
    }
    public function addItem(Request $haveDump){
        return view('stores_add');
    }
    public function addItem_onqueue(Request $haveItem){
        $items = array($haveItem->assetNameImg,$haveItem->judulProduk);
        $response = new \Illuminate\Http\Response('Item Added');
        return redirect('/list')->withCookie(cookie('item_image',$items[0],50))
                                ->withCookie(cookie('item_name',$items[1],50));
    }
}
