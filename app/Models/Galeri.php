<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gambar;

class Galeri extends Model
{
    use HasFactory;
    protected $table = 'galeris';
    protected $primaryKey = 'id';

    public function gambar(){
        return $this->hasMany(Gambar::class, 'galeri_id');
    }
}
