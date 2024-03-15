<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usern extends Model
{
    protected $table = 'usern'; // Ensure this is the correct table name

    protected $fillable = [
        'username',
        'password',
        'user_type',
        'user_status',
        'fullname'
    ];

    // If you have password hashing handled here
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
