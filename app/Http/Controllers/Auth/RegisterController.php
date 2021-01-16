<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Traits\Response;

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers, Response;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public $guard;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if (isset($data['user'])){
            $user = $data['user'];
        }
        else{
            $user = 'user';
        }

        $table = $user.'s';
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.$table],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    protected function guard($user)
    {
        switch($user){
            case 'user':
                $this->guard = 'web';
            break;
            case 'admin':
                $this->guard = 'admin';
            break;
            default:
                $this->guard = 'web';
        }

        return Auth::guard($this->guard);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data['user'] = $data['user'] ? $data['user'] : null;
        switch($data['user']){
            case 'user':
                $user = new User();
            break;
            case 'admin':
                $user = new Admin();
                break;
            default:
                $user = new User();
        }
            $user->name = $data['name'];
            $user->email =  $data['email'];
            $user->password = Hash::make($data['password']);
            $user->save();

            return $user;
    }


    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {

        try{
            $accessToken = $user->createToken('authToken')->accessToken;
            return $this->success(["user"=>$user, "access_token"=>$accessToken], "User Registeration Successfull", 200);
        }catch(Exception $e){
            return $this->error($e->getMessage(), "Error Registering User", 400);
        }

    }
}
