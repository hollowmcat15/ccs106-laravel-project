<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentModel;
use App\Models\subjectModel;
use Illuminate\Support\Facades\Log;

class enrollSubjectController {

    public function enrollpage(Request $request) {
        $student = null;
        $subjects = null;
        $enrolledSubjects = null;
        $student_id = $request->input('student_id');

        if ($student_id) {
            $student = studentModel::find($student_id);
            $subjects = subjectModel::all();
            $enrolledSubjects = $student ? $student->subjects : null;
        }

        return view('enroll_subject', compact('student', 'subjects', 'student_id', 'enrolledSubjects'));
    }

    public function enroll(Request $request) {
        $student_id = $request->input('student_id');
        $subjectIds = $request->input('subjects');

        $student = studentModel::findOrFail($student_id);

        if ($subjectIds) {
            $student->subjects()->sync($subjectIds);
        }

        return redirect()->route('enrollpage')
                         ->with('success', 'Subjects enrolled successfully!')
                         ->with('student_id', $student_id);
    }

    public function displayStudents() {
        $studentinfo = studentModel::with('subjects')->get();
        return view('students_display', compact('studentinfo'));
    }

}
