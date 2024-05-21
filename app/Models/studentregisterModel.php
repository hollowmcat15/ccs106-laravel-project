<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentregisterModel extends Model {

    protected $table = 'users';
    use HasFactory;

    protected $fillable = [
        'student_id',
        'first_name',
        'last_name',
        'password'
    ];

}
