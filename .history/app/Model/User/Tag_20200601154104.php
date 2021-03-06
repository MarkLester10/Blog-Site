<?php

namespace App\Model\User;
use App\Model\User\Post;
use App\Model\User\Post_Tag;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function posts()
    {
        return $this->belongsToMany(Post::class,'post_tags');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
}
