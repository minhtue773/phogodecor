<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        return view('admin.home');
    }

    public function login() {
        return view('admin.login');
    }
    public function postLogin(AdminLoginRequest $request) {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1])){
            return redirect()->route('admin.home')->with('ok', 'Đăng Nhập Thành Công');
        }else{
            return redirect()->back()->with('no', 'Đăng Nhập Thất Bại');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login')->with('ok', 'Đăng Xuất Thành Công');
    }
    public function updateProfile(Request $request, User $user) {
        $user->update($request->all());
        return redirect()->back()->with('ok', 'Cập nhật profile thành công');
    }
}
