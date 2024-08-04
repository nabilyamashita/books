<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Students extends Model
{
    use HasFactory, SoftDeletes ;
    protected $table = 'student';
    protected $fillable = ['name', 'gender', 'nis', 'class_id', 'image'];

    public function class(): BelongsTo {
        return $this->belongsTo(Classes::class, 'class_id');
    }

    public function _ekstracurriculars()
    {
        return $this->belongsToMany(Ekstracurricular::class, 'student_curricular', 'student_id', '_ekstracurricular_id');
    }


    protected static function newFactory()
    {
        return \Database\Factories\StudentFactory::new();
    }

}
