<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\International;
use App\Models\OurPartner;
use Illuminate\Http\Request;

class InternationController extends Controller
{
    public function international()
    {
        $internationals = International::orderBy('created_at', 'DESC')->get();
        $ourpartners = OurPartner::orderBy('created_at', 'DESC')->get();
        return view('front.international', compact(
            'internationals',
            'ourpartners'
        ));
    }
}
