<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Leadership;
use App\Models\Team;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $query = $request->input('query');
    $results = array();

    $articles = Article::where('title_uz', 'LIKE', "%$query%")
         ->where('title_ru', 'LIKE', "%$query%")
         ->where('title_en', 'LIKE', "%$query%")->get();
    if ($articles->count() > 0) {
        $results['articles'] = $articles;
    }

    $leaderships = Leadership::where('name_uz', 'LIKE', "%$query%")
         ->where('name_ru', 'LIKE', "%$query%")
         ->where('name_en', 'LIKE', "%$query%")->get();
    if ($leaderships->count() > 0) {
        $results['leaderships'] = $leaderships;
    }

    $teams = Team::where('name_uz', 'LIKE', "%$query%")
         ->where('name_ru', 'LIKE', "%$query%")
         ->where('name_en', 'LIKE', "%$query%")->get();
    if ($teams->count() > 0) {
        $results['teams'] = $teams;
    }



    return view('front.search', compact('results'));
}
}
