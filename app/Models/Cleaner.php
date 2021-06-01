<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cleaner extends Model
{
    use HasFactory;
    
    public function cleanertouser()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}
