<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AdmissionMaster;
use App\Models\AdmissionMasterIn;
use App\Models\AdmissionMasterReviw;
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
        $admission_master_reviws = AdmissionMasterReviw::orderBy('created_at', 'DESC')->where('admissionmasterIn_id',$admissionmasterin->id)->get();


        return view('front.admissionmaster.show', [
            'admissionmasterin' => $admissionmasterin,
            'admission_master_reviws' => $admission_master_reviws
        ]);
    }
}
