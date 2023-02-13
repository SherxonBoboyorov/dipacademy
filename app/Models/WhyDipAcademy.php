<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class WhyDipAcademy extends Model
{
    use HasFactory;

    protected $table = 'why_dip_academies';

    protected $fillable = [
        'image',
        'title_ru',
        'title_uz',
        'title_en',
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/whydipacademy/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/whydipacademy/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $whydipacademy): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $whydipacademy->image)) {
                File::delete(public_path() . $whydipacademy->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/whydipacademy/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/whydipacademy/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $whydipacademy->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/whydipacademy/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/whydipacademy/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
