<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'teachers';
    protected $fillable = ['name', 'image'];

    public function class()
    {
        return $this->hasOne(Classes::class);
    }

}
