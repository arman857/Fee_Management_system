<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    use HasFactory;

    protected $table="shop";

    protected $fillable=[
        'Name',
        'Email',
        'Phone_Number',
        'Massage',
    ];
}
