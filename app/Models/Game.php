<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'title',
        'price', 
        'release_date', 
        'summary', 
        'features', 
        'rating', 
        'publisher_id',
    ];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
