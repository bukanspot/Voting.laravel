<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calon;
use App\pemilihan;
use DB;
class MilihController extends Controller
{
     public function index(Request $request) {
          if(!$request->session()->has('pemilih')){
           return redirect('/pemilih/login');
        }else{
            $calon = Calon::all();
            $pemilih = $request->session()->get('pemilih');

            $pemilihan = pemilihan::where('id_pemilih','=',$pemilih->id)->get();
            $waktu_akhir = DB::table('setting_waktus')->pluck('waktu_akhir');
            $waktu_awal = DB::table('setting_waktus')->pluck('waktu_awal');
            $today = date("M d, Y H:i:s");
            $new = date("M d, Y H:i:s",strtotime($waktu_akhir[0]));
            $new_awal = date("M d, Y H:i:s",strtotime($waktu_awal[0]));
            //'Sep 30, 2020 00:00:00'
            //dd($new);
            if($today>$new && $today<$new_awal){
                $inRange=false;
            }else{
                 $inRange=true;
            }
            $new = "'".$new."'";
            
            return view('pemilih.home',compact('calon','pemilihan','new','inRange'));
        }
    }   

     public function kandidat(Request $request,$id) {
          if(!$request->session()->has('pemilih')){
           return redirect('/pemilih/login');
        }else{
            $data = Calon::where('id','=',$id)->get();
            $calon = $data[0];
            $pemilih = $request->session()->get('pemilih');
           
            return view('pemilih.kandidat',compact('calon','pemilih'));
        }
       
    }

    public function vote(Request $request,$id) {
          if(!$request->session()->has('pemilih')){
           return redirect('/pemilih/login');
        }else{
            $pemilihan =  new pemilihan();
            $pemilihan->id_calon = $id;
            $pemilihan->id_pemilih = $request->pemilih;
             $pemilihan->save();
            return redirect('/');
        }
       
    }

   public function hasil(Request $request) {
       if(!$request->session()->has('pemilih')){
           return redirect('/pemilih/login');
        }else{
            $calon = DB::table('calons')->pluck('nama')->toJson();
            $data = DB::select('select count(id_pemilih) as "suara" from pemilihans group by id_calon');
            
            for ($i=0; $i < count($data); $i++) { 
                $hasil1[$i] = $data[$i]->suara;
            }
            $hasil = json_encode($hasil1);
            
              return view('pemilih.hasil_vote',compact('hasil','calon'));
        }
       
    }

    public function login() {
        return view('pemilih.login');
    }
    
}
