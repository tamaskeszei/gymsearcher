<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    public function gyms()
    {
    return $this->belongsToMany(Gyms::class, 'gym_service', 'service_id', 'gym_id');
    }
}
