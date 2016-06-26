<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    //protected $guard = 'web';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'business_name' => 'required',
            'type_of_business' => 'required',
            'email_confirmation' => 'required|email|',
            'password_confirmation' => 'required|min:6',
            'address' => 'required',
            'location' => 'required',
            'terms' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'busnx_name' => $data['business_name'],
            'busnx_type' => $data['type_of_business'],
            'busnx_address' => $data['address'],
            'location' => $data['location'],
        ]);
    }
    public function register1(Request $request){
        $name = $request['name'];
        $business_name = $request['business_name'];
        $type_of_business = $request['type_of_business'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $address = $request['address'];
        $location = $request['location'];

        $user = new User();
        $user->name = $name;
        $user->busnx_name = $business_name;
        $user->busnx_type = $type_of_business;
        $user->email = $email;
        $user->password = $password;
        $user->busnx_address = $address;
        $user->location = $location;

        $user->save();

        Auth::login($user);

        return redirect('home');
    }
}
