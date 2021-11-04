<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function core()
    {
        return $this->belongsTo(Core::class, 'foreign_key', 'ModelCode');
    }
}
