<?php

namespace App\Http\Controllers;

use App\Exports\student_tbl;
use App\student_tbl as Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use DB;
USE Session;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
   public function report(){

    $reports = DB::table('student_tbl')->get();
    $addressb = DB::table('refbrgy')->pluck('brgyDesc');
    $address = DB::table('refcitymun')->pluck('citymunDesc');
    return view('admin.report', [ 'reports' => $reports, 'address' => $address, 'addressb' => $addressb]);


   }
   public function search(Request $request){
    $addressb = DB::table('refbrgy')->pluck('brgyDesc');
    $address = DB::table('refcitymun')->pluck('citymunDesc');
    $barangay = $request->input('barangay');
    $municipality = $request->input('municipality');
   
    $clientbrgy = DB::table('student_tbl')->where('student_addressbrgy','LIKE','%'.$barangay.'%')->get();
    $clientmun = DB::table('student_tbl')->where('student_addressmun','LIKE','%'.$municipality.'%')->get();
    if(count($clientbrgy) > 0 AND count($clientmun) > 0)
    return view('admin.report', [ 'address' => $address, 'addressb' => $addressb])->withDetails( $clientbrgy,$clientmun )->withQuery ( $barangay,$municipality );
    else return view ('admin.report', [ 'address' => $address, 'addressb' => $addressb])->withMessage('No Details found. Try to search again !');

     }  


     public function excel()
     {
        return Excel::download(new Student, 'report.xlsx');
     }
}
