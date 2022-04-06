@extends('app')
@section("head")
    @include('layouts.head')
@endsection
@section("script")
    @include('layouts.script')
@endsection
@section('content')
<style>
    .fa-book:hover {
        color: blue;
    }
</style>
<div class="card ml-3 mt-3 mr-3 mb-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <center>
                            <h3 class="card-title" align="center">{{ strtoupper(Route::current()->getName()); }}</h3>
                        </center>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">                        
                        <table id="tabel_permintaan" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" style="vertical-align: middle;">No</th>
                                    <th class="text-center" style="vertical-align: middle;">Peminta</th>
                                    <th class="text-center" style="vertical-align: middle;">Tanggal Permintaan</th>
                                    <th class="text-center" style="vertical-align: middle;">Status</th>
                                    <th class="text-center" style="vertical-align: middle;">Info</th>
                                    <th class="text-center" style="vertical-align: middle;">Aksi</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($permintaan as $p)
                                <tr>
                                    <td align="center">{{ $no++ }}</td>
                                    <td align="center">{{ $p->peminta->nama }}</td>                                    
                                    <td align="center">{{ $p->tanggal_permintaan }}</td>                                    
                                    <td align="center">
                                    @if($p->status == 'diterima')
                                       {!!   "<font color='green'>".$p->status."</font>"  !!}
                                    @elseif($p->status == 'ditolak')
                                       {!!   "<font color='red'>".$p->status."</font>"  !!}
                                    @elseif($p->status == 'dibatalkan')
                                       {!!   "<font color='red'>".$p->status."</font>"  !!}
                                    @else 
                                       {!!   "<font color='grey'>".$p->status."</font>"  !!}
                                    @endif
                                    </td>                                    
                                    <td align="center"><a id="{{ $p->id }}" class="btn btn-sm btn-info view_data"><strong>Detail</strong></a></td>                                    
                                    <td align="center">
                                    @if($p->status == 'diterima')
                                        {{ "-" }}
                                    @elseif($p->status == 'ditolak')
                                        {{ "-" }}
                                    @elseif($p->status == 'dibatalkan')
                                        {{ "-" }}
                                    @else 
                                        {!! "
                                        <a href='/permintaan/diterima?id=".$p->id."' class='btn btn-sm btn-success' onclick='return confirm(\" Anda yakin ingin menerima permintaan ini ? \")'><i class='fas fa-check'></i></a> 
                                        <a class='btn btn-sm btn-danger ditolak' id='".$p->id."'><i class='fas fa-times'></i></a>" !!}
                                    @endif
                                    </td>                                    
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th class="text-center" style="vertical-align: middle;">No</th>
                                <th class="text-center" style="vertical-align: middle;">Peminta</th>
                                <th class="text-center" style="vertical-align: middle;">Tanggal Permintaan</th>
                                <th class="text-center" style="vertical-align: middle;">Status</th>
                                <th class="text-center" style="vertical-align: middle;">Info</th>
                                <th class="text-center" style="vertical-align: middle;">Aksi</th>  
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="detail" style="overflow-y: auto;">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="dataModalDitolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/permintaan/ditolak" method="get">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Permintaan (dibatalkan)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="ditolak_detail" style="overflow-y: auto;">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Lanjutkan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script_tambahan')
<script>
    $(document).ready(function() {
        $('.view_data').click(function() {
            var id = $(this).attr("id");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                , url: "/permintaan/detail"
                , method: "post"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , "id": id
                }
                , success: function(data) {
                    $('#detail').html(data);
                    $('#dataModal').modal("show");
                    console.log(data);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.ditolak').click(function() {
            $("#ditolak_detail").empty();
            var id = $(this).attr("id");
            $('#ditolak_detail').append(`<input type="hidden" name="id" value="${id}"<br><div class="form-group"><label>Alasan Penolakan</label><input class="form-control" name="keterangan" type="text" required></div>`);
            $('#dataModalDitolak').modal("show");
        });
    });
</script>
<script>
    $(document).ready( function () {
        $('#tabel_permintaan').DataTable();
    } );
  </script>
@endsection