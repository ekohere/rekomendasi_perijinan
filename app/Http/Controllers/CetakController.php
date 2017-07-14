<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\User;

class CetakController extends Controller
{
    
    public function pdf()
    {
    	$user=Auth::user();
        $pdf = PDF::loadView('cetakrekomendasi',compact('user'))->setPaper('a4', 'landscape');

            return $pdf->download('bukti_pendaftaran.pdf');
    }
 
}


