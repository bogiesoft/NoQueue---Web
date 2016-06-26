<?php
/**
 * Created by PhpStorm.
 * User: Joel
 * Date: 5/20/2016
 * Time: 8:47 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;

class ItemController extends Controller{

    protected function create(array $data)
    {
        return Item::create([
            'item' => $data['item'],
            'price' => $data['price'],
            'category' => $data['category'],
            'description' => $data['description'],
        ]);
    }
    
    public function itemCreate(Request $request){
        $item = new Item();
        $item->item = $request['item'];
        $item->item_price = $request['price'];
        $item->cat_id = $request['category'];
        $item->description = $request['description'];

        $message = "There was an error saving item into our database, try again or contact System Support: support@noqueue.com";

        if ($request->user()->items()->save($item)){
            $message = "Item created successfully";
        }
        return redirect()->route('add-items')->with(['message' => $message]);
    }
}