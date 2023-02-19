<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Programmes;
use App\Models\ProgrammesIn;
use App\Models\ProgramReviw;
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

    public function show($id)
    {
        $programmesin = ProgrammesIn::find($id);

        $program_reviws = ProgramReviw::orderBy('created_at', 'DESC')->where('programmesIn_id',$programmesin->id)->get();


        return view('front.program.show', compact(
            'programmesin',
            'program_reviws'
        ));
    }
}
