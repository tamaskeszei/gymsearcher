<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gymimages extends Model
{
    use HasFactory;

    protected $table = 'gym_images';

    public function gyms()
    {
        return $this->belongsTo(Gyms::class, 'gym_id');
    }

    public $timestamps = false;

}
