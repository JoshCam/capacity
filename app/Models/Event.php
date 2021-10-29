<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

        protected $fillable = [
            'name',
            'image',
            'description',
            'date',
            'start_time',
            'finish_time',
            'club_id',
        ];

    public function club() {
        return $this->belongsTo(Club::class);
    }
}
