<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
  
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable;
  
    protected $fillable = [
        'name', 'email', 'password',
    ];
  
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function generateToken($token)
    {
        $this->remember_token = $token;
        $this->save();

        return $this->remember_token;
    }


    public function updateUser($user)
    {
        $this->remember_token =    $user->remember_token;
        $this->email =    $user->email;
        $this->name =    $user->name;
        $this->save();

        return $this->remember_token;
    }
}
