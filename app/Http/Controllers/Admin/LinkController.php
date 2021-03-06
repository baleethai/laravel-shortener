<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::orderBy('id', 'DESC')->paginate();
        return view('admin.links.index', compact('links'));
    }

    public function delete(Request $request, Link $link)
    {
        try {
            $link->delete();
            return redirect()
                    ->route('auth.admin.links.index')
                    ->with('status', 'Successfully deleted');
        } catch (\Exception $e) {
            return redirect()
                    ->route('auth.admin.links.index')
                    ->with('error', $e->getMessage());
        }

    }
}
