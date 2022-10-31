<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\menber;
use Illuminate\Http\Request;

class menberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $menber = menber::where('name', 'LIKE', "%$keyword%")
                ->orWhere('age', 'LIKE', "%$keyword%")
                ->orWhere('tel', 'LIKE', "%$keyword%")
                ->orWhere('point', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $menber = menber::latest()->paginate($perPage);
        }

        return view('bank.menber.index', compact('menber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('bank.menber.create');
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
        
        $requestData = $request->all();
        
        menber::create($requestData);

        return redirect('menber')->with('flash_message', 'menber added!');
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
        $menber = menber::findOrFail($id);

        return view('bank.menber.show', compact('menber'));
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
        $menber = menber::findOrFail($id);

        return view('bank.menber.edit', compact('menber'));
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
        
        $menber = menber::findOrFail($id);
        $menber->update($requestData);

        return redirect('menber')->with('flash_message', 'menber updated!');
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
        menber::destroy($id);

        return redirect('menber')->with('flash_message', 'menber deleted!');
    }
}
