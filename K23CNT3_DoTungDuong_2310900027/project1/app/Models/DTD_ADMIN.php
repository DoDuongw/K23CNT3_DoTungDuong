<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DTD_ADMIN extends Model
{
    use HasFactory;

    protected $table = 'DTD_ADMIN'; // Khai báo tên bảng
    protected $primaryKey = 'id'; // Khóa chính (nếu không phải 'id' thì thay đổi tên)
    public $timestamps = true; // Sử dụng cột timestamps
}
