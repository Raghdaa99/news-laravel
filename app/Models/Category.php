<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
   // protected $fillable=[]; // update i=only
   protected $guarded=[]; // update permitted all fields

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
