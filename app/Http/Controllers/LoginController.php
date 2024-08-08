<?php

namespace App\Http\Controllers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        try {
            $data = [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ];


            if (Auth::Attempt($data)) {
                return redirect()->intended();
            } else {
                Session::flash('error', 'Email atau Password Salah');
                return redirect('/login');
            }
        } catch (AuthenticationException $e) {

            Session::flash('error', 'Login GAGAL.');
            return redirect('/');

        } catch (\Exception $e) {

            Session::flash('error', 'Terjadi kesalahan pada sistem. Silakan coba lagi nanti.');
            return redirect('/login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
