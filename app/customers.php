<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $guarded=[];
    public function Post(){
        return $this->hasMany(Post::class);

    }
}
