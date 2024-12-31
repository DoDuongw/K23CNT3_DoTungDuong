<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DTD_Bills extends Model
{
    use HasFactory;

    protected $table = 'DTD_Bills'; // Explicitly define the table name
    protected $fillable = [
        'dtdIDBills',
        'dtdIDCustomres',
        'dtdDateBills',
        'dtdNameCustomers',
        'dtdEmail',
        'dtdPhoneNumber',
        'dtdAddress',
        'dtdValue',
    ];
    
}