<?php

namespace App\Http\Controllers;

use App\Models\teacherModel;
use Illuminate\Http\Request;

class teacherController {

    public function addteacherform() {
        return view('addteacher');
    }

    public function teacherStore(Request $request) {
        $addteacher = teacherModel::create([
            'firstname' => request()->get('firstname', ''),
            'middlename' => request()->get('middlename', ''),
            'lastname' => request()->get('lastname', ''),
            'suffix' => request()->get('suffix', ''),
            'department' => request()->get('department', ''),
            'gender' => request()->get('gender', ''),
            'profession' => request()->get('profession', ''),
        ]);

        return view('teacher', [
            'teacherinfo' => teacherModel::all()
        ]);
    }

    public function displayteachers() {
        $teacherInfo = teacherModel::all();
        return view('teacher_display', ['teacherinfo' => $teacherInfo]);
    }
}
