<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginStoreRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(LoginStoreRequest $request)
    {
        try {

            Auth::guard('member')
                        ->attempt(['email' => $request->email, 'password' => $request->password], true);

            return redirect()
                    ->route('auth.links.index');

        } catch (\Exception $e) {

            return redirect()
                        ->withInput()
                        ->with('error','Login failed, please try again!')
                        ->back();
        }
    }
    public function logout()
    {
        Auth::guard('member')->logout();
        return redirect()
                ->route('auth.login.index');
    }
}
