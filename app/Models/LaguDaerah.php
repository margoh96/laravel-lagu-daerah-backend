<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaguDaerah extends Model
{
    use HasFactory;

    protected $table = 'lagu_daerah';

    protected $fillable = [
        'judul',
        'provinsi',

        'ibukota',

        'lyrics',
        'image_url',
        'pulau_id',
    ];
}
