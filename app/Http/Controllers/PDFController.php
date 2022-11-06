<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\garbage;
use PDF;

class PDFController extends Controller
{
    public function pdf()
    {
        $garbageA = garbage::select('garbageA')->get()->sum('garbageA');
        $garbageB = garbage::select('garbageB')->get()->sum('garbageB');
        $garbageC = garbage::select('garbageC')->get()->sum('garbageC');
        $garbageD = garbage::select('garbageD')->get()->sum('garbageD');
        $garbageX = garbage::select('garbageX')->get()->sum('garbageX');
        $Other    = garbage::select('valueOther')->get()->sum('valueOther');

        $date_now = date ("Y-m-d");
        $lastmonth_sp = explode("-",$date_now);
        $lastmonth = $lastmonth_sp[1];


        if (!empty($keyword)) {
            $building1 = garbage::where('created_at', '=', "%$keyword%")
                ->where('building', 'LIKE', "%อาคาร 100 ปี%")
                ->latest()
                ->get();

            $count1 = garbage::where('created_at', '=', "%$keyword%")
                ->where('building', 'LIKE', "%อาคาร 100 ปี%")
                ->selectRaw('id,count(id) as count')
                ->get();
        } else {
            $building1 = garbage::whereYear('created_at', date('Y'))
                    ->whereMonth('created_at', "=" , $lastmonth )
                    ->where('building', 'LIKE', "%อาคาร 100 ปี%")
                    ->latest()
                    ->get();
            $count1 = garbage::whereYear('created_at', date('Y'))
                    ->whereMonth('created_at', "=" , $lastmonth )
                    ->where('building', 'LIKE', "%อาคาร 100 ปี%")
                    ->selectRaw('id,count(id) as count')
                    ->get();
        }
        
        if (!empty($keyword)) {
            $building2 = garbage::where('created_at', 'LIKE', "%$keyword%")
                ->where('building', 'LIKE', "%อาคาร 75 ปี%")
                ->latest()
                ->get();
            $count2 = garbage::where('created_at', '=', "%$keyword%")
                ->where('building', 'LIKE', "%อาคาร 100 ปี%")
                ->selectRaw('id,count(id) as count')
                ->get();
        } else {
            $building2 = garbage::whereYear('created_at', date('Y'))
                    ->whereMonth('created_at', "=" , $lastmonth )
                    ->where('building', 'LIKE', "%อาคาร 75 ปี%")
                    ->latest()
                    ->get();
            $count2 = garbage::whereYear('created_at', date('Y'))
                    ->whereMonth('created_at', "=" , $lastmonth )
                    ->where('building', 'LIKE', "%อาคาร 100 ปี%")
                    ->selectRaw('id,count(id) as count')
                    ->get();
        }

        $compact = compact('garbageA', 'garbageB', 'garbageC', 'garbageD', 'garbageX', 'Other'
        ,'building1','building2','count1','count2');

        $report = garbage::all();
        $pdf = PDF::loadView('garbage.pdf',['report' => $report],$compact);
        return @$pdf->stream();


    }
    
}
