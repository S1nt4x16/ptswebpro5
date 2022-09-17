<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    // Valentinus Moreno

    public function index()
    {
        $students = DB::table('students')
            ->select("id", "name", "gender", "bp", "dob", "created_at", "updated_at")
            ->get();
        return view('students.index', ["students" => $students]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $gender = $request->input('gender');
        $bp = $request->input('bp');
        $dob = $request->input('dob');

        DB::table('students')
        ->insert([
            'name'=> $name,
            'gender'=> $gender,
            'bp'=> $bp,
            'dob'=> $dob,
            'created_at' => now(),
        ]);

        return redirect()->route('students_master');
          
    }

    public function edit($id) 
    {
        $students= DB::table('students')
            ->select('name', 'gender', 'bp', 'dob')
            ->where('id',$id)
            ->first();
        return view('students.edit', [
                "s" => $students,
                "id" => $id,
            ]);
    }

    public function update(Request $request) 
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $gender = $request->input('gender');
        $bp = $request->input('bp');
        $dob = $request->input('dob');
        DB::table('students')
        ->where('id', $id)
        ->update([
            'name' => $name,
            'gender' => $gender,
            'bp' => $bp,
            'dob' => $dob,
            'updated_at' => now(),
        ]);

        return redirect()->route('students_master');

    }

    public function delete($id) 
    {
        DB::table('students')->where('id', $id)->delete();

        return redirect()->route('students_master');
    }

}
