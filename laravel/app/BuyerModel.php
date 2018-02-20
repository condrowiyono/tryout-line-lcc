<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyerModel extends Model
{
	protected $table = 'buyer';
	protected $primaryKey = 'id';
	protected $fillable = [
		'id',
		'name',
		'email',
		'phonenumber',
		'confirmation_id'
	  ];
	
	function participant(){
		return $this->belongsToMany('App\ParticipantModel','buyer_id','id');
	}

	function confirmationFrom(){
		return $this->belongsTo('App\ConfirmModel','confirmation_id','id');
	}
}
