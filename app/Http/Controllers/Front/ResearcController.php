<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Research;
use Illuminate\Http\Request;

class ResearcController extends Controller
{
    public function research()
    {
        $research = Research::orderBy('created_at', 'DESC')->get();
        return view('front.research', compact(
            'research'
        ));
    }
}
