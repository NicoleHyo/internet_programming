<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fees;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class FeesController extends Controller
{
	public function allpayments(){
   		$fees=Fees::all();
   		$TotalFees=Fees::all()->sum('amount');
    	return view('092209.allfeespayment',['fees'=>$fees],['TotalFees'=>$TotalFees]);
   }

   public function look(){
   	return view('092209.payment');
   }

    public function search(){
    $search=Input::get('search');	
    $fees_payment=Fees::where('student_number',$search)->get();
    $TotalFees=Fees::where('student_number',$search)->sum('amount');
    if ((count($fees_payment))>0){
    	return view('092209.studentpayment',['TotalFees'=>$TotalFees])->withDetails($fees_payment)->withQuery($search);}
    	else
    		return view('092209.studentpayment')->withMessage('No Record found for student');
    			
	}

	public function create(){
		return view('092209.fees');
	}

	public function store(){
		$this->validate(request(), [
            'student_id' => 'required|exists:students,student_number',
            'amount' => 'required',
            'payment_date' => 'required'
        ]);
	 	$fees=new Fees;

	 	$fees->student_number=request('student_id');
        $fees->amount=request('amount');
        $fees->date_of_payment=request('payment_date');
        $fees->save();

        return redirect('/fees');
	}
}
