<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function getCountry()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
