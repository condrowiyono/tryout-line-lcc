@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Admin
                    <ul>
                    	<li> <a href="{{url('admin/pembeli')}}"> Daftar Pembeli </a> </li>
                    	<li> <a href="{{url('admin/peserta')}}"> Daftar Peserta </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
