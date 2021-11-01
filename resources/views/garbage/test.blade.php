$gA = garbage::select(DB::raw('sum("garbageA") as total_gA'),
                            DB::raw('YEAR("created_at") as year'),
                            DB::raw('MONTH("created_at") as month'))
                            //   DB::raw('DATE_FORMAT("created_at", "%M") as month'))
            ->whereYear('created_at', date('Y')) 
            ->groupBy('month','year') 
            ->get();  