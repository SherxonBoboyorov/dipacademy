<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ProgrammesMaster;
use App\Models\ProgrammesMasterIn;
// use App\Models\ProgramReviw;
use Illuminate\Http\Request;

class ProgramMasterController extends Controller
{
    public function programmesmasters()
    {
        $programmesmasters = ProgrammesMaster::orderBy('created_at', 'DESC')->get();
        $programmesmasterins = ProgrammesMasterIn::orderBy('created_at', 'DESC')->get();

        return view('front.programmaster.list', compact(
            'programmesmasters',
            'programmesmasterins'
        ));
    }

     public function show($id)
    {
        $programmesmasterin = ProgrammesMasterIn::find($id);
        // $program_reviws = ProgramReviw::orderBy('created_at', 'DESC')->where('programmesIn_id',$programmesmasterin->id)->get();

        return view('front.programmaster.show', [
            'programmesmasterin' => $programmesmasterin,
            // 'program_reviws' => $program_reviws
        ]);
    }
}
