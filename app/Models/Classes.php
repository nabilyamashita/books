<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
    use HasFactory , SoftDeletes;
    protected $table = 'Class';
    protected $fillable = ['name', 'teacher_id'];

    public function student()
    {
        return $this->hasMany(Students::class, 'class_id' , 'id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    // public function class()
    // {
    //     // return $this->belongsTo(Classes::class); , many to one

    // }

}
