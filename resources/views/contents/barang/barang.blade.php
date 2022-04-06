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
                        <table id="tabel_barang" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" style="vertical-align: middle;">No</th>
                                    <th class="text-center" style="vertical-align: middle;">Kode</th>
                                    <th class="text-center" style="vertical-align: middle;">Nama</th>
                                    <th class="text-center" style="vertical-align: middle;">Lokasi</th>
                                    <th class="text-center" style="vertical-align: middle;">Tersedia</th>
                                    <th class="text-center" style="vertical-align: middle;">Satuan</th>
                                    {{-- <th class="text-center" style="vertical-align: middle;">Aksi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($barang as $b)
                                <tr>
                                    <td align="center">{{ $no++ }}</td>
                                    <td align="center">{{ $b->kode }}</td>                                    
                                    <td align="center">{{ $b->nama }}</td>                                    
                                    <td align="center">{{ $b->lokasi->nama }}</td>                                    
                                    <td align="center"><a id="{{ $b->id }}" class="btn update" style="color: black" value="{{ $b->tersedia }}"><strong>{{ $b->tersedia }}</strong></a></td>                                    
                                    <td align="center">{{ $b->satuan }}</td>                                    
                                    {{-- <td align="center"><a id="{{ $d->id }}" class="btn btn-sm view_data"><i class="fas fa-edit"></i></a> </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th class="text-center" style="vertical-align: middle;">No</th>
                                <th class="text-center" style="vertical-align: middle;">Kode</th>
                                <th class="text-center" style="vertical-align: middle;">Nama</th>
                                <th class="text-center" style="vertical-align: middle;">Lokasi</th>
                                <th class="text-center" style="vertical-align: middle;">Tersedia</th>
                                <th class="text-center" style="vertical-align: middle;">Satuan</th>
                                {{-- <th class="text-center" style="vertical-align: middle;">Aksi</th> --}}
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="dataModalUpdate" class="modal fade" style="padding: 0 !important;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/barang/update" method="post">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Stok</h4>
                </div>
                <div class="modal-body" id="update_detail" style="overflow-y: auto;">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Lanjutkan</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script_tambahan')
<script>
    $(document).ready(function() {
        $('.update').click(function() {
            $("#update_detail").empty();
            let id = $(this).attr("id");
            let value = $(this).attr("value");
            $('#update_detail').append(`<input type="hidden" name="id" value="${id}"<br><div class="form-group"><label>Stok</label><input class="form-control" name="tersedia" type="number" value="${value}" required></div>`);
            $('#dataModalUpdate').modal("show");
        });
    });
</script>
<script>
    $(document).ready( function () {
        $('#tabel_barang').DataTable();
    } );
  </script>
@endsection