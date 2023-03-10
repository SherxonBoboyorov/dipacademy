<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'title_ru',
        'title_uz',
        'title_en',
    ];

    public function articles() {
        return $this->hasMany(Article::class);
    }

}
