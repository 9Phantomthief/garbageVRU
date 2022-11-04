<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\numre;
use Illuminate\Http\Request;

class numreController extends Controller
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
            $numre = numre::where('id_member', 'LIKE', "%$keyword%")
                ->orWhere('num_re', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $numre = numre::latest()->paginate($perPage);
        }

        return view('bank.numre.index', compact('numre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        $numre = numre::findOrFail($id);
        return view('bank.numre.create');
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
        
        numre::create($requestData);

        return redirect('numre')->with('flash_message', 'numre added!');
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
        $numre = numre::findOrFail($id);

        return view('bank.numre.show', compact('numre'));
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
        $numre = numre::findOrFail($id);

        return view('bank.numre.edit', compact('numre'));
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
        
        $numre = numre::findOrFail($id);
        $numre->update($requestData);

        return redirect('numre')->with('flash_message', 'numre updated!');
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
        numre::destroy($id);

        return redirect('numre')->with('flash_message', 'numre deleted!');
    }
}
