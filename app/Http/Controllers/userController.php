<?php

namespace App\Http\Controllers;
use App\Models\studentModel;
use App\Models\teacherModel;
use App\Models\studentregisterModel;
use App\Models\teacherregisterModel;
use Illuminate\Http\Request;

class userController
{
    public function login() {
        return view('login');
    }

    public function createstudent() {
        return view('registerstudentform', ['studentInfo' => null]);
    }

    public function createteacher() {
        return view('registerteacherform');
    }

    // Student
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'student_id' => 'required|exists:studinfo,id',
            'password' => 'required|min:6|confirmed',
        ]);

        // Retrieve student info based on the provided ID
        $studentInfo = studentModel::find($request->input('student_id'));

        // Create a new user
        studentregisterModel::create([
            'student_id' => $studentInfo->id,
            'first_name' => $studentInfo->firstname,
            'last_name' => $studentInfo->lastname,
            'password' => bcrypt($validatedData['password']),
        ]);

        return view('login', [
            'studentinfo' => studentModel::all()
        ]);
    }

    public function getStudentInfo($studentId) {
    $studentInfo = studentModel::find($studentId);

    if ($studentInfo) {
        return response()->json([
            'firstname' => $studentInfo->firstname,
            'lastname' => $studentInfo->lastname,
        ]);
    } else {
        return response()->json(['error' => 'Student not found'], 404);
    }
    }

    // Teacher
    public function storeTeacher(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'teacher_id' => 'required|exists:teacherinfo,id',
            'password' => 'required|min:6|confirmed',
        ]);

        // Retrieve student info based on the provided ID
        $teacherInfo = teacherModel::find($request->input('teacher_id'));

        // Create a new teacher-user
        teacherregisterModel::create([
            'teacher_id' => $teacherInfo->id,
            'first_name' => $teacherInfo->firstname,
            'last_name' => $teacherInfo->lastname,
            'password' => bcrypt($validatedData['password']),
        ]);

        return view('login', [
            'teacherinfo' => teacherModel::all()
        ]);
    }

    public function getTeacherInfo(Request $request, $teacherId) {
        $teacherInfo = teacherModel::find($teacherId);

        if ($teacherInfo) {
            return response()->json([
                'firstname' => $teacherInfo->firstname,
                'lastname' => $teacherInfo->lastname,
            ]);
        } else {
            return response()->json(['error' => 'Teacher not found'], 404);
        }
    }

}
