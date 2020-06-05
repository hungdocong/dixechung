<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function dang_bai(){
        return view('where');
    }

    //submit form where
    public function formWhere(Request $request){
        $pointStart = $request->get("pointStart");
        $pointEnd = $request->get("pointEnd");
        $distance = $request->get("distance");
        str_replace(',', '', $distance);
        str_replace(' km', '', $distance);
        $distance = (int)$distance;

        $createDate = Carbon::now();
         $createDate->format('s:i:H dd-mm-yyyy');
        if($pointStart != null && $pointEnd != null){
            DB::insert('insert into roadmap (startPoint, endPoint, distance, created_at) values (?, ?, ?, ?)', [$pointStart, $pointEnd, $distance, $createDate]);
            return  view('vehicle');
        }
    }

    public function phuong_tien(){
        return view('vehicle');
    }

    public function formVehicle(Request $request){
        $vehicle = $request->get("vehicle");
        $startTime = $request->get("startTime");

        $ID = DB::table('roadmap')->max('ID');
        if($vehicle != null && $startTime != null){
            DB::update('update roadmap set vehicle = ?, startTime = ? where ID = ?', [$vehicle, $startTime, $ID]);
            $distance = DB::table('roadmap')
                            ->select('distance')
                            ->where('ID', $ID)
                            ->get();
            preg_match_all('!\d+\.*\d*!', $distance, $matches);

            return view("price")->with('distance', implode("",$matches[0]));
            // return redirect('/gia.html?data=' . implode("",$matches[0]));
        }
    }
    public function fromPrice(Request $request){

        $price = $request->get("price");
        $tranportation = "Vinfast SA 2.0, BKS: 29H 05555, 7 chỗ.";
        $ID = DB::table('roadmap')->max('ID');
        echo 'price: '. $price;
        if($price != null){
            DB::update('update roadmap set price = ?, tranportation = ? where ID = ?', [$price, $tranportation, $ID]);

        }
        // return view('finish');

    }

    public function finish(){
        return view('finish');
    }
}
