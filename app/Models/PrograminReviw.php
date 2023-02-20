<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class PrograminReviw extends Model
{
    use HasFactory;

    protected $table = 'programin_reviws';

    protected $fillable = [
        'programmesMasterIn_id',
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

    public function programmesmasterin()
    {
        return $this->belongsTo('App\Models\ProgrammesMasterIn', 'programmesMasterIn_id');
    }


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/programinreviw/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/programinreviw/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $programinreviw): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $programinreviw->image)) {
                File::delete(public_path() . $programinreviw->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/programinreviw/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/programinreviw/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $programinreviw->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/programinreviw/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/programinreviw/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }

}
