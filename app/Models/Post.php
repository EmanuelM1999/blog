<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //constantes que se usan en el campo status.
    public const BORRADOR = 1;
    public const PUBLICADO = 2;

    //Relacion uno a muchos inversa
    public function user(){
        $this->belongsTo(User::class);
    }

    public function category(){
        $this->belongsTo(Category::class);
    }

    //Relacion muchos a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
