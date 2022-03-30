<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function update(Request $request)
    {
        $request->user()->update(['name' => $request->name]);
        return redirect()
                ->route('auth.admin.dashboard.index')
                ->with('status', 'Update successfully');
    }
}
