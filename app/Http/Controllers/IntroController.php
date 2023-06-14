<?php

namespace App\Http\Controllers;

use App\Models\Intro;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Intro $intro)
    {  $intro = Intro::all();
        return view('Backend.Intro.index', compact('intro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Intro.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
            ]);
            
            Intro::create($request->all());
             
            return redirect()->route('intro.index')
                            ->with('success','Introduction created successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Intro $intro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Intro $intro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Intro $intro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Intro $intro)
    {
        //
    }
}
