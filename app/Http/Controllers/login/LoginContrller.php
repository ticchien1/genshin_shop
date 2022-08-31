<?php

namespace App\Http\Controllers\login;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;

class LoginContrller extends Controller
{
    public function login(){
        return view('signup.signup');
    }

    public function register(){
        return view('signup.register');
    }

    public function store(){
        
    }
    public function reg(Request $request){

        $email = DB::select("select email from users where email =  '".$request -> input('email')."'");
       // dd($email);
        @$this->validate($request, [
            'phone' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:10',
            
        ]);
        if($request->password_confirmation != $request-> password){
            session()->flash('error', 'Mật Khẩu Nhập Lại Không Chính Xác');
          //return $data;
          return redirect()->route('register')->withInput();
            
        }
        else if($email){
            session()->flash('error', 'Email Đã Tồn Tại');
            return redirect()->route('register')->withInput();
  
        }
        else{
            try {
                User::create([
                    'name' => $request->full_name,
                    'namelogin' =>$request->login_name,
                    'phone' =>$request->phone,
                    'email' =>$request->email,
                    'password' => Hash::make($request-> password),
                    // User::save()
                ]);
             session()->flash('success', 'Tạo Tài Khoản Thành Công');
            return redirect()->route('login');

            } catch (Exception $e) {
                session()->flash('error', 'Lỗi Không Xác Định');
                
                return redirect()->back();

            }
        }
        
    }

}
