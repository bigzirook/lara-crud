<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnnualReport;

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
        $form_details = AnnualReport::whereUserId(auth()->user()->id)->paginate(5);
        return view('home',COMPACT('form_details'));
    }

    
}
