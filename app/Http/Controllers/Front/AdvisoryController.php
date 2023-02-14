<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Advisoryboard;
use Illuminate\Http\Request;

class AdvisoryController extends Controller
{
    public function advisory()
    {

        $advisoryboards = Advisoryboard::orderBy('created_at', 'DESC')->get();

        return view('front.advisory', compact(
            'advisoryboards'
        ));
    }
}
