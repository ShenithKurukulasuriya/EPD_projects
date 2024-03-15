<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Card extends Model
{
    use HasFactory, Notifiable;

    // Specify the table if the name is not the plural form of the model
    protected $table = 'cardsn';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'cardnumber',
        'vnumber',
        'housenumber',
        'towernumber',
        'floornumber',
    ];

    // If you don't have any hidden fields, you can omit the $hidden property

    // If you don't have any fields that need to be cast to a different data type, you can omit the $casts property
}