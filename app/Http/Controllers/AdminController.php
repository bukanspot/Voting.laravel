<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting_waktu;
use App\Calon;
use App\pemilihan;
use DB;

class AdminController extends Controller
{
    public function home(Request $request)
    {
        if(!$request->session()->has('user')){
           return redirect('/admin/login');
        }else{
            
            return view('admin.home');
        }
    }

     public function setting(Request $request)
    {
        if(!$request->session()->has('user')){
           return redirect('/admin/login');
        }else{
            
             $setting = setting_waktu::all();
            return view('admin.setting',compact('setting'));
        }
    }

     public function chart(Request $request)
    {
        if(!$request->session()->has('user')){
           return redirect('/admin/login');
        }else{
           $calon = DB::table('calons')->pluck('nama')->toJson();
            $data = DB::select('select count(id_pemilih) as "suara" from pemilihans group by id_calon');
            
            for ($i=0; $i < count($data); $i++) { 
                $hasil1[$i] = $data[$i]->suara;
            }
            $hasil = json_encode($hasil1);
            return view('admin.chart',compact('hasil','calon'));
        }
        
    }

      public function edit_setting(setting_waktu $setting,$id)
    {
        $data = DB::table('setting_waktus')->where('id','=',$id)->limit(1)->get();
        $setting = $data[0];
        
        return view('admin.setting_edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function update_setting(Request $request, setting_waktu $setting)
    {   
        $setting->id = $request->id;
        $setting->waktu_awal = $request->waktu_awal;
        $setting->waktu_akhir = $request->waktu_akhir; 
        // $setting->save();
        
        DB::update('update setting_waktus set waktu_awal = ?,waktu_akhir = ? where id = ?', [$setting->waktu_awal,$setting->waktu_akhir,$setting->id ]);
        return redirect('admin/setting/');
    }

    public function pemilihan()
    {   
       
        $pemilih = DB::table('pemilihans')->rightJoin('pemilihs','pemilihans.id_pemilih','=','pemilihs.id')->paginate(15);
        return view('admin.pemilihan',compact('pemilih'));
    }
}
