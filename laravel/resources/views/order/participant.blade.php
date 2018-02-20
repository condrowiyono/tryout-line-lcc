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
        <li>
            <span class="bubble"></span>
            Pembayaran
        </li>
        <li>
            <span class="bubble"></span>
            Konfirmasi
        </li>
        <li>
            <span class="bubble"></span>
            Cetak tiket
        </li>
    </ul>
    <div class="row">
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">Isi Data Peserta {{$data->left}} of {{$data->ticket}} </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action=" {{ url('order/participantsave',$data->id)}} ">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$data->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$data->email}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
                            <label for="phonenumber" class="col-md-4 control-label">Nomor Telepon</label>

                            <div class="col-md-6">
                                <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="{{$data->phonenumber}}" required >

                                @if ($errors->has('phonenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="sex" class="col-md-4 control-label">Jenis Kelamin</label>

                            <div class="col-md-6"   >
                                <select name="sex" class="form-control">
								    <option value="laki">Laki - laki </option>
								    <option value="perempuan">Perempuan</option>
								  </select>

                                @if ($errors->has('sex'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
                            <label for="school" class="col-md-4 control-label">Sekolah Asal</label>

                            <div class="col-md-6">
                                <input id="school" type="text" class="form-control" name="school" value="" required >

                                @if ($errors->has('school'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('school') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>   
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="" required >

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
        	<div class="panel panel-success">
                <div class="panel-heading">Detail Pembayaran</div>

                <div class="panel-body">
                    <h4>DETAIL PEMBAYARAN 
                    </h4>
                    <div class="row">
                        <div class="col-md-6">Harga ( {{($data->ticket)}} Tiket ) </div>
                        <div class="col-md-2">Rp </div>
                        <div class="col-md-4">{{($data->ticket) * 30000}} </div>
                    </div>
                    <br />
                     <div class="row">
                        <div class="col-md-6"><strong>Total Pembayaran</strong> </div>
                        <div class="col-md-2">Rp </div>
                        <div class="col-md-4"><strong>{{($data->ticket) * 30000}} </strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
