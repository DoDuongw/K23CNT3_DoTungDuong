<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DTD_Customers extends Model
{
    use HasFactory;

    // Define the table name (if not following Laravel's plural naming convention)
    protected $table = 'DTD_Customers';

    // Define the primary key (if not the default 'id')
    protected $primaryKey = 'id'; // Adjust this if your primary key column has a different name

    // Define which fields are mass assignable
    protected $fillable = [
        'dtdIDCustomers', 
        'dtdNameCustomers', 
        'dtdEmail', 
        'dtdPassword', 
        'dtdPhoneNumber', 
        'dtdAddress', 
        'dtdRegistrationDate'
    ];

    // Define any fields you want to cast to specific data types
    protected $casts = [
        'dtdRegistrationDate' => 'datetime', // Automatically cast registration date to a DateTime instance
    ];

    // For hashed password (accessor to get the hashed password)
    public function setDtdPasswordAttribute($value)
    {
        $this->attributes['dtdPassword'] = bcrypt($value); // Use bcrypt for secure password hashing
    }

    // Optional: If you want to add relations, such as linking customers to bills, you can add relationship methods
}
