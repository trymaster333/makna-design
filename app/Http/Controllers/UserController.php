<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function register()
    {
        $data['title'] = 'Register';
        return view('admin/register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }


    public function login()
    {
        $data['title'] = 'Login';
        //return view('admin/login', $data);
        //Auth::loginUsingId(1);

        if (Auth::check()) {
            session()->flash('message', 'Welcome!');
            return redirect()->intended('admin/about');
        }
        return view('admin/login', $data);
    }

    public function login_action(Request $request)
    {
        // validation
        request()->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        // Check if the user clicks "remember me" in the login form
        $remember = (request()->remember) ? true : false;

        // If login using email
        if (Auth::attempt(['email' => request()->username, 'password' => request()->password], $remember)) {
            request()->session()->regenerate();
            return redirect()->intended('admin/about');
        }
        // If login using username
        else if (Auth::attempt(['username' => request()->username, 'password' => request()->password], $remember)) {
            request()->session()->regenerate();
            return redirect()->intended('admin/about');
        }
        // If incorrect credentials
        else {
            return back()->withErrors([
                'password' => 'Username / Password anda salah.',
            ]);
        }
    }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('admin/password', $data);
    }
    public function settingpw()
    {
        $data['title'] = 'Ubah Password';
        return view('admin.setting.password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return redirect()->route('setting')->with('success', 'Password berhasil diubah.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}