<?php

namespace App\Http\Controllers;

use App\Models\RekomendasiReklame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\User;

class CetakController extends Controller
{
    
    public function pdfRekomendasiReklame($rekomendasi_reklame_id)
    {
    	$rekomendasi=RekomendasiReklame::where('id',$rekomendasi_reklame_id)->first();
        $user=Auth::user();
        $pdf = PDF::loadView('cetak_rekomendasi_reklame',compact('rekomendasi'))->setPaper('a4', 'landscape');

            return $pdf->download('bukti_pendaftaran.pdf');
    }
 
}


