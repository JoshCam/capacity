<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'image',
    'occupancy',
    'capacity',
    'description',
    'lat',
    'lng',
    'address',
    ];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function events() {
        return $this->hasMany(Event::class);
    }

    public function getOccupancy() {
        return Cache::remember("occupancy", 60, function() {
            return Club::find(1)->occupancy;
        });
    }
}
