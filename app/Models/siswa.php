<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function tagihanDanBiaya()
    {
        return $this->hasMany(tagihanDanBiaya::class);
    }
    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
}
