<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $table="student";

    protected $fillable=[
        'Name',
        'Father_Name',
        'Mother_Name',
        'DOB',
        'Class',
        'Address',
        'Mobile_Number',
    ];
}
