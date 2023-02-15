<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Magistracy;
use App\Models\Ourpartner;
use App\Models\ProgrammesIn;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $pages = Page::orderBy('created_at', 'DESC')->get();
        $magistracies = Magistracy::orderBy('created_at', 'DESC')->get();
        $ourpartners = Ourpartner::orderBy('created_at', 'DESC')->get();
        $programmesins = ProgrammesIn::orderBy('created_at', 'DESC')->get();


        return view('front.academy', compact(
            'pages',
            'magistracies',
            'ourpartners',
            'programmesins'
        ));
    }
}
