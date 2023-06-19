<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = "dosen";
    public $timestamps = false;

    public function users() {
       return $this->hasOne(User::class, "dosen_id");
    }

    public function materi() {
        return $this->hasMany(Materi::class, "dosen_id");
    }

    public function universitas() {
        return $this->belongsTo(Universitas::class, "universitas_id");
    }
}
