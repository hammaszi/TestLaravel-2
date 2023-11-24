<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class student extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['nama_siswa', 'nis', 'gender', 'class_id', 'alamat', 'img'];

    public function getKelas(){
        return $this->belongsTo(Classroom::class, 'class_id', 'id');
    }
}
