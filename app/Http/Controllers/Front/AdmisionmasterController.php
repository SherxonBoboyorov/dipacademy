<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AdmissionMaster;
use App\Models\AdmissionMasterIn;
use Illuminate\Http\Request;

class AdmisionmasterController extends Controller
{
    public function admissionmasters()
    {
        $admissionmasters = AdmissionMaster::orderBy('created_at', 'DESC')->get();
        $admissionmasterins = AdmissionMasterIn::orderBy('created_at', 'DESC')->get();

        return view('front.admissionmaster.list', compact(
            'admissionmasters',
            'admissionmasterins'
        ));
    }

    public function show($id)
    {
        $admissionmasterin = AdmissionMasterIn::find($id);

        return view('front.programmaster.show', [
            'admissionmasterin' => $admissionmasterin
        ]);
    }
}
