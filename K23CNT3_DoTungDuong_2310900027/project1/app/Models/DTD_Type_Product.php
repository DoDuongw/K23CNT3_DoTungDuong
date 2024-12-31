<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DTD_Type_Product extends Model
{
    use HasFactory;

    protected $table = 'dtd_Type_Product'; // Tên bảng trong cơ sở dữ liệu

    // Các cột được phép mass assignment
    protected $fillable = [
        'dtdMaLoai',
        'dtdTenLoai',
        'dtdStatus',
    ];
}