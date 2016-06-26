<?php
/**
 * Created by PhpStorm.
 * User: Joel
 * Date: 5/20/2016
 * Time: 7:54 PM
 */

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller{
    public function showOrder(){
        $customers = DB::table('customers')->get();
        return view('home', ['customers' => $customers]);
    }
}