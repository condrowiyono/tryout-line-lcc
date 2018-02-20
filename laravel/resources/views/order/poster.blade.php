@section('page-css')
<link rel="stylesheet" type="text/css" href="/vendor/fancybox/jquery.fancybox.css" media="screen" />
@endsection
<div class="panel panel-success">
    <div class="panel-heading">Tryout SBMPTN</div>

    <div class="panel-body">
        <a class="fancybox" rel="gallery1" href="/img/poster.png">
            <img src="/img/poster.png" alt="" class="img-responsive" width="100%" height="100%" />
        </a>
        <br/><strong>INFORMASI</strong>
        <div class="row">
            <div class="col-md-4">Nama Event</div>
            <div class="col-md-8">LINE TRYOUT SBMPTN 2017 SE-BANDUNG RAYA</div>
        </div>                    
        <div class="row">
            <div class="col-md-4">Penyelenggara</div>
            <div class="col-md-8">LINE LCC dan OCEAN Education</div>
        </div>
        <strong>PELAKSANAAN</strong>
        <div class="row">
            <div class="col-md-4">Tanggal</div>
            <div class="col-md-8">26 Maret 2017</div>
        </div>
    </div>
</div>
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