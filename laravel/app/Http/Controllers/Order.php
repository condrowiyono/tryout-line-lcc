<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;

class Order extends Controller
{
	public function view()
    {	  
  		return view('order.view',compact('dataparticipant'));
    }
    public function viewpost(Request $request) {
    	
    	$data = \App\BuyerModel::where('id', $request['id'])->where('email', $request['email'])->first();
    	
    	if (count($data)<=0) {
  			return view('order.notfound');
  		} else
  		{
	  		$dataparticipant = \App\ParticipantModel::where('buyer_id', $request['id'])->get(); 
	  		return view('order.viewshow',compact('dataparticipant'));
  		}
    }

    public function confirm($id)
    {	  
    	$data = \App\BuyerModel::where('id', $id)->first();
  		if (count($data)<=0) {
  			return view('order.notfound');
  		} else
  		{
	  	if ($data->confirmation_id==''){
	  			return view('order.confirm',compact('data'));
	  		} else {
	  			$alamat = '/order/participant/'. $id ;
	  			return redirect($alamat);
	  		}
    	}
    }

    public function confirmpost($id,Request $request)
    {	  
    	$this->validate($request, [
          'date' => 'required',
          'name' => 'required',
          'bank' => 'required',
          'accountnumber' => 'required',
          'ammount' => 'required',
          'file' => 'required',
          ]);


          
          if(Input::hasFile('file')) {
			$file = Input::file('file');
			$tmpFilePath = '/upload/'. $id. '/';
			$tmpFileName = $file->getClientOriginalName();
			$file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
			$path = $tmpFilePath . $tmpFileName;

			$tambah = new \App\ConfirmModel();
			$tambah->date = $request['date'];
			$tambah->name =  $request['name'];
			$tambah->bank = $request['bank'];
			$tambah->accountnumber =  $request['accountnumber'];
			$tambah->ammount =  $request['ammount'];
			$tambah->file =  $path;
			$tambah->save();

			$buyer = \App\BuyerModel::where('id',$id)->first();
			$buyer->confirmation_id = $tambah->id;
			$buyer->save(); 
      	}
      	  
          $alamat = 'order/participant/' . $tambah->id ;
          return redirect($alamat);
    }
}
