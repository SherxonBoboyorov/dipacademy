<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Tender;
use Illuminate\Http\Request;

class TeenderController extends Controller
{
    public function list()
    {
        $tenders = Tender::orderBy('created_at', 'DESC')->paginate(12);
        return view('front.tenders.list', compact('tenders'));
    }

    public function show($slug)
    {
        $tender = Tender::where('slug_uz', $slug)
            ->orWhere('slug_ru', $slug)
            ->orWhere('slug_en', $slug)
            ->first();

        return view('front.tenders.show', compact(
            'tender',
        ));
    }
}
