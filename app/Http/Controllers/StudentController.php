<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Student;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
	public function allstudents(){
		$student=Student::all();
    	return view('092209.allstudents',['student'=>$student]);
	}
	 public function create(){
	 	return view('092209.student');
	 }
	 public function store(){
	 	$this->validate(request(), [
            'fullname' => 'required|unique:students',
            'dob' => 'required',
            'address' => 'required'
        ]);
	 	$student=new Student;

	 	$student->fullname=request('fullname');
        $student->date_of_birth=request('dob');
        $student->address=request('address');
        $student->save();

        return redirect('/student');
	 }

}
