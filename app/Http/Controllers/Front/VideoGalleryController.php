<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    public function videoGallery()
    {
        $videos = Video::orderBy('created_at', 'DESC')->get();

        return view('front.videogallery', compact(
            'videos'
        ));
    }
}
