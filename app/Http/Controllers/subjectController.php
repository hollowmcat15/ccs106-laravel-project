<?php

namespace App\Http\Controllers;
use App\Models\subjectModel;
use App\Models\teacherModel;
use Illuminate\Http\Request;

class subjectController {

    public function addSubject() {
        return view('addsubject');
    }

    public function displaySubject() {
        $subjectInfo = subjectModel::all();
        return view('subjects_display', ['subjectDisplay' => $subjectInfo]);
    }

    public function displaySubjectTeacher() {
        $teachers = teacherModel::all(); // Fetch all teachers
        return view('addsubject', ['teachers' => $teachers]); // Pass the $teachers variable to the addsubject view
    }

    public function subjectStore(Request $request) {
        $addsubject = subjectModel::create([
            'subjectname' => request()->get('subjectname', ''),
            'start_time' => request()->get('start_time', ''),
            'end_time' => request()->get('end_time', ''),
            'yearlevel' => request()->get('yearlevel', ''),
            'teacher_id' => request()->get('teacher_id', ''),
        ]);

        return view('subjects', [
            'subjectinfo' => subjectModel::all()
        ]);
    }
}
