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
                    <div class="float-right">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                            + Tambah Permintaan
                        </button>
                    </div>
                    <br><br>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Permintaan Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <p style="font-family: monospace; text-align: center; margin-top: 30px; margin-bottom: 0px">
                                <font color='green'><strong>Note : Anda tetap bisa melakukan permintaan jika stok "tersedia" kurang atau habis</strong></font>
                            </p>
                            <form action="/permintaan/tambah" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="container py-4">
                                    <div class="row">
                                        <div class="col-md-12 form_sec_outer_task border">
                                            <div class="row">
                                                <div class="col-md-3">
                                                <label>NIK Peminta</label>
                                                </div>
                                                <div class="col-md-3">
                                                <label>Nama</label>
                                                </div>
                                                <div class="col-md-3">
                                                <label>Departemen</label>
                                                </div>
                                                <div class="col-md-3">
                                                <label>Tanggal Permintaan</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 p-0">
                                                <div class="col-md-12 p-0">
                                                <div class="row">
                                                    <input type="hidden" name="peminta" id="peminta" readonly>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" autocomplete="off" name="nik" id="nik" class="form-control" required>
                                                    </div>                                                    
                                                    <div class="form-group col-md-3">
                                                        <input type="text" name="nama" id="nama" class="form-control" readonly required>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="text" name="departemen" id="departemen" class="form-control" readonly required>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <input type="datetime-local" name="tanggal_permintaan" id="tanggal_permintaan" class="form-control" required>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 p-0">
                                                <div class="col-md-12 p-0">
                                                <div class="row">
                                                    <ul class="list-group"></ul>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container py-4">
                                    <div class="row">
                                        <div class="col-md-12 form_sec_outer_task border">
                                        <div class="row">
                                            <div class="col-md-2">
                                            <label>Barang</label>
                                            </div>
                                            <div class="col-md-2">
                                            <label>Lokasi</label>
                                            </div>
                                            <div class="col-md-2">
                                            <label>Tersedia</label>
                                            </div>
                                            <div class="col-md-2">
                                            <label>Kuantiti</label>
                                            </div>
                                            <div class="col-md-2">
                                            <label>Satuan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <div class="col-md-12 form_field_outer p-0">
                                            <div class="row form_field_outer_row">
                                                <div class="form-group col-md-2">
                                                    <select name="barang[]" id="barang_1" class="form-control select-tu" onChange="isiDetail(this);">
                                                    <option value="" selected disabled>-- Silahkan Pilih --</option>
                                                    @foreach($barang as $b)
                                                        <option value="{{ $b->id }}">{{ $b->nama }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <input type="text" name="lokasi[]" id="lokasi_1" class="form-control" readonly required>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <input type="text" name="tersedia[]" id="tersedia_1" class="form-control" readonly required>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <input type="number" name="kuantiti[]" id="kuantiti_1" class="form-control" required>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <input type="text" name="satuan[]" id="satuan_1" class="form-control" readonly required>
                                                </div>
                                                <div class="form-group col-md-2 add_del_btn_outer">
                                                    <button class="btn_round add_node_btn_frm_field" title="Copy or clone this row">
                                                        <i class="fas fa-copy"></i>
                                                    </button>
                                                    <button class="btn_round remove_node_btn_frm_field" disabled>
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row ml-0 bg-light mt-3 border py-3">
                                        <div class="col-md-12">
                                            <button class="btn btn-outline-lite py-0 add_new_frm_field_btn">
                                            <i class="fas fa-plus add_icon"></i> Tambah Barang
                                            </button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>  
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
                                        {!! "<a href='/permintaan/dibatalkan?id=".$p->id."' class='btn btn-danger' onclick='return confirm(\" Anda yakin ingin membatalkan permintaan ini ? \")'>Batalkan</a>" !!}
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
@endsection
@section('script_tambahan')
<script>
    
</script>
<script>
    $(document).ready(function() {
        $('#nik').keyup(function() {
            let nik = $("#nik").val();
            $("#nama").val("");
            $("#departemen").val("");
            $("#peminta").val("");
            $('.list-group').empty();
            $('.list-group').css('display','block');
            if(nik)
            { 
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    , url: "/peminta/cari"
                    , method: "post"
                    , data: {
                        "_token": "{{ csrf_token() }}"
                        , "nik": nik
                    }
                    , success: function(data) {
                        $.each(data, function(key, value){
                            let src_str  = `<li class="list-group-item">                            
                                        <a href="#" id="${value.id}" class="list_peminta"><font color='black'>${value.nik} - ${value.nama}</font></a>
                                        </li>`;
                            // nik = nik.replace(/(\s+)/,"(<[^>]+>)*$1(<[^>]+>)*");
                            // let pattern = new RegExp("("+nik+")", "gi");
                            // src_str = src_str.replace(pattern, "<mark>$1</mark>");
                            // src_str = src_str.replace(/(<mark>[^<>]*)((<[^>]+>)+)([^<>]*<\/mark>)/,"$1</mark>$2<mark>$4");
                            //     $(this).attr("rel", "some_value");
                            $('.list-group').append(src_str);
                        });
                        console.log(data);
                    }
                });
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.list-group').on('click', '.list_peminta', function() {
            let id = $(this).attr("id");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                , url: "/peminta/detail"
                , method: "post"
                , data: {
                    "_token": "{{ csrf_token() }}"
                    , "id": id
                }
                , success: function(data) {
                    console.log(data);
                    $("#nama").val(data.nama);
                    $("#departemen").val(data.departemen.nama);
                    $("#nik").val(data.nik);
                    $("#peminta").val(data.id);
                    $(".list-group").empty();
                }
            });
        });
    });
</script>
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
<script type="text/javascript">
    function isiDetail(detail)
    {
        console.log('Changed option value ' + detail.value);
        console.log('Changed option text ' + $(detail).find('option').filter(':selected').text());
        console.log('Changed option Id ' + $(detail).attr("id"));

        var id = detail.value;
        var pecahan = $(detail).attr("id");
        var idx = pecahan.split("_");
        var target = idx[1];

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            , url: "/barang/detail"
            , method: "post"
            , data: {
                "_token": "{{ csrf_token() }}"
                , "id": id
            }
            , success: function(data) {
                $(`#lokasi_${target}`).val(data.lokasi.nama);
                $(`#tersedia_${target}`).val(data.tersedia);
                $(`#satuan_${target}`).val(data.satuan);
                console.log(data);
            }
        });
    }

    $(document).ready(function () {
        $("body").on("click", ".add_new_frm_field_btn", function () {
        console.log("clicked");
        var index = $(".form_field_outer").find(".form_field_outer_row").length + 1;
        $(".form_field_outer").append(`
        <div class="row form_field_outer_row">
            <div class="form-group col-md-2">
                <select name="barang[]" id="barang_${index}" class="form-control select-tu" onChange="isiDetail(this);">
                <option value="" selected disabled>-- Silahkan Pilih --</option>
                @foreach($barang as $b)
                    <option value="{{ $b->id }}">{{ $b->nama }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="lokasi[]" id="lokasi_${index}" class="form-control" readonly required>
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="tersedia[]" id="tersedia_${index}" class="form-control" readonly required>
            </div>
            <div class="form-group col-md-2">
                <input type="number" name="kuantiti[]" id="kuantiti_${index}" class="form-control" required>
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="satuan[]" id="satuan_${index}" class="form-control" readonly required>
            </div>
            <div class="form-group col-md-2 add_del_btn_outer">
                <button class="btn_round add_node_btn_frm_field" title="Copy or clone this row">
                    <i class="fas fa-copy"></i>
                </button>
                <button class="btn_round remove_node_btn_frm_field" disabled>
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>
        </div>
      `);

        $(".form_field_outer")
          .find(".remove_node_btn_frm_field:not(:first)")
          .prop("disabled", false);
        $(".form_field_outer")
          .find(".remove_node_btn_frm_field")
          .first()
          .prop("disabled", true);
      });
    });

    ///======Clone method
    $(document).ready(function () {
      $("body").on("click", ".add_node_btn_frm_field", function (e) {
        var index = $(e.target).closest(".form_field_outer").find(".form_field_outer_row").length + 1;
        var cloned_el = $(e.target).closest(".form_field_outer_row").clone(true);

        $(e.target).closest(".form_field_outer").last().append(cloned_el).find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false);
        $(e.target).closest(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);

        //change id
        $(e.target).closest(".form_field_outer").find(".form_field_outer_row").last().find("input[type='text']").attr("id", "mobileb_no_" + index);
        $(e.target).closest(".form_field_outer").find(".form_field_outer_row").last().find("select").attr("id", "no_type_" + index);

        console.log(cloned_el);
        //count++;
      });
    });

    $(document).ready(function () {
      //===== delete the form fieed row
      $("body").on("click", ".remove_node_btn_frm_field", function () {
        $(this).closest(".form_field_outer_row").remove();
        console.log("success");
      });
    });
  </script>
<script>
    $(document).ready( function () {
        $('#tabel_permintaan').DataTable();
    } );
  </script>
@endsection