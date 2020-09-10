<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'email',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function publisher()
    {
        return $this->hasOne(Publisher::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
