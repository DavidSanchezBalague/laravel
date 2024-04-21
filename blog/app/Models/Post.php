<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //muchos a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function image(){
            return $this->morphOne(Image::class, 'imageable');
    }

}
