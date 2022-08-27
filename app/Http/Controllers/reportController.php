<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\garbage;
use Illuminate\Support\Facades\DB;

class reportController extends Controller
{
    public function index(Request $request)
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
        
        $lastmonth5_st = date ('Y-m-d', strtotime ($date_now . "-4 Months"));
        $lastmonth5_sp = explode("-",$lastmonth5_st);
        $lastmonth5 = $lastmonth5_sp[1];

        // echo $lastmonth;
        // echo "<br>" ;
        // echo $lastmonth5;

        $gA = garbage::select(
            DB::raw('sum(garbageA) as total_gA'),
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month')
        )
            ->whereYear('created_at', date('Y'))
            ->whereMonth('created_at', ">=" , $lastmonth5 )
            ->whereMonth('created_at', "<=" , $lastmonth )
            ->groupBy('year', 'month')
            ->orderBy('month' , 'ASC')
            ->latest()->take(5)
            ->get();

        // foreach ($gA as $key ) {
        //     echo "<br>" ;
        //     echo "<br>" ;
        //     echo $key->month ;
        // }

        // exit();

        $gB = garbage::select(
            DB::raw('sum(garbageB) as total_gB'),
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month')
        )
            ->whereYear('created_at', date('Y'))
            ->whereMonth('created_at', ">=" , $lastmonth5 )
            ->whereMonth('created_at', "<=" , $lastmonth )
            ->groupBy('year', 'month')
            ->orderBy('month' , 'ASC')
            ->latest()->take(5)
            ->get();

        $gC = garbage::select(
            DB::raw('sum(garbageC) as total_gC'),
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month')
        )
            ->whereYear('created_at', date('Y'))
            ->whereMonth('created_at', ">=" , $lastmonth5 )
            ->whereMonth('created_at', "<=" , $lastmonth )
            ->groupBy('year', 'month')
            ->orderBy('month' , 'ASC')
            ->latest()->take(5)
            ->get();

        $gD = garbage::select(
            DB::raw('sum(garbageD) as total_gD'),
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month')
        )
            ->whereYear('created_at', date('Y'))
            ->whereMonth('created_at', ">=" , $lastmonth5 )
            ->whereMonth('created_at', "<=" , $lastmonth )
            ->groupBy('year', 'month')
            ->orderBy('month' , 'ASC')
            ->latest()->take(5)
            ->get();

        $gX = garbage::select(
            DB::raw('sum(garbageX) as total_gX'),
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month')
        )
            ->whereYear('created_at', date('Y'))
            ->whereMonth('created_at', ">=" , $lastmonth5 )
            ->whereMonth('created_at', "<=" , $lastmonth )
            ->groupBy('year', 'month')
            ->orderBy('month' , 'ASC')
            ->latest()->take(5)
            ->get();

        $gO = garbage::select(
            DB::raw('sum(valueOther) as total_gO'),
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month')
        )
            ->whereYear('created_at', date('Y'))
            ->whereMonth('created_at', ">=" , $lastmonth5 )
            ->whereMonth('created_at', "<=" , $lastmonth )
            ->groupBy('year', 'month')
            ->orderBy('month' , 'ASC')
            ->latest()->take(5)
            ->get();
        // $gA = garbage::Select(DB::raw('sum(garbageA) as total_gA'),
        //                       DB::raw('MONTH(created_at) as month'))
        //     ->groupby('month')
        //     ->get();


        // $orderCountByMonth = garbage::select( DB::raw('YEAR(created_at) as year'), 
        //                      DB::raw('DATE_FORMAT(created_at, "%M") as month') ) 
        //     ->whereYear('created_at', date('Y')) 
        //     ->groupBy('month','year') 
        //     ->get();
            
            




        return view('garbage.report', compact('garbageA', 'garbageB', 'garbageC', 'garbageD', 'garbageX', 'Other', 'gA', 'gB', 'gC', 'gD', 'gX', 'gO'));
    }
}