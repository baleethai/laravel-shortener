<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::where('status', true)->orderBy('id', 'DESC')->paginate();
        return view('auth.links.index', compact('links'));
    }

    public function create()
    {
        return view('auth.links.create');
    }

    public function store(StoreLinkRequest $request)
    {
        try {
            $link = new Link();
            $link->member_id = auth()->guard('member')->id();
            $link->name = $request->long_url;
            $link->long_url = $request->long_url;
            $link->short_url = Str::random(6);
            $link->save();

            return redirect()
                    ->route('auth.links.index')
                    ->with('status', 'Create a link successfully');

        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function delete(Request $request, Link $link)
    {
        $link->status = false;
        $link->save();
        return redirect()
                ->route('auth.links.index')
                ->with('status', 'Successfully deleted');
    }
}
