<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table="service";

    protected $fillable=[
        'Title',
        'Description',
        'Status',
        'short_description',
        'Image',

    ];
}
