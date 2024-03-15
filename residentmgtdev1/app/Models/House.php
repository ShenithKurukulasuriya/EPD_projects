<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class House extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = true;

    protected $table = 'house';

    public function tower()
    {
        return $this->belongsTo(Tower::class, 'towernumber');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        
        'HouseNo',
        'IsAvailbe',
        'Housetype',
        'TowerNo',
        'FloorNo',
        'status',
    ];

    // If you don't have any hidden fields, you can omit the $hidden property

    // If you don't have any fields that need to be cast to a different data type, you can omit the $casts property
}
