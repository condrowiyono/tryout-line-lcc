<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CetakKartu extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $id;
    public function __construct($id)
    {
        $this->id = $id;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $dataparticipant = \App\ParticipantModel::where('buyer_id', $this->id)->get(); 

        return $this->from('no_reply@line-lcc.id', 'PANITIA TRYOUT LINExOCEAN')
        ->view('emails.cetak',compact('dataparticipant'));
    }
}
