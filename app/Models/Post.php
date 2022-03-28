<?php

namespace App\Models;

use App\Models\comment;
use App\Models\Image;
use App\Models\Artist;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'content'
    ];

    // public function comments(){
    //     return $this->hasMany(Comment::class);
    // }

    public function image(){
        return $this->hasOne(Image::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function comments(){
        return $this->morphMany(comment::class,'commentable');
    }

    public function imageArtist(){
        return $this->hasOneThrough(Artist::class,Image::class);
    }

    public function latestComment(){
        return $this->hasOne(comment::class)->latestOfMany();
    }
}
