<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware('guest:admin')->except('logout');
    }
    
    public function showLoginForm(Request $request)
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // validate request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        // manual authentication
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // admin is logged in
            return redirect()->route('admin.home');
        } else {
            session()->flash('message', 'Login not found.');
            return back()->withInput();
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
