<?php

namespace App\MOdels;
use Auth;  

class AdminFunction {
    //*********************************** CRUD **************************************/
 
    public function add($data)
    {
        $add = Admin::create($data);
        if($add){
            return true;
        }
        return false;
    }
    public function update($acc,$data)
    {
        if($acc->update($data)){
            return true;
        }
        return false;
    }
    public function delete($acc)
    {
        if($acc->delete()){
            return true;
        }
        return false;
    }



    //***********************************LOGIN***************************************/
    public function checkLogin($data,$remember)
    {
        $check_login = Auth::guard('admin')->attempt($data,$remember);
        if($check_login){
            return true;
        }
        return false;
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
    }
    // public function register($data,$route_next,$route_current)
    // {
    //     if($data['verity']){
    //         if($data['password'] == $data['confirm_password']){
    //             $pass_hashed = bcrypt($data['password']);
    //             $data['password'] = $pass_hashed;
    //             $add = $this->create($data);
    //             if($add){
    //                 return redirect()->route('$route_next')->with('yes','Đăng ký thành công');
    //             }
    //         return redirect()->route('$route_current')->with('no','Đăng ký không thành công');
    //         }else{
    //             return redirect()->route('$route_current')->with('no','Confirm password sai');
    //         }
    //     }
    // }
}

?>