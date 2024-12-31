<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class DTD_Product extends Model
{
    // Explicitly define the correct table name if it's not the default plural form
    protected $table = 'dtd_product'; // Set the correct table name

    protected $fillable = [
        'dtdIDProduct', 'dtdNameProduct', 'dtdImages', 'dtdAmount', 'dtdPrice', 'dtdMaLoai'
    ];
}
