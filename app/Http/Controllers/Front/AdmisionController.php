<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\AdmissionIn;
use App\Models\AdmissionReviw;
use Illuminate\Http\Request;

class AdmisionController extends Controller
{
    public function admissions()
    {
        $admissions = Admission::orderBy('created_at', 'DESC')->get();
        $admissionins = AdmissionIn::orderBy('created_at', 'DESC')->get();

        return view('front.admission.list', compact(
            'admissions',
            'admissionins'
        ));
    }

    public function show($id)
    {
        $admissionin = AdmissionIn::find($id);

        $admission_reviws = AdmissionReviw::orderBy('created_at', 'DESC')->where('admissionIn_id',$admissionin->id)->get();

        return view('front.admission.show', compact(
            'admissionin',
            'admission_reviws'
        ));
    }
}
