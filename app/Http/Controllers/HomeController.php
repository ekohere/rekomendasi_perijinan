<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use App\Models\RekomendasiReklame;
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
        if(Entrust::hasRole('warga')){
            $rekomendasi_reklames=RekomendasiReklame::whereHas('dataUsaha',function($query){
                $query->where('user_id',Auth::id());
            })->get();
        }

        if(Entrust::hasRole(['tim_teknis_opd','pimpinan_opd','administrator'])) {
            $rekomendasi_reklames = RekomendasiReklame::get();
        }

        return view('home',compact('rekomendasi_reklames'));
    }
}
