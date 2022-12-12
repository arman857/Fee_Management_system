<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;

    protected $table="setting";

    protected $fillable=[
        'Company_Name',
        'Logo',
        'Email',
        'Phone',
        'Description',
        'Facebook_Link',
        'Twitter_Link',
        'Instagram_Link',
        'Linkedin_Link'
    ];
}
