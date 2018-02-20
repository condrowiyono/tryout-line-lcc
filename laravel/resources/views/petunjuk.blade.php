@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-xs-8 col-md-offset-2">
  <h4>Petunjuk Pendaftaran <br>Peserta Tryout SBMPTN SAINTEK LINE x OCEAN 2017</h4>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">1. Isi Data Pemesanan</a></li>
    <li><a data-toggle="tab" href="#menu1">2. Isi Data Peserta</a></li>
    <li><a data-toggle="tab" href="#menu2">3. Pembayaran</a></li>
    <li><a data-toggle="tab" href="#menu3">4. Konfirmasi Pembayaran</a></li>
    <li><a data-toggle="tab" href="#menu4">5. Cetak Kartu</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h4>Isi data pemesanan</h4>
      <p>Pada bagian ini Anda diminta untuk melakukan pengisian data pemesanan. Hal ini berguna jika Anda ingin memesan lebih dari satu tiket untuk teman Anda dan melakukan pembayaran secara kolektif.</p>
      <p> Isilah data berikut ini </p>
      <ol>
      <li>Nama</li>
      <li>Email</li>
      <li>Nomor Hape, dan</li>
      <li>Jumlah tiket yang ingin Anda beli </li>
      </ol>
      <p> Klik <span class="btn btn-sm btn-primary">SIMPAN</span> dan lanjut ke langkah berikutnya</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h4> Isi Data Peserta</h4>
      <p>Pada bagian ini Anda diminta untuk melakukan pengisian data semua peserta yang ingin Anda daftarkan. Pengisian data peserta ini berulang sebanyak tiket yang anda beli.</p>
      <p>Pada bagian kanan terdapat total biaya yang harus Anda bayarkan.</p>
            <div class="row">
            <div class="col-md-6 ">
            <div class="panel panel-success">
                <div class="panel-heading">Detail Pembayaran</div>

                <div class="panel-body">
                    <h4>DETAIL PEMBAYARAN 
                    </h4>
                    <div class="row">
                        <div class="col-md-6">Harga ( {{(1)}} Tiket ) </div>
                        <div class="col-md-2">Rp </div>
                        <div class="col-md-4">{{(1) * 30000}} </div>
                    </div>
                    <br />
                     <div class="row">
                        <div class="col-md-6"><strong>Total Pembayaran</strong> </div>
                        <div class="col-md-2">Rp </div>
                        <div class="col-md-4"><strong>{{(1) * 30000}} </strong></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
      <p> Isilah data berikut ini </p>
      <ol>
      <li>Nama</li>
      <li>Email</li>
      <li>Nomor Hape</li>
      <li>Jenis Kelamin </li>
      <li>Sekolah, dan </li>
      <li>Alamat</li>
      </ol>
      <p> Klik <span class="btn btn-sm btn-primary">REGISTER</span> dan lanjut ke langkah berikutnya</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>3. Pembayaran</h3>
      <p>Selanjutnya Anda akan menerima e-mail berisi detail pendaftaran dan petunjuk pembayaran</p>
      <p>Lakukanah transfer uang ke rekening berikut : </p>
      <div class="row">
      <div class="col-md-6 ">
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
      </div>
      <p>Dengan biaya seperti terdapat pada kotak di kanan layar </p>
      <p>Jika sudah melakukan pembayaran. Silakan klik <span class="btn btn-sm btn-success">KONFIRMASI</span> di kanan bawah, untuk melakukan proses konfirmasi pembayaran</p>

    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>4. Konfirmasi Pembayaran</h3>
      <p>Isilah form di layar untuk melakukan proses konfirmasi pembayaran</p>
      <p> Isilah informasi berikut</p>
      <ol>
      <li>Tanggal transfer</li>
      <li>dari Bank apa</li>
      <li>atas nama</li>
      <li>berapa jumlah uangnya, dan </li>
      <li>lampirkan foto bukti transfer pada kotak yang disediakan</li> 
      </ol>
      <p>Selanjutnya, Admin akan melakukan verifikasi data konfirmasi</p>
      <p>Tunggulah email untuk proses selanjutnya selanjutnya</p>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>5 Cetak Kartu Tanda Peserta</h3>
      <p>Setelah semua langkah terpenuhi. Anda diminta untuk mencetak kartu Tanda Peserta, yang nantinya akan di bawa saat mengikuti tryout.</p>
    </div>
  </div>
</div>
</div>
</div>
@endsection
