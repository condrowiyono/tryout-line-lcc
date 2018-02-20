@section('page-css')
<link rel="stylesheet" type="text/css" href="/vendor/fancybox/jquery.fancybox.css" media="screen" />
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="/vendor/fancybox/jquery.fancybox.css" media="screen" />
@endsection
@extends('layouts.app')

@section('content')
 <!-- Header -->
    <a name="about"></a>
    <div class="intro-header" style="margin-top:-100px ">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>{{ config('app.name', 'Laravel') }}</h1>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="{{url('/order/buyer')}}" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">DAFTAR</span></a>
                            </li>
                            <li>
                                <a href="{{url('/order/view')}}" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">CEK TIKET</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->
    <a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h4 class="section-heading">Siap Menghadapi Ujian SBMPTN 2017 </h4>
                    <p class="lead">Bayangkan Seperti Apa rasanya ketika anda Lolos SBMPTN 2017 di terima di Jurusan dan PTN yang adik idam-idamkan.  Salah satu faktor yang membuat peserta gagal dalam menghadapi SBMPTN, adalah Mereka tidak mengenal model-model Soal yang Keluar pada Ujian SBMPTN Tersebut. Lantas bagaimana cara mengetahui Model Soal yang akan keluar di SBMPTN 2017 nanti. Mau Tau …?</p>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h4 class="section-heading">Bagimana persiapan Anda</h4>
                    <p>Apakah saat ini Anda?</p>
                    <ol>
                    <li>Takut tidak lulus ujian SBMPTN 2017 ?</li>
                    <li>Kurang persiapan dalam menghadapi tes masuk SBMPTN ?</li>
                    <li>Ingin Mengetahui Skor/Grade Kelebihan/kekurangan Kemampuan Adik ?</li> 
                    <li>Ingin Mengetahui Model Soal & Prediksi SBMPTN 2017 ?</li>
                    <li>Ingin Lebih Siap & Memperbesar Peluang Lolos SBMPTN 2017 ?</li> 
                    </ol>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
     <div class="content-section-b">

        <div class="container">
            <div class="row">
                 <div class="col-md-4 ">
                        <a class="fancybox" rel="gallery1" href="/img/poster.png">
                            <img src="/img/poster.png" alt="" class="img-responsive" width="100%" height="100%" />
                        </a>
                </div>
                <div class="col-md-8">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h4 class="section-heading">Tryout adalah Solusi</h4>
                        <p>Tryout SBMPTN adalah salah satu solusinya. Kami membantu untuk berlatih dan mempersiapkan diri menghadapi segala macam ujian, dan dapat menjadi acuan bagi siswa untuk menilai diri nya dan meningkatkan kemampuan akademik yang dimiliki.
                        </p>
                        <p>
                        Tryout SBMPTN sebagai pusat pembelajaran soal + pembahasan memiliki beberapa keunggulan sehingga menjadi alasan kuat dapat membantu mewujudkan lulus seleksi ujian SBMPTN. 
                        </p>
                         <p>
                        Kesuksesan adalah impian semua orang, persiapan yang baik senantiasa dibutuhkan untuk meraih kesuksesan. Demikian halnya dalam ujian seleksi masuk, semua peserta ujian harus mempersiapkan dengan baik. Latihan soal yang terus menerus secara rutin akan berdampak baik terhadap kesiapan mental dan soal yang akan dihadapi. Selamat Mengikuti TryOut SBMPTN 2017</p>
                </div>
                
            </div>

        </div>
        <!-- /.container -->

    </div>
         <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h4 class="section-heading">Tempat</h4>
                       SMP - SMA PRIBADI BILINGUAL BOARDING SCHOOL BANDUNG
                    <br>Jl. PH.H. Mustofa No.41, Neglasari, Cibeunying Kaler, Kota Bandung, Jawa Barat 40124 
                </div>
                 <div class="col-md-4 ">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h4 class="section-heading">Pelaksanaan</h4>
                      MINGGU, 26 Maret 2017
                    <br>Jam 07.30 - Selesai 
                </div>    
                 <div class="col-md-4 ">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h4 class="section-heading">Biaya Pendaftaran</h4>
                      <strong>IDR 30 000</strong>
                </div>             
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
         <div class="content-section-b">

        <div class="container">
            <h4>Keuntungan Tryout</h4>
            <div class="row">
                <div class="col-md-4">
                    <div style="background: url('/img/ico-01.png') repeat scroll center center / cover ;padding-bottom:80%;"></div>
                    <p style="text-align: center">Menambah wawasan soal</p>   
                </div>
                <div class="col-md-4">
                <div style="background: url('/img/ico-02.png') repeat scroll center center / cover ;padding-bottom:80%;"></div>
                   <p style="text-align: center">Lebih memahami dan membiasakan diri menghadapi soal dan ujian SBMPTN Serta Menguji dan mengukur kemampuanmu dibanding sainganmu di seluruh Indonesia.</p> 
                </div>
                <div class="col-md-4">
                <div style="background: url('/img/ico-03.png') repeat scroll center center / cover ;padding-bottom:80%;"></div>
                   <p style="text-align: center">Memetakan kelebihan dan kelemahan kamu dalam mengerjakan soal SBMPTN sehingga kamu bisa tau apa saja yang harus kamu perbaiki

                    </p> 
                </div>
                
            </div>

        </div>
        <!-- /.container -->

    </div>
    <a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Tentang LINE-LCC:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a style="background-color:#3b5999; color: white;" target="_blank" href="https://www.facebook.com/page.linelcc" class="btn btn-default btn-lg"><span class="network-name">Facebook</span></a>
                        </li>
                        <li>
                            <a style="background-color:#55acee; color: white;" target="_blank" href="http://twitter.com/lcc_line" class="btn btn-default btn-lg"><span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a style="background-color:#00c300; color: white;" target="_blank" href="http://line.me/ti/p/@vxw8691a" class="btn btn-default btn-lg"><span class="network-name">LINE</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->
@endsection
@section('page-script')
 <script src="{{ asset('vendor/fancybox/jquery.fancybox.js') }}"></script>
 <script type="text/javascript">
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none'
    });
});
</script>
@endsection