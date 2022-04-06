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
                        <table id="tabel_lokasi" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" style="vertical-align: middle;">No</th>
                                    <th class="text-center" style="vertical-align: middle;">Nama</th>
                                    {{-- <th class="text-center" style="vertical-align: middle;">Aksi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($data as $d)
                                <tr>
                                    <td align="center">{{ $no++ }}</td>
                                    <td align="center">{{ $d->nama }}</td>                                    
                                    {{-- <td align="center"><a id="{{ $d->id }}" class="btn btn-sm view_data"><i class="fas fa-edit"></i></a> </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <th class="text-center" style="vertical-align: middle;">No</th>
                                <th class="text-center" style="vertical-align: middle;">Nama</th>
                                {{-- <th class="text-center" style="vertical-align: middle;">Aksi</th> --}}
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="dataModal" class="modal fade" style="padding: 0 !important;">
    <div class="modal-dialog" style="width: 100%; max-width: none; height: 100%; margin: 0;">
        <div class="modal-content" style="height: 100%; border: 0; border-radius: 0;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detail Personil</h4>
            </div>
            <div class="modal-body" id="detail" style="overflow-y: auto;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script_tambahan')
<script>
    $(document).ready( function () {
        $('#tabel_lokasi').DataTable();
    } );
  </script>
@endsection