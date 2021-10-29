<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\LoginRequest;
use App\Models\AdminFunction;
use App\Models\Admin;
use App\Models\User;
use Auth;
use Str;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    /********************** CRUD admin ****************************/
    public function admin(Request $req){
        $acc = Admin::searchFilter($req)->paginate(3);
        return view('admin.admin.admin',compact('acc'));
    }
    public function create_admin(){
        return view('admin.admin.create-admin');
    }
    public function store_admin(AdminRequest $req){
        $pass_hashed = bcrypt($req->password);
        $ex = $req->image->extension();
        $file_name = 'ADMIN-'.time().'-'.Str::random(10).'.'.$ex;
        $req->image->move(public_path('upload'), $file_name);
        $data = [
            'name' => $req->name,
            'image' => $file_name,
            'email'=> $req->email,
            'phone' => $req->phone,
            'password' => $pass_hashed,
            'status' => 0,
            'verity' => 0,
            'deleted_at' => now()->toDateTimeString()
        ];
        // dd($data);
        $add = new AdminFunction();
        if($add->add($data)){
            return redirect()->route('admin')->with('yes','Thêm mới thành công');
        }else{
            return redirect()->route('admin')->with('no','Thêm mới không thành công');
        }

    }
    public function edit_admin(Admin $acc)
    {
        return view('admin.admin.edit-admin',compact('acc'));
    }
    public function update_admin(Admin $acc,AdminRequest $req)
    {
        $pass_hashed = bcrypt($req->password);
        $ex = $req->image->extension();
        $file_name = 'ADMIN-'.time().'-'.Str::random(10).'.'.$ex;
        $req->image->move(public_path('upload'), $file_name);
        $data = [
            'name' => $req->name,
            'image' => $file_name,
            'email'=> $req->email,
            'phone' => $req->phone,
            'password' => $pass_hashed,
        ];
        $route = 'admin';
        $update = new AdminFunction();
        if($update->update($acc,$data)){
            return redirect()->route('admin')->with('yes','Cập nhật thành công');
        }else{
            return redirect()->route('admin')->with('no','Cập nhật không thành công');
        }
    }
    public function delete_admin(Admin $acc){
        if(Auth::guard('admin')->user()->id == $acc->id){
            return redirect()->back()->with('no','Tài khoản hiện đang đăng nhập');
        }else{
            $delete = new AdminFunction();
            if($delete->delete($acc)){
                return redirect()->route('admin')->with('yes','Xóa thành công');
            }
            return redirect()->back()->with('no','Tài khoản không tồn tại');
        }
    }
    //----------------------------      -Login-   ----------------------------------//
    public function login(){

        return view('admin.login');
    }
    public function check_login(LoginRequest $req){
        $data = $req->only('email','password');
        // dd($data);
        $remember = $req->has('remember');
        $check_login = new AdminFunction();
        if($check_login->checkLogin($data,$remember)){
            return redirect()->route('admin')->with('yes','Đăng nhập thành công');
        }
        return redirect()->back()->with('no','Sai thông tin đăng nhập');
    }
    public function logout()
    {
        $logout = new AdminFunction();
        $logout->logout();
        return redirect()->route('login')->with('yes','Đăng xuất thành công !');
    }
    public function register(){
        return view('admin.register');
    }
    public function check_register(AdminRequest $req)
    {
        $pass_hashed = bcrypt($req->password);
        $data = [
            'name' => $req->name,
            'email'=> $req->email,
            'password' => $pass_hashed
        ];
        if($req->terms){
            if($req->password == $req->repass){
                $add = User::create($data);
                if($add){
                    return redirect()->route('admin')->with('yes','Đăng ký thành công');
                }
                return redirect()->route('register')->with('no','Đăng ký không thành công');
            }else{
                return redirect()->route('register')->with('no','Confirm password sai');
            }
        }else{
            return redirect()->route('register')->with('no','Chưa chấp nhận điều khoản');
        }
    }
}
