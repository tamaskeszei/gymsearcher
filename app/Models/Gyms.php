<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gyms extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'gyms';

    public function gymimages()
    {
        return $this->hasMany(Gymimages::class, 'gym_id');
    }

    public function prices()
    {
        return $this->hasOne(Prices::class, 'gym_id');
    }

    public function services()
    {
        return $this->belongsToMany(Services::class, 'gym_service','gym_id', 'service_id');
    }
}
