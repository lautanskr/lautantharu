<?php

namespace App\Http\Controllers;
use App\Models\Intro;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;


class FrontendController extends Controller
{
    public function index(Intro $intro){
       $int=Intro::all();
       return view('Frontend.index', compact('int'));
    }
}
