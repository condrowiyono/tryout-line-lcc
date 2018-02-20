@section('page-css')
<link rel="stylesheet" type="text/css" href="/vendor/fancybox/jquery.fancybox.css" media="screen" />
@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <ul class="progress-indicator">
        <li class="completed">
            <span class="bubble"></span>
            Isi Data Pemesan
        </li>
        <li class="">
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
                <div class="panel-heading">Data Pemesan</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('buyer.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
                            <label for="phonenumber" class="col-md-4 control-label">phonenumber</label>

                            <div class="col-md-6">
                                <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}" required autofocus>

                                @if ($errors->has('phonenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ticket') ? ' has-error' : '' }}">
                            <label for="ticket" class="col-md-4 control-label">ticket</label>

                            <div class="col-md-6">
                                <input id="ticket" type="number" class="form-control" name="ticket" value="{{ old('ticket') }}" required autofocus>

                                @if ($errors->has('ticket'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ticket') }}</strong>
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
        @include('order.poster')
        </div>
    </div>
</div>
@endsection

