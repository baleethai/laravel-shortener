<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterStoreRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(RegisterStoreRequest $request)
    {
        try {

            $member = new Member();
            $member->name = $request->name;
            $member->email = $request->email;
            $member->password = bcrypt($request->password);
            $member->save();

            Auth::guard('member')
                        ->attempt(['email' => $request->email, 'password' => $request->password], true);

            return redirect()
                    ->route('auth.links.index');

        } catch (\Exception $e) {
            return redirect()
                    ->with('status', 'Can\'t register for an account')
                    ->back();
        }
    }
}
