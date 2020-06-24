<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'desciption', 'slug'];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
