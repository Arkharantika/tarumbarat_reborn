<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hardware;
use App\Models\RawData;

use App\Models\BagiInduk;
use App\Models\BagiSekunder;
use App\Models\Bendung;
use App\Models\TitikLokasiAirBaku;

class WelcomeController extends Controller
{
    public function index()
    {

        // $records = Hardware::join('trs_raw_d_wl', 'trs_raw_d_wl.kd_hardware', '=', 'hardware.kd_hardware');
        // $check = $records->where('hardware.kd_hardware',8349)->get()->last();
        // $check = $records->where('hardware.kd_hardware','8350')->last();
        $ars=[];
        $ars_max=[];
        $ars_min=[];

        $non_ars=[];
        $non_ars_max=[];
        $non_ars_min=[];

        $a=0;
        $hardware = Hardware::all();
        foreach($hardware as $now => $value)
        {
	    $currentDate = now()->toDateString();

            $sink = $value->kd_hardware;
            // $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('trs_raw_d_gpa.kd_sensor','waterlevel')->where('mst_hardware.kd_hardware',$value->kd_hardware)->whereBetween('trs_raw_d_gpa.tlocal', [now()->subDays(1)->startOfDay(), now()->endOfDay()])->where('mst_hardware.pos_type','telemetry')->get()->last();
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('trs_raw_d_gpa.kd_sensor','waterlevel')->where('mst_hardware.kd_hardware',$value->kd_hardware)->where('mst_hardware.pos_type','telemetry')->whereDate('trs_raw_d_gpa.tlocal', $currentDate)->get()->last();
            $valuemax = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('trs_raw_d_gpa.kd_sensor','waterlevel')->where('mst_hardware.kd_hardware',$value->kd_hardware)->where('mst_hardware.pos_type','telemetry')->whereDate('trs_raw_d_gpa.tlocal', $currentDate)->max('value');;
            $valuemin = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('trs_raw_d_gpa.kd_sensor','waterlevel')->where('mst_hardware.kd_hardware',$value->kd_hardware)->where('mst_hardware.pos_type','telemetry')->whereDate('trs_raw_d_gpa.tlocal', $currentDate)->min('value');;
            // $b = $value->kd_hardware;

	    if (!isset($valuemax)){
                $valuemax= 0;
            }
            if (!isset($valuemin)){
                $valuemin= 0;
            }

            if (isset($records)) {
                $ars[$now] = $records; 
                $ars_max[$now] = $valuemax; 
                $ars_min[$now] = $valuemin; 
                // $ars_max[$now] = 1; 
                // $ars_min[$now] = 0; 
            }

            $sink2 = $value->kd_hardware;
            // $records2 = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('trs_raw_d_gpa.kd_sensor','waterlevel')->where('mst_hardware.kd_hardware',$value->kd_hardware)->whereBetween('trs_raw_d_gpa.tlocal', [now()->subDays(1)->startOfDay(), now()->endOfDay()])->where('mst_hardware.pos_type','non')->get()->last();
            $records2 = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('trs_raw_d_gpa.kd_sensor','waterlevel')->where('mst_hardware.kd_hardware',$value->kd_hardware)->where('mst_hardware.pos_type','non')->whereDate('trs_raw_d_gpa.tlocal', $currentDate)->get()->last();
            $valuemax2 = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('trs_raw_d_gpa.kd_sensor','waterlevel')->where('mst_hardware.kd_hardware',$value->kd_hardware)->where('mst_hardware.pos_type','non')->whereDate('trs_raw_d_gpa.tlocal', $currentDate)->max('value');;
            $valuemin2 = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('trs_raw_d_gpa.kd_sensor','waterlevel')->where('mst_hardware.kd_hardware',$value->kd_hardware)->where('mst_hardware.pos_type','non')->whereDate('trs_raw_d_gpa.tlocal', $currentDate)->min('value');;
            // $b = $value->kd_hardware;
	    
	    if (!isset($valuemax2)){
                $valuemax2= 0;
            }
            if (!isset($valuemin2)){
                $valuemin2= 0;
            }

            if (isset($records2)) {
                $non_ars[$now] = $records2; 
                $non_ars_max[$now] = $valuemax2; 
                $non_ars_min[$now] = $valuemin2; 
                // $ars_max[$now] = 1; 
                // $ars_min[$now] = 0; 
            }
        }
        // return $non_ars;
        // return response()->json($ars); 
        $bagiInduk = BagiInduk::all();
        $bagiSekunder = BagiSekunder::all();
        $bendung = Bendung::all();
        $titikLokasi = TitikLokasiAirBaku::all();

        // $wel = function($a, $b) {
        //     return $a['urutan'] - $b['urutan'];
        // };

        // usort($ars, $wel);
        // $ars = $ars->orderBy('mst_hardware.urutan','asc');
        // return $ars;
        //return $ars;
        return view('welcome',compact('ars','ars_max','ars_min','non_ars','non_ars_max','non_ars_min','bagiInduk','bagiSekunder','bendung','titikLokasi'));
    }

    public function LandingPage()
    {
        $ars=[];
        $ars_max=[];
        $ars_min=[];
        $a=0;
        $hardware = Hardware::all();
        foreach($hardware as $now => $value)
        {
            $sink = $value->kd_hardware;
            $records = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('trs_raw_d_gpa.kd_sensor','waterlevel')->where('mst_hardware.kd_hardware',$value->kd_hardware)->get()->last();
            $valuemax = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('trs_raw_d_gpa.kd_sensor','waterlevel')->where('mst_hardware.kd_hardware',$value->kd_hardware)->max('value');;
            $valuemin = Hardware::join('trs_raw_d_gpa', 'trs_raw_d_gpa.kd_hardware', '=', 'mst_hardware.kd_hardware')->where('trs_raw_d_gpa.kd_sensor','waterlevel')->where('mst_hardware.kd_hardware',$value->kd_hardware)->min('value');;
            // $b = $value->kd_hardware;
            if (isset($records)) {
                $ars[$now] = $records; 
                $ars_max[$now] = $valuemax; 
                $ars_min[$now] = $valuemin; 
                // $ars_max[$now] = 1; 
                // $ars_min[$now] = 0; 
            }
        }
        // return $ars;
        // return response()->json($ars); 
        return view('landingpage',compact('ars','ars_max','ars_min'));
        // return view('landingpage');
    }

    public function Testing()
    {
        return view('layouts.layoutnewlandingpage');
    }

    public function Testing2()
    {
        return view('layouts.layoutnewlandingpage2');
    }

    public function Testing3()
    {
        return view('layouts.layoutnewlandingpage3');
    }
}
