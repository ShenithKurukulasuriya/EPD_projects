<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tower extends Model
{
    use HasFactory, Notifiable;

    // Specify the table if the name is not the plural form of the model
    protected $table = 'tower';
    protected $primaryKey = 'TowerId';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'TowerId',
        'TowerName',
        'FloorsCount',
    ];


}
