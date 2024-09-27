<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function register() {
        return view('clients.register');
    }

    public function postRegister(Request $request) {
        $request->validate([
            'name' => 'required|max:30|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3'
        ],[
            'name.required' => 'Tên là bắt buộc.',
            'name.max' => 'Tên không được vượt quá 30 ký tự.',
            'name.min' => 'Tên phải có ít nhất 2 ký tự.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự.',        
        ]);

        try {
            
            $request->merge(['password' => bcrypt($request->input('password'))]);
            User::create($request->all());
            return redirect()->route('clients.login')->with('ok', 'Đăng ký tài khoản thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('no', 'Đăng ký tài khoản thất bại');
        }
    }

    public function login() {
        return view('clients.login');
    }

    public function postLogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3'
        ],[
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không hợp lệ.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự.',        
        ]);
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('clients.home')->with('ok', 'Đăng nhập thành công');
        }else{
            return redirect()->back()->with('no', 'Đăng nhập thất bại, hãy thử lại');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->back()->with('ok', 'Đăng xuất thành công!');
    }
}
