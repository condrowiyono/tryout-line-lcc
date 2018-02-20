<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfirmModel extends Model
{
	protected $table = 'confirmation';
	protected $primaryKey = 'id';
	protected $fillable = [
		'id',
		'date',
		'bank',
		'accountnumber',
		'file',
		'ammount',
	  ];
	
	function confirmation(){
		return $this->hasOne('App\BuyerModel','confirmation_id','id');
	}
}
