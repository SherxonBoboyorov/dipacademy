<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Page;
use App\Models\ProgrammesIn;
use App\Models\Magistracy;
use App\Models\WhyDipAcademy;
use App\Models\Article;
use App\Models\Ourpartner;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function hompage()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        $pages = Page::orderBy('created_at', 'DESC')->get();
        $programmesins = ProgrammesIn::orderBy('created_at', 'DESC')->paginate(3);
        $magistracies = Magistracy::orderBy('created_at', 'DESC')->get();
        $whydipacademies = WhyDipAcademy::orderBy('created_at', 'DESC')->get();
        $articles = Article::orderBy('created_at', 'DESC')->get();
        $ourpartners = Ourpartner::orderBy('created_at', 'DESC')->get();


        return view('front.index', compact(
            'sliders',
            'pages',
            'programmesins',
            'magistracies',
            'whydipacademies',
            'articles',
            'ourpartners'
        ));
    }
}
