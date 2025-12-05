<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    /** @use HasFactory<\Database\Factories\LibroFactory> */
    use HasFactory;

    protected $table = "libros";
    protected $fillable = [
        'titulo',
        'anio_publicacion',
        'autor_id'
    ];
}
