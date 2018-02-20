@extends('layouts.app')

@section('content')
<div class="container">
<ul class="progress-indicator">
        <li class="completed">
            <span class="bubble"></span>
            Isi Data Pemesan
        </li>
        <li class="completed">
            <span class="bubble"></span>
            Isi Data Peserta
        </li>
        <li class="completed">
            <span class="bubble"></span>
            Pembayaran
        </li>
        @if (($dataparticipant[0]->participantFrom->confirmation_id)=='')
            <li>
        @else
            <li class="completed">
        @endif
            <span class="bubble"></span>
            Konfirmasi
        </li>
        @if (($dataparticipant[0]->participantFrom->fix)=='1')
            <li class="completed">
        @else
            <li>
        @endif
            <span class="bubble"></span>
            Cetak tiket
        </li>
    </ul>
    <div class="row">
        <div class="col-md-8">
            @if (($dataparticipant[0]->participantFrom->confirmation_id)=='')
            @else
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Well done!</strong> Pembayaran telah selesai dilaksanakan. Silakan Tunggu verifikasi data
            </div>
            @endif
            @if (($dataparticipant[0]->participantFrom->fix)=='1')
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Konfirmasi berhasil!</strong> Silakan cetak kartu peserta tryout Anda <a href="{{url('pdf', $dataparticipant[0]->participantFrom->id)}}"> disini </a>
            </div>
            @else
            
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Pembayaran</div>

                <div class="panel-body">
                    Selamat, Anda telah melakukan pendaftaran Tryout LINExOCEAN.
                    <br> Langkah selanjutnya adalah pembayaran dan konfirmasi
                    
                    <br>
                    <strong>DETAIL PEMESANAN </strong>
                    <div class="row">
                        <div class="col-md-4">Nama</div>                
                        <div class="col-md-4">{{$dataparticipant[0]->participantFrom->name}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Email</div>                
                        <div class="col-md-4">{{$dataparticipant[0]->participantFrom->email}}</div>
                    </div>
                     <div class="row">
                        <div class="col-md-4">No Handphone</div>                
                        <div class="col-md-4">{{$dataparticipant[0]->participantFrom->phonenumber}}</div>
                    </div>
                    <br/>
                    @php ($i = 1)
                    @foreach ($dataparticipant as $c)
                    <strong>DETAIL PESERTA {{$i}}</strong>
                    <div class="row">
                        <div class="col-md-4">Nama</div>                
                        <div class="col-md-4">{{$c->name}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Sekolah</div>                
                        <div class="col-md-4">{{$c->school}}</div>
                    </div>
                    @php ($i++)
                    @endforeach

                    <br> Info lengkap kami kirim via email.
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
        <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-success">
                <div class="panel-heading">Detail Pembayaran</div>

                <div class="panel-body">
                    <h4>DETAIL PEMBAYARAN 
                    </h4>
                    <div class="row">
                        <div class="col-md-6">Harga ( {{($i-1)}} Tiket ) </div>
                        <div class="col-md-2">Rp </div>
                        <div class="col-md-4">{{($i-1) * 30000}} </div>
                    </div>
                    <br />
                     <div class="row">
                        <div class="col-md-6"><strong>Total Pembayaran</strong> </div>
                        <div class="col-md-2">Rp </div>
                        <div class="col-md-4"><strong>{{($i-1) * 30000}} </strong></div>
                    </div>
                </div>
            </div>
         </div>
         <div class="col-md-12 ">
            <div class="panel panel-success">
                <div class="panel-heading">Informasi Pembayaran</div>

                <div class="panel-body">
                    <strong>TRANSFER</strong>
                    <br/>Transfer ke rekening :
                    <br/><strong>Bank BRI</strong>
                    <br/><strong>6015 01 014064 53 4</strong>
                    <br/>a.n. Condro Wiyono
                    <br>
                    <br/><strong>OFFLINE</strong> 
                    <br/>Kunjungi LINE-LCC di </strong>
                    <br/><strong>Jl. Sadang Luhur No.12, Sekeloa, Coblong</strong>
                </div>
            </div>
         </div>
         <div class="col-md-12 ">
               
                @if (($dataparticipant[0]->participantFrom->confirmation_id)=='')
                <a class="btn-block btn btn-success" href="/order/confirm/{{$dataparticipant[0]->participantFrom->id}}">KONFIRMASI PEMBAYARAN</a>
                @else
                @if (($dataparticipant[0]->participantFrom->fix)=='1')
                 <a class="btn-block btn btn-success" href="{{url('pdf', $dataparticipant[0]->participantFrom->id)}}" >CETAK KARTU</a>
                @else
                
                @endif
               
                @endif
         </div>
        </div>
        </div>
    </div>
</div>
@endsection
