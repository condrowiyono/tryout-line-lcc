
@extends('layouts.app')
@section('page-css')
<link href="{{ asset('vendor/datepicker/css/bootstrap-datepicker.min.css') }} " rel="stylesheet">
<link href="{{ asset('vendor/bootstrap-select/css/bootstrap-select.min.css') }} " rel="stylesheet">
@endsection
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
        <li class="completed">
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
                <div class="panel-heading">Confirmation {{$data->name}} </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action=" {{ url('order/confirmpost',$data->id)}}" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="transfer" class="col-md-4 control-label">Transfer ke</label>

                            <div class="col-md-6">
                                <input id="transfer" type="text" class="form-control" name="transfer" value="BRI ( 6015 01 014064 53 4 ) a.n. Condro Wiyono" disabled="disabled">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Tanggal</label>

                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control" name="date" value="" required autofocus>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Atas Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('bank') ? ' has-error' : '' }}">
                            <label for="bank" class="col-md-4 control-label">Dari Bank</label>

                            <div class="col-md-6">
                                <select  class="form-control selectpicker" data-live-search="true" name="bank">
								     <option value="" disabled="">Pilih Bank</option>
								    <option value="Bank Central Asia ( BCA )">Bank Central Asia ( BCA )</option>
								    <option value="Bank Rakyat Indonesia ( BRI )">Bank Rakyat Indonesia ( BRI )</option>
								    <option value="Bank Mandiri">Bank Mandiri</option>
								    <option value="Bank Negara Indonesia 1946 ( BNI )">Bank Negara Indonesia 1946 ( BNI )</option>
								    <option value="Bank Danamon Indonesia">Bank Danamon Indonesia</option>
								    <option value="Bank Permata tbk ( Permata )">Bank Permata tbk ( Permata )</option>
								    <option value="Bank Internasional Indonesia ( BII )">Bank Internasional Indonesia ( BII )</option>
								    <option value="Bank Pan Indonesia">Bank Pan Indonesia</option>
								    <option value="Bank CIMB Niaga ( CIMB )">Bank CIMB Niaga ( CIMB )</option>
								    <option value="Bank UOB Buana">Bank UOB Buana</option>
								    <option value="Bank OCBC NISP">Bank OCBC NISP</option>
								    <option value="Citibank">Citibank</option>
								    <option value="JP Morgan Chase Bank">JP Morgan Chase Bank</option>
								    <option value="Bank of America NA &amp; SA">Bank of America NA &amp; SA</option>
								    <option value="Bank Windu Kentjana International">Bank Windu Kentjana International</option>
								    <option value="Bank Artha Graha Internasional">Bank Artha Graha Internasional</option>
								    <option value="Bangkok Bank Ltd.">Bangkok Bank Ltd.</option>
								    <option value="The Hongkong &amp; Shanghai Banking Corp ( HSBC )">The Hongkong &amp; Shanghai Banking Corp ( HSBC )</option>
								    <option value="The Bank of Tokyo Mitsubishi-UFJ Ltd.">The Bank of Tokyo Mitsubishi-UFJ Ltd.</option>
								    <option value="Bank Sumitomo Mitsui Indonesia">Bank Sumitomo Mitsui Indonesia</option>
								    <option value="Bank DBS Indonesia">Bank DBS Indonesia</option>
								    <option value="Bank Resona Perdania">Bank Resona Perdania</option>
								    <option value="Bank Mizuho Indonesia">Bank Mizuho Indonesia</option>
								    <option value="Standard Chartered Bank">Standard Chartered Bank</option>
								    <option value="ABN Amro Bank NV">ABN Amro Bank NV</option>
								    <option value="Bank Capital Indonesia">Bank Capital Indonesia</option>
								    <option value="Bank BNP Paribas Indonesia">Bank BNP Paribas Indonesia</option>
								    <option value="Korea Exchange Bank Indonesia">Korea Exchange Bank Indonesia</option>
								    <option value="ANZ Panin Bank">ANZ Panin Bank</option>
								    <option value="Deutsche Bank AG.">Deutsche Bank AG.</option>
								    <option value="Bank Woori Indonesia">Bank Woori Indonesia</option>
								    <option value="The Bank of China">The Bank of China</option>
								    <option value="Bank Bumi Arta">Bank Bumi Arta</option>
								    <option value="Bank Ekonomi Raharja">Bank Ekonomi Raharja</option>
								    <option value="Bank Antardaerah">Bank Antardaerah</option>
								    <option value="Rabobank International Indonesia">Rabobank International Indonesia</option>
								    <option value="Bank Mutiara">Bank Mutiara</option>
								    <option value="Bank Mayapada International">Bank Mayapada International</option>
								    <option value="BPD Jawa Barat">BPD Jawa Barat</option>
								    <option value="BPD DKI Jakarta">BPD DKI Jakarta</option>
								    <option value="BPD Yogyakarta">BPD Yogyakarta</option>
								    <option value="BPD Jawa Tengah">BPD Jawa Tengah</option>
								    <option value="BPD Jawa Timur">BPD Jawa Timur</option>
								    <option value="BPD Jambi">BPD Jambi</option>
								    <option value="BPD Aceh">BPD Aceh</option>
								    <option value="BPD Sumatera Utara">BPD Sumatera Utara</option>
								    <option value="BPD Sumatera Barat">BPD Sumatera Barat</option>
								    <option value="BPD Riau">BPD Riau</option>
								    <option value="BPD Sumatera Selatan dan Bangka Belitung">BPD Sumatera Selatan dan Bangka Belitung</option>
								    <option value="BPD Lampung">BPD Lampung</option>
								    <option value="BPD Kalimantan Selatan">BPD Kalimantan Selatan</option>
								    <option value="BPD Kalimantan Barat">BPD Kalimantan Barat</option>
								    <option value="BPD Kalimantan Timur">BPD Kalimantan Timur</option>
								    <option value="BPD Kalimantan Tengah">BPD Kalimantan Tengah</option>
								    <option value="BPD Sulawesi Selatan">BPD Sulawesi Selatan</option>
								    <option value="BPD Sulawesi Utara">BPD Sulawesi Utara</option>
								    <option value="BPD Nusa Tenggara Barat">BPD Nusa Tenggara Barat</option>
								    <option value="BPD Bali">BPD Bali</option>
								    <option value="BPD Nusa Tenggara Timur">BPD Nusa Tenggara Timur</option>
								    <option value="BPD Maluku">BPD Maluku</option>
								    <option value="BPD Papua">BPD Papua</option>
								    <option value="BPD Bengkulu">BPD Bengkulu</option>
								    <option value="BPD Sulawesi Tengah">BPD Sulawesi Tengah</option>
								    <option value="BPD Sulawesi Tenggara">BPD Sulawesi Tenggara</option>
								    <option value="Bank Nusantara Parahyangan">Bank Nusantara Parahyangan</option>
								    <option value="Bank Swadesi">Bank Swadesi</option>
								    <option value="Bank Muamalat Indonesia">Bank Muamalat Indonesia</option>
								    <option value="Bank Mestika Dharma">Bank Mestika Dharma</option>
								    <option value="Bank Metro Ekspres">Bank Metro Ekspres</option>
								    <option value="Bank Sinarmas">Bank Sinarmas</option>
								    <option value="Bank Maspion Indonesia">Bank Maspion Indonesia</option>
								    <option value="Bank Ganesha">Bank Ganesha</option>
								    <option value="Bank ICBC Indonesia">Bank ICBC Indonesia</option>
								    <option value="Bank Kesawan">Bank Kesawan</option>
								    <option value="Bank Tabungan Negara ( BTN )">Bank Tabungan Negara ( BTN )</option>
								    <option value="Bank HS 1906">Bank HS 1906</option>
								    <option value="Bank Tabungan Pensiunan Nasional">Bank Tabungan Pensiunan Nasional</option>
								    <option value="Bank Victoria Syariah">Bank Victoria Syariah</option>
								    <option value="Bank BRI Syariah">Bank BRI Syariah</option>
								    <option value="Bank Jabar Banten Syariah">Bank Jabar Banten Syariah</option>
								    <option value="Bank Mega">Bank Mega</option>
								    <option value="Bank BNI Syariah">Bank BNI Syariah</option>
								    <option value="Bank Bukopin">Bank Bukopin</option>
								    <option value="Bank Syariah Mandiri">Bank Syariah Mandiri</option>
								    <option value="Bank Bisnis Internasional">Bank Bisnis Internasional</option>
								    <option value="Bank Andara">Bank Andara</option>
								    <option value="Bank Jasa Jakarta">Bank Jasa Jakarta</option>
								    <option value="Bank Hana">Bank Hana</option>
								    <option value="Bank ICB Bumiputera">Bank ICB Bumiputera</option>
								    <option value="Bank Yudha Bhakti">Bank Yudha Bhakti</option>
								    <option value="Bank Mitraniaga">Bank Mitraniaga</option>
								    <option value="Bank Rakyat Indonesia Agroniaga ( BRI Agro )">Bank Rakyat Indonesia Agroniaga ( BRI Agro )</option>
								    <option value="Bank SBI Indonesia">Bank SBI Indonesia</option>
								    <option value="Bank Royal Indonesia">Bank Royal Indonesia</option>
								    <option value="Bank Nationalnobu">Bank Nationalnobu</option>
								    <option value="Bank Syariah Mega Indonesia">Bank Syariah Mega Indonesia</option>
								    <option value="Bank Ina Perdana">Bank Ina Perdana</option>
								    <option value="Bank Panin Syariah">Bank Panin Syariah</option>
								    <option value="Bank Prima Master">Bank Prima Master</option>
								    <option value="Bank Syariah Bukopin">Bank Syariah Bukopin</option>
								    <option value="Bank Dipo International">Bank Dipo International</option>
								    <option value="Bank Barclays Indonesia">Bank Barclays Indonesia</option>
								    <option value="Bank Liman International">Bank Liman International</option>
								    <option value="Bank Anglomas Internasional">Bank Anglomas Internasional</option>
								    <option value="Bank Kesejahteraan Ekonomi">Bank Kesejahteraan Ekonomi</option>
								    <option value="Bank BCA Syariah">Bank BCA Syariah</option>
								    <option value="Bank Artos Indonesia">Bank Artos Indonesia</option>
								    <option value="Bank Sahabat Purba Danarta">Bank Sahabat Purba Danarta</option>
								    <option value="Bank Multi Arta Sentosa ( MAS )">Bank Multi Arta Sentosa ( MAS )</option>
								    <option value="Bank Mayora">Bank Mayora</option>
								    <option value="Bank Index Selindo">Bank Index Selindo</option>
								    <option value="Bank Eksekutif Internasional">Bank Eksekutif Internasional</option>
								    <option value="Bank Centratama Nasional">Bank Centratama Nasional</option>
								    <option value="Bank Fama Internasional">Bank Fama Internasional</option>
								    <option value="Bank Sinar Harapan Bali">Bank Sinar Harapan Bali</option>
								    <option value="Bank Victoria International">Bank Victoria International</option>
								    <option value="Bank Harda Internasional">Bank Harda Internasional</option>
								    <option value="Bank Agris">Bank Agris</option>
								    <option value="Maybank Indocorp">Maybank Indocorp</option>
								    <option value="Bank OCBC Indonesia">Bank OCBC Indonesia</option>
								    <option value="Bank Chinatrust Indonesia">Bank Chinatrust Indonesia</option>
								    <option value="Bank Commonwealth">Bank Commonwealth</option>
								    <option value="Others">Others</option>
								</select>


                                @if ($errors->has('bank'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bank') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('accountnumber') ? ' has-error' : '' }}">
                            <label for="accountnumber" class="col-md-4 control-label">Nomor Rekening</label>

                            <div class="col-md-6">
                                <input id="accountnumber" type="text" class="form-control" name="accountnumber" value="" required autofocus>

                                @if ($errors->has('accountnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('accountnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                     
                         <div class="form-group{{ $errors->has('ammount') ? ' has-error' : '' }}">
                            <label for="ammount" class="col-md-4 control-label">Jumlah ( Rp )</label>

                            <div class="col-md-6">
                                <input id="ammount" type="text" class="form-control" name="ammount" value="{{$data->ticket * 30000}}" required autofocus>

                                @if ($errors->has('ammount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ammount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                         <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            <label for="file" class="col-md-4 control-label">Bukti Transfer</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file" value="" required autofocus>

                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                     
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
        <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-success">
                <div class="panel-heading">Detail Pembayaran</div>

                <div class="panel-body">
                    <h4>DETAIL PEMBAYARAN</h4>
                    <div class="row">
                    	<div class="col-md-6">Harga ( {{$data->ticket}} Tiket ) </div>
                    	<div class="col-md-2">Rp </div>
                    	<div class="col-md-4">{{$data->ticket * 30000}} </div>
                    </div>
                    <br />
                     <div class="row">
                    	<div class="col-md-6"><strong>Total Pembayaran</strong> </div>
                    	<div class="col-md-2">Rp </div>
                    	<div class="col-md-4"><strong>{{$data->ticket * 30000}} </strong></div>
                    </div>
                </div>
            </div>
         </div>
        </div>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script src="{{ asset('vendor/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript">
$('#date').datepicker({
    format: "dd/mm/yyyy",
    autoclose: true,
    todayBtn: "linked",
});
</script>

@endsection
