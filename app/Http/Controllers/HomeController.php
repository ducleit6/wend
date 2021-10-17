<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\User;
use App\Models\Ranting;
use App\Models\LoginFunction;
use Auth;
use Str;
use Mail;
class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }
    public function ranting(Request $req){
        $data = $req->only('user_id','tour_id','services','hospitality','room','comfort','satisfasion','cleanliness','comment');
        $rated = Rantings::Where($req->only('user_id','tour_id'))->First();
        if($rated){
            $rated->Where('id', $rated->id)->update(['number_start' => $req->number_start]);
        } else {
            Rantings::add($data);
        }
        return redirect()->back();
    }

    /******************************** Login - Register ***************************/
    public function login_user()
    {
        return view('home.login');
    }
    public function check_login_user(LoginRequest $req)
    {
        $data = $req->only('email','password');
        $remember = $req->has('remember');
        // dd($data,$remember);
        $check_login = new LoginFunction();
        if($check_login->checkLogin($data,$remember)){
            return redirect()->route('home')->with('yes','Đăng nhập thành công');
        }
        return redirect()->back()->with('no','Sai thông tin đăng nhập');
    }
    public function register_user()
    {
        return view('home.register');
    }
    public function add_register_user(RegisterRequest $req)
    {
        $remember = $req->has('remember');
        $pass_hashed = bcrypt($req->password);
        $ex = $req->image->extension();
        $file_name = 'USER-'.time().'-'.Str::random(10).'.'.$ex;
        $req->image->move(public_path('upload'), $file_name);
        $data = [
            'name' => $req->name,
            'image' => $file_name,
            'email' => $req->email,
            'phone' => $req->phone,
            'address' => $req->address,
            'gender' => $req->gender,
            'password' => $req->password,
            'confirm_password' => $req->confirm_password,
            'verity' => 0,
            'status' => 0,
        ];
        $register = new LoginFunction();
        // dd($register->register($data));
        if($register->register($data) == 0){
            return redirect()->route('home')->with('yes','Đăng ký thành công');
        }elseif($register->register($data) == 1){
            return redirect()->back()->with('no','Đăng ký không thành công');
        }else{
            return redirect()->back()->with('no','Confirm password sai');
        }
        
    }
    public function logout_user()
    {
        $logout = new LoginFunction();
        $logout->logout();
        return redirect()->route('home')->with('yes','Đăng xuất thành công !');
    }
    public function view_forgot()
    {
        return view('home.forgot');
    }
    public function post_forgot(Request $req)
    {
        $rules=[
            'email'=>'required|exists:users'
        ];
        $msg=[
            'email.required'=>'Email không được trống!',
            'email.exists'=>'Email không tồn tại!'
        ];
        $req->validate($rules,$msg);
        $user = User::where('email', $req->email)->first();
        $new_pass = Str::random(6);
        $data = [
            'name' => $user->name,
            'image' => $user->image,
            'email' => $user->email,
            'address' => $user->address,
            'phone' => $user->phone,
            'gender' => $user->gender,
            'password' => bcrypt($new_pass),
            'verity' => $user->verity,
            'status' => $user->status,
        ];
        $user->update($data);
        Mail::send('email.forgot',compact('user','new_pass') , function($email) use($user) {
            $email->subject('Wend - Email lấy lại mật khẩu');
            $email->to('Vnbboy12345@gmail.com',$user->name); /***Email nhận mật khẩu mới ***/
        });
        return redirect()->route('home')->with('yes','Vui lòng kiểm tra tin nhắn tới '.$user->email);
    }
    public function update_user(User $user)
    {
        return view('home.infor',compact('user'));
    }
    public function post_update_user(User $user,UpdateRequest $req)
    {
        if(isset($req->image)){
            $ex = $req->image->extension();
            $file_name = 'USER-'.time().'-'.Str::random(10).'.'.$ex;
            $req->image->move(public_path('upload'), $file_name);
        }
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'address' => $req->address,
            'phone' => $req->phone,
            'gender' => $req->gender,
            'password' => bcrypt($req->password),
            'verity' => $user->verity,
            'status' => $user->status,
            'image' => isset($req->image) ? $file_name: $user->image,
        ];
        $user->update($data);
        return redirect()->route('home')->with('yes','Thông tin tài khoản đã được cập nhật');
    }
}
