<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/add-items', [
    'uses' => 'CategoryController@getAddItems',
    'as' => 'add-items',
]);
Route::get('/view-items', [
    'uses' => 'CategoryController@getViewItem',
    'as' => 'view-items',
]);
Route::get('/home', 'CategoryController@orderedItems');
Route::get('home', function(){
    $orders = DB::table('orders')->where('user_id', '=', 1)->where('c_id', '=', 1)->get();
    return View::make('home')->with('orders', $orders);
    //return Response::json($orders);
});


Route::post('/add-items',[
    'uses' => 'ItemController@itemCreate',
    'as' => 'add-items',
]);
/*This is the REST API that will interract with the mobile Apps*/

Route::get('/api/v1/location', function(){
    $location = \App\Location::all(array('id', 'location'));
    return Response::json(array(
        'error' => false,
        'locations' => $location,
        'status_code' => 200
    ));
});
Route::get('/api/v1/register', 'CustomerController@registerCustomer');
Route::get('/api/v1/login', 'CustomerController@loginCustomers');

Route::get('/api/v1/business/{location}', function($location){
    if ($location == nullOrEmptyString()){
        $business = \App\User::all(array());
    }else{
        $business = \App\User::where('location', $location)->get();
    }
    return Response::json(array(
        'error' => false,
        'users' => $business,
        'status_code' => 200
    ));
});
Route::put('api/v1/testing', function(Request $request){
    if($request == null){
        return Response::json($request);
    }else {
        $customer = new Customer;
        $customer->first_name = $request['first_name'];
        $customer->last_name = $request['last_name'];

        $customer->save();
    }
    return Response::json(array(
        'error' => false,
        'customers'=> $customer,
        'status_code' => 200
    ));
});