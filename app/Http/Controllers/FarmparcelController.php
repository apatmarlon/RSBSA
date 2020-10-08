<?php

namespace App\Http\Controllers;
use App\Farmparcel;
use Illuminate\Http\Request;
use App\Farmland;
use Illuminate\Support\Facades\Redirect;
USE DB;
USE Session;


class FarmparcelController extends Controller
{
     //Adding Farmparcel
     public function farmparcel()
     {
         
         $latestFarmland = DB::table('farmlands')->select('id')->latest()->first();
         return view('admin.addfarmparcel')->with([ 'latestFarmland' => $latestFarmland ]);
     }
 
     public function save_farmparcel(Request $request)
     {
 
 
 
         $data =array();
         $data['farmland_id'] = $request->farmland_id;
         $data['cropcommo'] = $request->cropcommo;
         $data['size'] = $request->size;
         $data['headno'] = $request->headno;
         $data['farm_type'] = $request->farm_type;
         $data['orgaprac'] = $request->orgaprac;
         
 
 
         DB::table('farmparcels')->insert($data);
         Session::put('exception','Farm Parcel Added Successfully ');
         return Redirect::to('/addfarmparcel');
     }
 
 
}
