<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function list()
    {
        $photogallerys = Photo::orderBy('created_at', 'DESC')->paginate(8);
        return view('front.photogallery.list', compact('photogallerys'));
    }

    public function show($slug)
    {
        $photogallery = Photo::where('slug_uz', $slug)
        ->orWhere('slug_ru', $slug)
        ->orWhere('slug_en', $slug)
        ->first();

        $photogallerys = Photo::orderBy('created_at', 'DESC')->get();
        return view('front.photogallery.show', compact(
            'photogallery',
            'photogallerys'
        ));
    }
}
