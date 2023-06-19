<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universitas extends Model
{
    use HasFactory;

    protected $table = "universitas";
    public $timestamps = false;

    public function dosen() {
        return $this->hasMany(Dosen::class, "universitas_id");
    }
}
