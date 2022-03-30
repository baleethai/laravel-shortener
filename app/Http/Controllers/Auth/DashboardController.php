<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('auth.dashboard.index');
    }

    public function update(Request $request)
    {
        return redirect()
                ->route('auth.dashboard.index')
                ->with('status', 'Update successfully');
    }
}
