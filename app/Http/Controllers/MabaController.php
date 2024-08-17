<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MabaController extends Controller
{
    public function checkNIM(Request $request)
    {
        $nim = $request->login;
        $userExists = User::where('nim', $nim)->first();
        if ($userExists) {
            return view('setPassword')->with('success', 'Halo ' . $userExists->name)->with('user', $userExists);
        } else {
            return redirect()->back()->withErrors(['error' => 'User with NIM not found.']);
        }
    }

    public function setPassword(Request $request)
    {
        $user = User::where('nim', $request->nim)->first();

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect('login')->with('success', 'Password has been set successfully.');
        } else {
            return redirect()->back()->withErrors(['error' => 'User with NIM not found.']);
        }
    }
}
