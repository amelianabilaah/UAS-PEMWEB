<?php

namespace App\Http\Controllers;

use App\Models\suggest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuggestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasuggest = suggest::all();
        return view('', compact('datasuggest'));
    }

    public function insertsuggest(Request $request) {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suggest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $input = $request->all();
       
        $request->validate([
            'email' => ['required'],
            'name' => ['required'],
            'suggest' => ['required'],
        ]);

        suggest::create($input);
        
        if(Auth::user()){
            return redirect()->route('homepage2');
        }
            return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function show(suggest $suggest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function edit(suggest $suggest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, suggest $suggest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function destroy(suggest $suggest)
    {
        //
    }
}
