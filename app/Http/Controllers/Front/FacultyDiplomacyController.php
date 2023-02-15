<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Team;
use Illuminate\Http\Request;

class FacultyDiplomacyController extends Controller
{
    public function faculty()
    {
        $faculties = Faculty::orderBy('created_at', 'DESC')->get();
        $teams = Team::orderBy('created_at', 'DESC')->paginate(3);
        return view('front.facultydiplomacy', compact(
            'faculties',
            'teams'
        ));
    }
}
