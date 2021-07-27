<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Post extends Model
{
    protected $fillable = ['title', 'image', 'body'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
