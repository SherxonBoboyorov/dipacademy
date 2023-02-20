<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function list()
    {
        $photogallerys = Photo::orderBy('created_at', 'DESC')->paginate(12);
        return view('front.photogallery.list', compact('photogallerys'));
    }

    public function show($id)
    {
        $photogallery = Photo::find($id);

        $photogallerys = Photo::orderBy('created_at', 'DESC')->get();
        $photogallery = Photo::where('id', $id)->get();
        return view('front.photogallery.show', compact(
            'photogallery',
            'photogallerys',
            'id'
        ));
    }
}
