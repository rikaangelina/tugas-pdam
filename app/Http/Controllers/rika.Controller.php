<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        return view('bayar-air.index');
    }

    public function bayar(Request $request)
    {
        $pemakaian = $request->input('pemakaian');
        $tagihan = 0;

        if ($pemakaian <= 25) {
            $tagihan = $pemakaian * 150;
        } elseif ($pemakaian <= 50) {
            $tagihan = (25 * 150) + (($pemakaian - 25) * 170);
        } elseif ($pemakaian <= 75) {
            $tagihan = (25 * 150) + (25 * 170) + (($pemakaian - 50) * 210);
        } else {
            $tagihan = (25 * 150) + (25 * 170) + (25 * 210) + (($pemakaian - 75) * 250);
        }

        return view('bayar-air.index', [
            'pemakaian' => $pemakaian,
            'tagihan' => $tagihan
        ]);
    }
}