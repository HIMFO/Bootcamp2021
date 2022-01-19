<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Galeri;

class Gambar extends Model
{
    use HasFactory;
    protected $table = 'gambars';
    protected $primaryKey = 'id';

    public function galeri(){
        return $this->belongsTo(Galeri::class);
    }
}
