<?php
/**
 * Created by PhpStorm.
 * User: Joel
 * Date: 5/20/2016
 * Time: 8:30 AM
 */

namespace App\Http\Controllers;


use App\Category;
use App\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller{

    public function getViewItem(){
        $getUser = Auth::User();
        $userId = $getUser->id;
        //$items = Item::all();
        $items = DB::table('items')->where('user_id', '=', $userId)->get();
        return view('view-items', ['items' => $items]);
    }
    public function getAddItems(){
        $category = Category::all();
        return view('add-items', ['categories' => $category]);
    }
    public function orderedItems(){
        $orders = DB::table('orders')->where('user_id', '=', 1)->where('c_id', '=', 1)->get();
        return view('home', ['orders'=>$orders]);
    }

}