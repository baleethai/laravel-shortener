<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function store(LoginStoreRequest $request)
    {

        try {
            Auth::guard('member')->logout();
            Auth::attempt(['email' => $request->email, 'password' => $request->password], true);

            if ( ! Auth::check()) {
                return redirect()
                            ->route('auth.login.admin.index')
                            ->with('error','Login failed, please try again!');
            }
            return redirect()
                    ->route('auth.admin.dashboard.index');

        } catch (\Exception $e) {
            return redirect()
                        ->withInput()
                        ->with('error','Login failed, please try again!')
                        ->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()
                ->route('home.index');
    }
}
