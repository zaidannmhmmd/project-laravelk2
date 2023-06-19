<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = "materi";
    public $timestamps = false;

    public function dosen() {
        return $this->belongsTo(Dosen::class, "dosen_id");
    }

    public function referensi() {
        return $this->belongsToMany(Referensi::class, "referensi_materi", "materi_id", "referensi_id");
    }


}
