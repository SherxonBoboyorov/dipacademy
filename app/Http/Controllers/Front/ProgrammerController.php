<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Programmes;
use App\Models\ProgrammesIn;
use Illuminate\Http\Request;

class ProgrammerController extends Controller
{
    public function programmes()
    {
        $programs = Programmes::orderBy('created_at', 'DESC')->get();
        $programmesins = ProgrammesIn::orderBy('created_at', 'DESC')->get();

        return view('front.program.list', compact(
            'programs',
            'programmesins'
        ));
    }

    public function show($slug)
    {
        $programmesin = ProgrammesIn::where('slug_uz', $slug)
            ->orWhere('slug_ru', $slug)
            ->orWhere('slug_en', $slug)
            ->first();

        return view('front.program.show', compact(
            'programmesin',
        ));
    }
}
