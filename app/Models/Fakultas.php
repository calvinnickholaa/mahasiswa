<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;

        protected $table ="fakultas";
        protected $guarded ="id";
        protected $fillable =["name", "deskripsi"];
    
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, "fakultas_id", "id");
    }
    
}
