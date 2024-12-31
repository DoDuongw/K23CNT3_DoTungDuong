<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DTD_Details_Bills extends Model
{
    use HasFactory;

    protected $table = 'DTD_Details_Bills'; // Explicitly define the table name
    protected $fillable = [
        'dtdIDBills',
        'dtdIDProduct',
        'dtdAmountBuy',
        'dtdPrice',
        'dtdIntoPrice',
    ];
    
}