<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\garbage;
use Illuminate\Support\Facades\DB;

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



        $gA = garbage::select(
            DB::raw('sum(garbageA) as total_gA'),
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month')
        )
            ->whereYear('created_at', date('Y'))
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






        return view('adminHome', compact('garbageA', 'garbageB', 'garbageC', 'garbageD', 'garbageX', 'Other', 'gA', 'gB', 'gC', 'gD', 'gX', 'gO'));
    }
}
