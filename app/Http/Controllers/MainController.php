<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChiTieu;
use DB;

class MainController extends Controller
{
    public function tienthu(Request $request){
            $tienthu = new ChiTieu([
                'ten' => $request->get('ten'),
                'tien_thu' => $request->get('tien_thu'),
                'loai_tien' => '2',
                'tien_chi' => '0',
                'tien_cho_muon' => '0',
                'ghi_chu' => $request->get('ghi_chu'),
            ]);
            $tienthu->save();
            $tongthu = DB::table('chitieu')
            ->select(DB::raw("SUM(tien_thu) as tongthu"))->where('loai_tien', '2')
            ->first();
            $tongchi = DB::table('chitieu')
            ->select(DB::raw("SUM(tien_chi) as tongchi"))->where('loai_tien', '1')
            ->first();
          
            $tiendu =( $tongthu->tongthu - $tongchi->tongchi);
            // DB::update("update chitieu set tien_du = $tiendu where id = desc ");
            DB::table('chitieu')->orderBy('id', 'desc')->take(1)->update(['tien_du' => $tiendu]);
            toast("Đã nhập khoản thu mới","success");
            return redirect()->route('index');
            
           
    }

    public function tienchi(Request $request){
        $tienchi = new ChiTieu([
            'ten' => $request->get('ten'),
            'tien_chi' => $request->get('tien_chi'),
            'tien_thu' => '0',
            'loai_tien' => '1',
            'tien_cho_muon' => '0',
            'ghi_chu' => $request->get('ghi_chu'),
        ]);
        $tienchi->save();
        $tongthu = DB::table('chitieu')
            ->select(DB::raw("SUM(tien_thu) as tongthu"))->where('loai_tien', '2')
            ->first();
            $tongchi = DB::table('chitieu')
            ->select(DB::raw("SUM(tien_chi) as tongchi"))->where('loai_tien', '1')
            ->first();
            $tiendu =( $tongthu->tongthu - $tongchi->tongchi);
            if($tongthu->tongthu < $tongchi->tongchi){
        alert()->warning('Cảnh Báo',"Bạn đang chi tiêu quá số tiền hiện có, sài ít thôi , dmm, đang $tiendu đ đấy !!");
        DB::table('chitieu')->orderBy('id', 'desc')->take(1)->update(['tien_du' => $tiendu]);
        toast("Đã nhập khoản chi mới","warning");
        return redirect()->route('index');
            }
            DB::table('chitieu')->orderBy('id', 'desc')->take(1)->update(['tien_du' => $tiendu]);
        toast("Đã nhập khoản chi mới","success");
        return redirect()->route('index');  
       
}


public function tienchomuon(Request $request){
    $tienchi = new ChiTieu([
        'ten' => $request->get('ten'),
        'tien_cho_muon' => $request->get('tien_cho_muon'),
        'tien_thu' => '0',
        'tien_chi' => '0',
        'loai_tien' => '3',
        'ghi_chu' => $request->get('ghi_chu'),
    ]);
    $tienchi->save();
    $tongthu = DB::table('chitieu')
        ->select(DB::raw("SUM(tien_thu) as tongthu"))->where('loai_tien', '2')
        ->first();
        $tongchi = DB::table('chitieu')
        ->select(DB::raw("SUM(tien_chi) as tongchi"))->where('loai_tien', '1')
        ->first();
        $tongchomuon = DB::table('chitieu')
        ->select(DB::raw("SUM(tien_cho_muon) as tongchomuon"))->where('loai_tien', '3')
        ->first();
        $tiendu =( $tongthu->tongthu - ($tongchi->tongchi + $tongchomuon->tongchomuon));
        if($tiendu < $tongchomuon->tongchomuon){
    DB::table('chitieu')->orderBy('id', 'desc')->take(1)->update(['tien_du' => $tiendu]);
    toast("Cho mượn xong âm cmn tiền à , ngu vcl, đang $tiendu đ đấy !!","warning");
    return redirect()->route('index');
        }
        DB::table('chitieu')->orderBy('id', 'desc')->take(1)->update(['tien_du' => $tiendu]);
    toast("Đã nhập khoản cho vay mới","success");
    return redirect()->route('index');  
   
}
}
