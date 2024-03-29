<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\garbage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }


    public function total(Request $request)
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



        return view('adminHome', compact('garbageA', 'garbageB', 'garbageC', 'garbageD', 'garbageX', 'Other', 'gA', 'gB', 'gC', 'gD', 'gX', 'gO'));
    }
}
