<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use App\Farmland;
use Illuminate\Support\Facades\Redirect;
USE DB;
USE Session;

class FarmlandController extends Controller
{
    //Adding Farmland
    public function farmland()
    {
        $addressb = DB::table('refbrgy')->pluck('brgyDesc');
        $address = DB::table('refcitymun')->pluck('citymunDesc');
        $latestStudents = DB::table('student_tbl')->select('student_id')->latest()->first();
        return view('admin.addfarmland')->with([ 'address' => $address, 'addressb' => $addressb, 'latestStudents' => $latestStudents ]);
    }

    public function save_farmland(Request $request)
    {



        $data =array();
        $data['student_id'] = $request->student_id;
        $data['brgy'] = $request->brgy;
        $data['mun'] = $request->mun;
        $data['ownerdocno'] = $request->ownerdocno;
        $data['regisowner'] = $request->regisowner;
        $data['tenant'] = $request->tenant;
        $data['lessee'] = $request->lessee;
        $data['other'] = $request->other;
        $data['total_area'] = $request->total_area;
       


        DB::table('farmlands')->insert($data);
        return Redirect::to('/addfarmparcel');
    }



}
