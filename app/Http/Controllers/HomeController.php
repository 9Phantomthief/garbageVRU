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
        $garbageA = garbage::Select('garbageA')->get()->sum('garbageA');
        $garbageB = garbage::Select('garbageB')->get()->sum('garbageB');
        $garbageC = garbage::Select('garbageC')->get()->sum('garbageC');
        $garbageD = garbage::Select('garbageD')->get()->sum('garbageD');
        $garbageX = garbage::Select('garbageX')->get()->sum('garbageX');
        $Other    = garbage::Select('valueOther')->get()->sum('valueOther');

        $gA = garbage::Select(DB::raw('sum(garbageA) as total_gA'),
                              DB::raw('MONTH(created_at) as month'))
            ->groupby('month')
            ->get();

        $orderCountByMonth = garbage::select( DB::raw('YEAR(created_at) as year'), 
                             DB::raw('DATE_FORMAT(created_at, "%M") as month') ) 
            ->whereYear('created_at', date('Y')) 
            ->groupBy('month','year') 
            ->get();       


        

        return view ('adminHome', compact('garbageA','garbageB','garbageC','garbageD','garbageX','Other','gA','orderCountByMonth'));
    }


}

// INSERT INTO users (name, email, is_admin, password)
// VALUES (admin, admin@vru.ac.th, 1, 1234);