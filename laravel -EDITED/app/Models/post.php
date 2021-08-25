<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = ['title', 'slug', 'description'];

    public function comments(){
        return $this->hasMany('App\Models\Comment', 'post_id', 'id');
    }
}
