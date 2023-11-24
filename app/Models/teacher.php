<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $table = 'teacher';

    public function getKelas()
    {
        return $this->hasOne(Classroom::class, 'teacher_id', 'id');
    }
}
