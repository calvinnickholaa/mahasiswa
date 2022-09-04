<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $fillable = ["name", "nim", "angkatan", "fakultas_id", "tanggal_lahir", "rombel"];

    public function fakultas()
    {
        return $this->belongsTo(fakultas::class);
    }
}
