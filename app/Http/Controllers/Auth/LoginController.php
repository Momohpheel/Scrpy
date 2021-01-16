<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\Response;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers, Response;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public $guard;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function guard($request)
    {

        $user = $request->user ?? null;
 
         switch($user){
            case 'user':
                $this->guard = 'web';
            break;
            case 'admin':
                $this->guard = 'admin';
            break;
            default:
                $this->guard = 'web';
                break;
            }
        return Auth::guard($this->guard);
    }


    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        try{
            $accessToken = $user->createToken('authToken')->accessToken;
            return $this->success(["user"=>$user, "access_token"=>$accessToken], "User Login Successfull", 200);
        }catch(Exception $e){
            return $this->error([], $e->getMessage());
        }
    }
}
