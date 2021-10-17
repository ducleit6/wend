<?php

namespace App\MOdels;
use App\Models\User;

use Auth;

class LoginFunction 
{
    //***********************************LOGIN***************************************/
    public function checkLogin($data,$remember)
    {
        $check_login = Auth::attempt($data,$remember);
        if($check_login){
            return true;
        }
        return false;
    }
    public function logout()
    {
        Auth::logout();
    }
    public function register($data)
    {
        // return $data;
        if($data['verity'] == 0){
            if($data['password'] == $data['confirm_password']){
                $pass_hashed = bcrypt($data['password']);
                $data_end = [
                    'name' => $data['name'],
                    'image' => $data['image'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'address' => $data['address'],
                    'gender' => $data['gender'],
                    'password' => $pass_hashed,
                    'verity' => $data['verity'],
                    'status' => $data['status'],
                ];
                // return $data_end;
                $add = User::create($data_end);
                if($add){
                    return 0;
                }
                return 1;
            }else{
                return 2;
            }
        }
    }
}
