
Selamat, Anda telah melakukan pendaftaran Tryout LINExOCEAN.
<br> Berikut adalah data pemesanan Anda:
<div>
	<strong>DETAIL PEMESANAN </strong>
	<table>
	    <tr>
	    	<td>Nama</td>                
	    	<td>{{$dataparticipant[0]->participantFrom->name}} </td>
	    </tr>
	    <tr>
	    	<td>Email</td>                
	    	<td>{{$dataparticipant[0]->participantFrom->email}} </td>
	    </tr>
	    <tr>
	    	<td>Phone Number</td>                
	    	<td>{{$dataparticipant[0]->participantFrom->phonenumber}} </td>
	    </tr>
	</table>
	<br/>
</div>
<br/> Berikut adalah data peserta

@php ($i = 1)
@foreach ($dataparticipant as $c)
<strong>DETAIL PESERTA {{$i}}</strong>
		<table>
	    <tr>
	    	<td>Nama</td>                
	    	<td>{{$c->name}} </td>
	    </tr>
	    <tr>
	    	<td>Sekolah</td>                
	    	<td>{{$c->school}} </td>
	    </tr>
	    <tr>
	    	<td>Alamar</td>                
	    	<td>{{$c->address}} </td>
	    </tr>
	    </table>
@php ($i++)
@endforeach

<p>
<strong> INFORMASI PEMBAYARAN </strong>
<br/>Silakan lakukan pembayaran 
<br><strong>DETAIL PEMBAYARAN </strong>
<table>
	<tr>
		<td width="60%">Harga ( {{($i-1)}} Tiket ) </td>
		<td width="5%">Rp</td>
		<td width="35%">{{($i-1) * 30000}}</td>
	</tr>
	<tr>
		<td width="60%"><strong>Total Pembayaran</strong> </td>
		<td width="5%">Rp</td>
		<td width="35%">{{($i-1) * 30000}}</td>
	</tr>
 </table>
</p>

<p>
<strong>KONFIRMASI PEMBAYARAN</strong>
<br>
Klik link dibawah ini untuk melakukan konfirmasi pembayaran
<a href="tryout.line-lcc.com/order/confirm/{{$dataparticipant[0]->participantFrom->id}}">tryout.line-lcc.com/order/confirm/{{$dataparticipant[0]->participantFrom->id}}</a>
</p>

<p>
Terima kasih atas perhatiannya
</p>