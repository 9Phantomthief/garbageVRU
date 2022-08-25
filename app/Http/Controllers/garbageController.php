<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\garbage;
use Illuminate\Http\Request;

class garbageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $garbage = garbage::where('name', 'LIKE', "%$keyword%")
                ->orWhere('building', 'LIKE', "%$keyword%")
                ->orWhere('garbageA', 'LIKE', "%$keyword%")
                ->orWhere('garbageB', 'LIKE', "%$keyword%")
                ->orWhere('garbageC', 'LIKE', "%$keyword%")
                ->orWhere('garbageD', 'LIKE', "%$keyword%")
                ->orWhere('garbageX', 'LIKE', "%$keyword%")
                ->orWhere('other', 'LIKE', "%$keyword%")
                ->orWhere('Note', 'LIKE', "%$keyword%")
                ->orWhere('valueOther', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $garbage = garbage::latest()->paginate($perPage);
        }

        return view('garbage.index', compact('garbage'));
    }

    public function showreport()
        {
          return view('garbage.report');
        }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('garbage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        if(! $request->filled('Note')) {
            $request['Note'] = '-';
        }
        
        $requestData = $request->all();
        
        garbage::create($requestData);

        return redirect('garbage')->with('flash_message', 'garbage added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $garbage = garbage::findOrFail($id);

        return view('garbage.show', compact('garbage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $garbage = garbage::findOrFail($id);

        return view('garbage.edit', compact('garbage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $garbage = garbage::findOrFail($id);
        $garbage->update($requestData);

        return redirect('garbage')->with('flash_message', 'garbage updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        garbage::destroy($id);

        return redirect('garbage')->with('flash_message', 'garbage deleted!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function report()
    {
        return view('garbage.report');
    }
}
