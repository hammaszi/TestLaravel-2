<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $table  = 'class';

public function getSiswa()
{
    return $this->hasMany(student::class, 'class_id', 'id');
}

public function getWali()
{
    return $this->belongsTo(teacher::class, 'teacher_id', 'id');
}

}
