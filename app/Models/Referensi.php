<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referensi extends Model
{
    use HasFactory;

    protected $table = "referensi";
    public $timestamps = false;

    public function materi() {
        return $this->belongsToMany(Materi::class, "referensi_materi", "referensi_id", "materi_id");
    }
}
