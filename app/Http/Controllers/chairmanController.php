<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentModel;
use App\Models\teacherModel;
use App\Models\subjectModel;

use function Laravel\Prompts\text;

class chairmanController {

    public function home() {
        return view('chairman_home');
    }

    public function editstudent() {
        return view('edit_student');
    }

    public function editteacher() {
        return view('edit_teacher');
    }

    public function editsubject() {
        return view('edit_subject');
    }

    // Student table function
    public function index() {
        $studinfos = studentModel::all();
        return view('edit_student', compact('studinfos'));
    }

    public function edit($id) {
        $studinfo = studentModel::findOrFail($id);
        return view('edit_student_form', compact('studinfo'));
    }

    public function update(Request $request, $id) {
        $studinfo = studentModel::findOrFail($id);
        $studinfo->update($request->all());
        return redirect()->route('edit_student.index')->with('success', 'Student information updated successfully.');
    }

    public function destroy($id) {
        $studinfo = studentModel::findOrFail($id);
        $studinfo->delete();
        return redirect()->route('edit_student.index')->with('success', 'Student information deleted successfully.');
    }

    // Teacher table function
    public function teacherindex() {
        $teacherinfos = teacherModel::all();
        return view('edit_teacher', compact('teacherinfos'));
    }

    public function teacheredit($id) {
        $teacherinfo = teacherModel::findOrFail($id);
        return view('edit_teacher_form', compact('teacherinfo'));
    }

    public function teacherupdate(Request $request, $id) {
        $teacherinfo = teacherModel::findOrFail($id);
        $teacherinfo->update($request->all());
        return redirect()->route('edit_teacher.index')->with('success', 'Teacher information updated successfully.');
    }

    public function teacherdestroy($id) {
        $teacherinfo = teacherModel::findOrFail($id);
        $teacherinfo->delete();
        return redirect()->route('edit_teacher.index')->with('success', 'Teacher information deleted successfully.');
    }

    // Subject Table function
    public function subjectindex() {
        $subjectinfos = subjectModel::all();
        return view('edit_subject', compact('subjectinfos'));
    }

    public function subjectedit($id) {
        $subjectinfo = subjectModel::findOrFail($id);
        $teachers = teacherModel::all(); // Fetch all teachers
        return view('edit_subject_form', compact('subjectinfo', 'teachers'));
    }

    public function subjectupdate(Request $request, $id) {
        $subjectinfo = subjectModel::findOrFail($id);
        $subjectinfo->update($request->all());
        return redirect()->route('edit_subject.index')->with('success', 'Subject information updated successfully.');
    }

    public function subjectdestroy($id) {
        $subjectinfo = subjectModel::findOrFail($id);
        $subjectinfo->delete();
        return redirect()->route('edit_subject.index')->with('success', 'Subject information deleted successfully.');
    }

}

