<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function daftarPembeli () {
    	$data = \App\BuyerModel::get();
    	return view('admin.pembeli',compact('data'));
    }
    public function daftarPeserta () {
    	$data = \App\ParticipantModel::get();
    	return view('admin.peserta',compact('data'));
    }
    public function gantiStatus($id, Request $request) {
    	$data = \App\ParticipantModel::where('id',$id)->first();
    	
    	if ($data->fix==1){
    		$data->fix = 0 ;
    	} else {
			$data->fix = 1 ;
    	}
    	$data->save();

    	return redirect('/admin/peserta');
    }
    public function gantiStatusBayar($id, Request $request) {
    	$data = \App\BuyerModel::where('id',$id)->first();
    	
    	if ($data->fix==1){
    		$data->fix = 0 ;
    	} else {
			$data->fix = 1 ;
    	}
    	$data->save();
    	
    	$data2 = \App\ParticipantModel::where('buyer_id',$id)->get();
    	
    	foreach ($data2 as $c) {
    		$data3 = \App\ParticipantModel::where('id',$c->id)->first();

	    	if ($data3->fix==1){
	    		$data3->fix =  0 ;
	    	} else {
				$data3->fix = 1 ;
	    	} 
	    	$data3->save();
    	}
    	
  		Mail::to($data->email)->send(new \App\Mail\ConfirmMail($tambah->buyer_id));
    	return redirect('/admin/pembeli');
    }
}
