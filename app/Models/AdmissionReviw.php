<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class AdmissionReviw extends Model
{
    use HasFactory;

    protected $table = 'admission_reviws';

    protected $fillable = [
        'admissionIn_id',
        'image',
        'name_ru',
        'name_uz',
        'name_en',
        'graduate_ru',
        'graduate_uz',
        'graduate_en',
        'content_ru',
        'content_uz',
        'content_en',
    ];

    public function admissionin()
    {
        return $this->belongsTo('App\Models\AdmissionIn', 'admissionIn_id');
    }

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/admissionreviw/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/admissionreviw/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $admissionreviw): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $admissionreviw->image)) {
                File::delete(public_path() . $admissionreviw->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/admissionreviw/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/admissionreviw/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $admissionreviw->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/admissionreviw/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/admissionreviw/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
