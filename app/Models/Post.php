<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    //
    protected $fillable = ['titulo', 'contenido', 'imagen', 'habilitated', 'user_id', 'category_id'];

    public function categoria()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
