<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    // proctected fillable hum log use karte hai apne table ke field ko strong or secure banane k liye
    protected $table="fees";


    // proctected fillable hum log use karte hai apne table ke field ko strong or secure banane k liye
    protected $fillable=[
        'date',
        'student_name',
        'amount',
        'payment_method',
        'status',
        'comment'
    ];
}
