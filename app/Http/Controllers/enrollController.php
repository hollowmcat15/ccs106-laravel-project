<?php

namespace App\Http\Controllers;

use App\Models\studentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class enrollController
{

    public function home() {
        return view('home');
    }

    public function enrollform() {
        return view('enroll');
    }

    public function students() {
        return view('students');
    }

    public function aboutus() {
        return view('aboutus');
    }

    public function store(Request $request) {
        $enroll = studentModel::create([
            'firstname' => request()->get('firstname', ''),
            'middlename' => request()->get('middlename', ''),
            'lastname' => request()->get('lastname', ''),
            'suffix' => request()->get('suffix', ''),
            'address' => request()->get('address', ''),
            'age' => request()->get('age', ''),
            'birthdate' => request()->get('birthdate', ''),
            'gender' => request()->get('gender', ''),
            'yearlevel' => request()->get('yearlevel', ''),
        ]);

        return view('students', [
            'studentinfo' => studentModel::all()
        ]);
        // return redirect()->route('students')->with('success', 'Student enrolled successfully!');
    }

    public function displayStudents() {
        $studentInfo = studentModel::all();
        return view('students_display', ['studentinfo' => $studentInfo]);
    }

    // public function delete(studentModel $id) {
    //     $id -> delete();
    //     return view('students_display');
    // }

}
