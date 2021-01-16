<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Traits\Response;

class UserController extends Controller
{

    use Response; 
    public function createUserProfile(Request $request){
        
        $validated = $request->validate([
            "firstname" => "required|string",
            "lastname" => "required|string",
            "phone" => "required|string",
            "address" => "required|string",
            "state" => "required|string",
            "city" => "required|string",
            "country" => "required|string",
            "gender" => "required|string",
        ]);

        try{

            $profile  = Profile::firstorCreate([
                "firstname" => $validated['firstname'],
                "lastname" => $validated['lastname'],
                "phone" => $validated['phone'],
                "address" => $validated['address'],
                "state" => $validated['state'],
                "city" => $validated['city'],
                "country" => $validated['country'],
                "gender" => $validated['gender'],
                "user_id" => auth()->user()->id,
            ]);
    
            return $this->success($profile, "Profile Updated", 200);
    
    

        }catch(Exception $e){
            return $this->error(true, "Profile Update Error", 400);
        }

       

        

    }

    public function getUserProfile(){

        try{

            $profile =  Profile::where('user_id', auth()->user()->id)->first();

        $data = [
            "firstname" => $profile->firstname,
            "lastname" => $profile->lastname,
            "phone" => $profile->phone,
            "address" => $profile->address,
            "state" => $profile->state,
            "city" => $profile->city,
            "country" => $profile->country,
            "gender" => $profile->gender,
        ];

        return $this->success($data, "Profile", 200);

        }catch(Exception $e){
            return $this->error(true, "Couldn.t get profile", 400);
        }
        
    }
}
