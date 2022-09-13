<?php

namespace App\Http\Controllers;

use App\Models\Woonplaats;
use Illuminate\Http\Request;

class WoonplaatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $woonplaats = Woonplaats::all();
      return view ('woonplaatsen.index')->with('woonplaatsen', $woonplaats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('woonplaatsen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'home' =>'required|max:100',
            'name' =>'required|max:40',
            'surname' => 'required|max:40'

        ]);
        $input = $request->all();
        Woonplaats::create($input);
        return redirect('woonplaatsen')->with('flash_message', 'woonplaats Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Woonplaats  $woonplaats
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $woonplaats = Woonplaats::find ($id);
        return view('woonplaatsen.show')->with('woonplaatsen', $woonplaats);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Woonplaats  $woonplaats
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $woonplaats = Woonplaats::find($id);
        return view('woonplaatsen.edit')->with('woonplaatsen', $woonplaats);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Woonplaats  $woonplaats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $woonplaats = Woonplaats::find($id);
        $input=$request->all();
        $woonplaats->update($input);
        return redirect('woonplaatsen')->with('flash_message', 'woonplaats Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Woonplaats  $woonplaats
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Woonplaats::destroy($id);
        return redirect('woonplaatsen')->with('flash_message', 'woonplaats deleted!');
    }
}
