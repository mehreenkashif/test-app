<?php

namespace App\Http\Controllers;
// use app\Models\Student;
use Illuminate\Http\Request;
use App\Models\Student;

class UserController extends Controller
{
    
     public function studentlist(){

        $student = Student::all();
       return view('studentlist',['students'=> $student ]);

     }

     public function create(){
         return view('create');
     }

     public function store(Request $request){
    //    dd($request->all());
        $data=$request->validate([
        'name' => 'required',
        'email'=> 'required',

        ]);
     
       $newStudent = Student::create($data);
   
       return redirect()->route('studentlist');

    }

    public function delete(Student $student){
       
        $student->delete();
        return redirect()->route('studentlist' );
   
        // $student = Student::find(1); $student->delete();
    }

}


