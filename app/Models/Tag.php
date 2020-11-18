<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable =[
        'title'
    ];

    public function bookmarks() 
    {
        return $this->belongsToMany(Bookmark::class);
    }
}
