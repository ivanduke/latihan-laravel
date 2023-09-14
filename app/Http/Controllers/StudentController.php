<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $query = Student::all();

        return view ('student.php', compact('query'));
    }

    public function destroy ($id)
    {
        //dd($id)
        $deleteStudent = Student::find($id);
        $deleteStudent ->delete();

        return redirect('/student');
    }
}
