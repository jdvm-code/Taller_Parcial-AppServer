<?php
namespace App\Http\Repository;


use App\Http\Services\UserServices;
use App\Mail\ConfirmAccount;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Mail;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserRepository extends BaseRepository implements UserServices
{
    public function __construct(private User $model)
    {
        parent::__construct($model);
    
    }
      public function store(Request $request)
    {
        try {
            $token =bin2hex(random_bytes(16));
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'remeber_token'=> $token,
                'role_id'=>$request->role_id
            ]);
            // Generate token
            //$token = JWTAuth::fromUser($user);
            //Mail::to($user->email)->send(new ConfirmAccount($user));
            return $user;
        } catch (\Exception $e) {
            
        }
    }


}
