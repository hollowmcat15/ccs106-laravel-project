<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = [
        'subjectname',
        'start_time',
        'end_time',
        'yearlevel',
        'teacher_id',
    ];

    public function teacher()
    {
        return $this->belongsTo(teacherModel::class, 'teacher_id');
    }
}



