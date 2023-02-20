<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class AdmissionMasterReviw extends Model
{
    use HasFactory;

    protected $table = 'admission_master_reviws';

    protected $fillable = [
        'admissionmasterIn_id',
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

    public function admissionmasterin()
    {
        return $this->belongsTo('App\Models\AdmissionMasterIn', 'admissionmasterIn_id');
    }

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/admissionmasterreviw/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/admissionmasterreviw/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $admissionmasterreviw): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $admissionmasterreviw->image)) {
                File::delete(public_path() . $admissionmasterreviw->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/admissionmasterreviw/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/admissionmasterreviw/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $admissionmasterreviw->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/admissionmasterreviw/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/admissionmasterreviw/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }

}
