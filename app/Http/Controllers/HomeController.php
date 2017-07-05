<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekomendasis=Rekomendasi::whereHas('rekomendasiReklames',function($query){
            $query->whereHas('dataUsaha',function($query){
                $query->where('user_id',Auth::id());
            });
        });
        return view('home',compact('rekomendasis'));
    }
}
