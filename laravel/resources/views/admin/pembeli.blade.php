@extends('layouts.app')
@section('page-css')
<link rel="stylesheet" type="text/css" href="/vendor/fancybox/jquery.fancybox.css" media="screen" />
<style type="text/css">
	.peserta {
		font-size: 9pt!important;
		font-family: 'Open Sans',Sans-Serif!important;
	}
</style>
    <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
     <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
  
@endsection
@section('content')
<h3 style="margin-left:100px;">Pendaftar : {{count($data)}} </h3>
<div class="peserta table table-responsive">
<table id="example" class="peserta table display nowrap" width="100%">
	<thead>
	<tr>
		<th>#</th>
		<th>Check</th>
		<th>name</th>
		<th>email</th>
		<th>phonenumber</th>
		<th>ticket</th>
		<th>file</th>
	</tr>
	</thead>
	<tfoot>
	<tr>
		<td>#</td>
		<th>Check</th>
		<td>name</td>
		<td>email</td>
		<td>phonenumber</td>
		<td>ticket</td>
		<td>file</td>

	</tr>
	</tfoot>
	
	<tbody>
	@foreach($data as $c)
 		<tr>
	 		<td>{{$c->id}}</td>
	 			 		@if ($c->fix==1)
	 		<td>
			<form action="{{ url('admin/gantistatusbayar',$c->id) }}" method="POST">
			{{ csrf_field() }}
	 			<button type="sumbit" name="check"  class="btn btn-sm btn-success" > 
	 				Sudah
	 			</button>
			</form>
	 		</td>
	 		
	 		@else
	 		<td>
	 		<form action="{{url('admin/gantistatusbayar',$c->id)}}" method="POST" >
	 		{{ csrf_field() }}
	 			<button type="sumbit" name="check"  class="btn btn-sm btn-danger" > 
	 				Belum
	 			</button>
			</form>
	 		</td>
	 		@endif
	 		<td>{{$c->name}}</td>
	 		<td>{{$c->email}}</td>
	 		<td>{{$c->phonenumber}}</td>
	 		<td>{{$c->ticket}}</td>
	 		@if (empty($c->confirmationFrom))
	 		<td><td><span class="label label-danger">Belum</span></td></td>
	 		@else
	 		<td><a class="various" href="{{$c->confirmationFrom->file}}" ><span class="label label-success">Sudah</span></a>
	 		</td>
 			@endif
 		</tr>
 	@endforeach
 	</tbody>
</table>
</div>
@endsection
@section('page-script')
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/vendor/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
	  var table = $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
	  $(".various").fancybox({});
	} );

</script>
@endsection