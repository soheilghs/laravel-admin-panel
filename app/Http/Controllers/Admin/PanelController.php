<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PanelController extends Controller
{

    public function loginPage() : View
    {
        return view('admin.login');
        //return view('admin.panel.dashboard');
    }

    public function login(Request $request) : RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'exists:users,email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (Hash::check($request->password, $user->password)) {
            if ($user->role != 'admin') {
                abort(403);
            }

            auth()->login($user);
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with([
            'auth' => 'fail'
        ]);
    }

    public function dashboard() : View
    {
        return view('admin.panel.dashboard');
    }
}
