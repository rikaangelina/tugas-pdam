<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class HomeController extends Controller
{
  public function formpdam(){
    return view ("admin.formpdam");
  }
  public function pembayaran(request $request){
      $pemakaian = $request->pemakaian ;
      if ($pemakaian <= 25){
          $hasil = $pemakaian * 150;
      } elseif ($pemakaian <= 50) {
          $hasil = (25*150) + (($pemakaian - 25)*170);
      } elseif ($pemakaian <= 75) {
          $hasil = (25*150) + (25*170) (($pemakaian - 25)*210);
      } else {
        $hasil = (25*150) + (25*170) + (25*210) (($pemakaian - 75)*250);
  }
  return response()->json([
    'pemakaian' => $pemakaian,
    'harga' => $hasil
  ]);
}
}
?>