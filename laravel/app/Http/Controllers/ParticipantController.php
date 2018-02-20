<?php

namespace App\Http\Controllers;
use Mail;
use PDF;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function baru($id)
    {
		  $data = \App\BuyerModel::where('id', $id)->first();
		  
		  if ($data->left > $data->ticket) {
		  		$dataparticipant = $data = \App\ParticipantModel::where('buyer_id', $id)->get(); 

		  		return view('order.finish',compact('dataparticipant'));
		  } else
			{
				return view('order.participant', compact('data'));
	         }


        
        
    }
    public function simpan($id,Request $request)
    {
		  $data = \App\BuyerModel::where('id', $id)->first();

          $this->validate($request, [
          'name' => 'required',
          'email' => 'required',
          'phonenumber' => 'required',
          'sex' => 'required',
          'school' => 'required',
          'address' => 'required',
          ]);

          $tambah = new \App\ParticipantModel();
          $tambah->name = $request['name'];
          $tambah->buyer_id = $id;
          $tambah->email =  $request['email'];
          $tambah->phonenumber = $request['phonenumber'];
          $tambah->sex =  $request['sex'];
          $tambah->school =  $request['school'];
          $tambah->address =  $request['address'];
          $tambah->save();
          

          $data->left++;
          $data->save();

          if ($data->left > $data->ticket) {
          	Mail::to($data->email)->send(new \App\Mail\ConfirmMail($tambah->buyer_id));
          }

          $alamat = "/order/participant/" . $data->id;
          return redirect($alamat); 
          
    }
    public function getPdf($id)
	{
		$data = \App\ParticipantModel::where('buyer_id',$id)->where('fix',1)->get();
		if (count($data)>=1) {
			return PDF::loadView('print.kartu',compact('data'))->setPaper('a4', 'landscape')->setWarnings(false)->stream('kartu.pdf');
		}
		else 
		{
			return "Kesalahan";
		}
	}
}
