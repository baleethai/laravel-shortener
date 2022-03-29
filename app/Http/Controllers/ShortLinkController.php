<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class ShortLinkController extends Controller
{
    public function index(Request $request, $shortLink = null)
    {
        $shortLink = Link::where('short_url', $shortLink)->first();

        if ($shortLink) {
            $shortLink->increment('total_click');
            return redirect($shortLink->long_url);
        }

        abort(404);
    }
}
