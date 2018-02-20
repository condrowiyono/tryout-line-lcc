<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantModel extends Model
{
	protected $table = 'participant';
	protected $primaryKey = 'id';
	protected $fillable = [
		'id',
		'buyer_id',
		'name',
		'email',
		'phonenumber',
		'school',
		'address'
	  ];
	
	function participantFrom(){
		return $this->belongsTo('App\BuyerModel','buyer_id','id');
	}
}
