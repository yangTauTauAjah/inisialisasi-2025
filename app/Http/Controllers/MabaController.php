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
            return redirect()->back()->with(['error' => 'User with NIM not found.']);
        }
    }

    public function setPassword(Request $request)
    {
        $user = User::where('nim', $request->nim)->first();

        if (!$user) {
            return redirect()->back()->with('error','NIM kamu engga ditemukan, coba hubungi kakak PK kalian yaa.');
        }

        // Check if the user has no password set
        if (empty($user->password)) {
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
                $user->save();

                return redirect('login')->with('success', 'Password barumu udah kesimpen, ayo coba login.');
            } else {
                return redirect()->back()->with('error','Password gabole kosong yaa.');
            }
        }

        return redirect()->back()->with('error','Kamu udah pernah aktivasi akun .');
    }
}
