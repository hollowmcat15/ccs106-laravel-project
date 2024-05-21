<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    protected $table = 'studinfo';
    use HasFactory;

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'suffix',
        'address',
        'age',
        'birthdate',
        'gender',
        'yearlevel',
    ];

    public function subjects() {
        return $this->belongsToMany(SubjectModel::class, 'student_subject', 'student_id', 'subject_id');
    }
}
