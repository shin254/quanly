<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChiTieu;

class MainController extends Controller
{
    public function tienthu(Request $request){
            $tienchi = new ChiTieu([
                'ten' => $request->get('ten'),
                'tien_chi' => $request->get('price'),
                'tien_thu' => $request->get('tien_thu'),
                'tien_cho_muon' => $request->get('tien_cho_muon'),
                'loai_tien' => '2',
                'ghi_chu' => $request->get('ghi_chu'),
            ]);
            $tongthu = DB::table('chi_tieu')
            ->select(DB::raw('count(*) as tien_thu, loai_tien'))
            ->where('loai_tien',  2)
            ->groupBy('loai_tien')
            ->get();
            dd($tongthu);
            DB::update('update chitieu set tien_du = 100 where name = ?');
    }
}
