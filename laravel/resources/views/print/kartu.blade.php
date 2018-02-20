<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
/*  KOLOM  */
/*  PERSIAPAN UNTUK KOLOM  */
.section {
	clear: both;
	display: block;
}
table {
  border-collapse: collapse;
}

.tipis {
  border: 1px solid #999;
}

.col {
	display: block;
	float:left;
	margin: 1% 2.3% 0 0;
}

/*  SATUIN  */
.group:before, .group:after { 
	content:""; display:table; 
}
.group:after { 
	clear:both;
}

.u12 {
	width: 96%;
}
.u11 {
	width: 89%;
}
.u9 {
	width: 72%;
}
.u8 {
	width: 64%;
}
.u6 {
	width: 47.5%;
}
.u4 {
	width: 31%
}
.u3 {
	width: 22.6%;
}
.u2 {
	width: 14%;
}
.u1 {
	width: 7%; 
}
	.penuh {
    	width: 100%;
    }
    .border-line{
    	border: solid 1px black;
    	margin: 4px;
    }
    .border-tipis{
    	border: solid 1px #cccccc;
    	margin: 4px;
    	padding: 5px;
    }

    body {
    	font-size: 10pt;
    	font-family: Arial;
    }
    .enter {
    	page-break-after: always;
    }
</style>
<style tyle="text/css" media="print">
    body {
    	font-size: 10pt;
    }
	@page
	{
		size: landscape;
		margin: 2cm;
	}
   @media print
   {
      p.bodyText {font-family:georgia, times, serif;}
   }
   

    .judul {color: #2980b9;}

}

</style>
</head>
<body>
@foreach($data as $c)
<div class="enter wraped">
<div class="section group" >
<div class="col u6">
		
		<div class="border-line">
			<table>
				<tr>
					<td width="20%">
					<img src="img/logo-01.png">
					</td>
					<td>
						KARTU TANDA PESERTA
						<br>TRYOUT SBMPTN
						<br>LINE LEARNING AND CULTURAL CENTER x OCEAN EDUCATION
					</td>
					<td width="20%">
					
					</td>
				</tr>
			</table>
		</div>
		<div class="border-tipis">
			<table>
				<tr>
					<td class="30%"><strong>NOMOR PESERTA</strong></td>
					<td class="5%">:</td>
					<td>{{$c->id}}</td>
				</tr>
				<tr>
					<td class="30%"><strong>NAMA PESERTA</strong></td>
					<td class="5%">:</td>
					<td>{{$c->name}}</td>
				</tr>
				<tr>
					<td class="30%"><strong>SEKOLAH</strong></td>
					<td class="5%">:</td>
					<td>{{$c->school}}</td>
				</tr>
				<tr>
					<td class="30%"><strong>KELOMPOK UJIAN</strong></td>
					<td class="5%">:</td>
					<td>SAINTEK</td>
				</tr>
			</table>
			
		</div>
		<div class="border-tipis">
			<table>
				<tr>
					<td class="30%"><strong>ALAMAT</strong></td>
					<td class="5%">:</td>
					<td>{{$c->address}}</td>
				</tr>
				<tr>
					<td class="30%">TELEPON</td>
					<td class="5%">:</td>
					<td>{{$c->phonenumber}}</td>
				</tr>
			</table>			
		</div>
		<div class="border-tipis">
			<table class="tipis" width="100%">
				<tr class="tipis"  align="center" style="font-weight: bold;">
					<td class="tipis"  width="15%"><strong>HARI & TGL</strong></td>
					<td class="tipis"  width="30%">WIB</td>
					<td class="tipis" >KEGAITAN</td>
				</tr>
				<tr class="tipis" >
					<td class="tipis"  rowspan="7">MINGGU, 27 APRIL 2017</td>
					<td class="tipis" >08.00-08.30</td>
					<td class="tipis" >MASUK RUANG UJIAN, MENGISI BIODATA</td>
				</tr>
				<tr class="tipis" >
					<td class="tipis" >08.30-10.15</td>
					<td class="tipis" >TES KEMAMPUAN DAN POTENSI AKADEMIK ( TKPA )</td>
				</tr>
				<tr class="tipis" >
					<td class="tipis" >10.15-10.45</td>
					<td class="tipis" >ISTIRAHAT</td>
				</tr>
				<tr class="tipis" >
					<td class="tipis" >10.45-11.00</td>
					<td class="tipis" >MASUK RUANG UJIAN, MENGISI BIODATA</td>
				</tr>
				<tr class="tipis" >
					<td class="tipis" >11.00-12.45</td>
					<td class="tipis" >TKD SAINTEK</td>
				</tr>
				<tr class="tipis" >
					<td class="tipis" >12.45-13.15</td>
					<td class="tipis" >ISTIRAHAT</td>
				</tr>
				<tr class="tipis" >
					<td class="tipis" >13.15-15.00</td>
					<td class="tipis" >PEMBAHASAN DAN PENGUMUMAN</td>
				</tr>
			</table>			
		</div>
		<div class="border-tipis" >
			<div>

				<strong>PERLENGKAPAN YANG HARUS DIBAWA PADA SAAT UJIAN</strong>
				<ul>
				<li> Kartu bukti pendaftaran ini
				</li>
				<li>Pensil 2B secukupnya, karet penghapus, peraut pensil ( jika diperlukan)</li>
				</ul>

			</div>
		</div>
</div>

<div class="col u6">
		<div class="border-tipis">
			<strong>ALAMAT PADA SAAT MENGIKUTI UJIAN</strong>
			<br/><strong>ALAMAT</strong> : _______________________________ 
			<br/>            _________________________________________
			<br/>TELEPON : _______________________________ 
		</div>
		<div class="border-tipis">
		<div>
			<strong>PILIHAN UNIVERSITAS</strong>
			<ol>
			<li> _______________________________ </li>
			<li> _______________________________ </li>
			<li> _______________________________ </li>
			</ol>
		</div>
		</div>
		<div class="border-tipis" style="height: 250px;">
		<div>
			<strong>LOKASI UJIAN</strong>
			<p>
					SMP - SMA PRIBADI BILINGUAL BOARDING SCHOOL BANDUNG
					<br/>Jl. PH.H. Mustofa No.41, Neglasari, Cibeunying Kaler, Kota Bandung, Jawa Barat 40124
				</p>
		
		</div>
		</div>
		<div class="border-tipis" >
			<div>

				<strong>PERNYATAAN</strong>
				<p>DENGAN INI SAYA MENYATAKAN BAHWA DATA YANG DI ISIKAN DI FORM PENDAFTARAN ADALAH BENAR.
				</p>

				<strong>TANDA TANGAN DAN NAMA TERANG : ________________________</strong>
			</div>
		</div>

</div>
</div>
<br/>
<br/>
<br/>
<br/>
@endforeach
</body>
</html>