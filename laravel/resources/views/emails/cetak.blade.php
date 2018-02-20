Selamat, Anda telah melakukan pendaftaran Tryout LINExOCEAN dan menyelesaikan pembayaran.
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

<p><strong>CETAK KARTU</strong>
<br/>Silakan cetak kartu tanda peserta tryout Anda disini
<br/><a href="{{url('tryout.line-lcc.com/pdf',{{$dataparticipant[0]->participantFrom->name}})}}"> DISINI </a>
</p>