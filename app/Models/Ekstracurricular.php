<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ekstracurricular extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = '_ekstracurriculars';
    protected $fillable = ['name'];

    public function student()
    {
        return $this->belongsToMany(Students::class, 'student_curricular', '_ekstracurricular_id', 'student_id');
    }

}
