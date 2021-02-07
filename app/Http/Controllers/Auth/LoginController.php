<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\Response;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Hash;

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

    protected function guard()
    {
        
        return Auth::guard($this->guard);
    }


    protected function setGuard($request)
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
      
    }
    public function login(Request $request){
        $user = $request->user ?? null;
 
        switch($user){
           case 'user':
               $user =  User::where('email',$request->email)->where('password', md5($request->password))->first();
                if ($user){
                    return $this->authenticated($request, $user);
                }else{
                    return $this->error([], "User doesn't exist");
                }
           break;
           case 'admin':
                $user =  Admin::where('email',$request->email)->where('password', md5($request->password))->first();
                if ($user){
                    return $this->authenticated($request, $user);
                }else{
                    return $this->error([], "User doesn't exist");
                }
           break;
           
           default:
                $user =  User::where('email',$request->email)->where('password', md5($request->password))->first();
                if ($user){
                    return $this->authenticated($request, $user);
                }else{
                    return $this->error([], "User doesn't exist");
                }
               break;
           }

           $user =  $model->where('email',$request->email)->where('password', Hash::check($request->password))->first();
           if ($user){
               return $this->authenticated($request, $user);
           }else{
            return $this->error([], "User doesn't exist");
           }
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
