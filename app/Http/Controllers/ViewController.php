<?php
/**
 * Created by PhpStorm.
 * User: Joel
 * Date: 5/20/2016
 * Time: 12:56 PM
 */

namespace App\Http\Controllers;


use App\Item;

class ViewController extends Controller{
    public function getViewItem()
    {
        $posts = Item::all();
        return view('view-items', ['items' => $posts]);
    }
}