<?php
$output = "";
$output .= '
<div class="table-responsive">                        
    <table id="tabel_kegiatan" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="text-center" style="vertical-align: middle;">No</th>
            <th class="text-center" style="vertical-align: middle;">Barang</th>
            <th class="text-center" style="vertical-align: middle;">Kuantiti</th>
        </tr>
    </thead>
    <tbody>';
$no = 1;                            
foreach($detail as $d):
$kuantiti = ($d->barang->tersedia > $d->kuantiti) ? '<font color="green">'.$d->kuantiti.'</font>' : '<font color="red">'.$d->kuantiti.'</font>';
$output .=  '
        <tr>
            <td align="center">'.$no++.'</td>
            <td align="center">'.$d->barang->nama.'</td>
            <td align="center">'.$kuantiti.'</td>
        </tr>
';
endforeach;

if($data->status == 'ditolak'):
$output .= '
    </tbody>
    <tfoot>
        <tr><th colspan="3" class="text-center">Alasan Penolakan</th></tr>
        <tr><th colspan="3" class="text-center" style="color: red">'.$data->keterangan.'</th></tr>
    </tfoot>
    </table>
</div>';
else:
$output .= '
    </tbody>
    <tfoot>
        <th class="text-center" style="vertical-align: middle;">No</th>
        <th class="text-center" style="vertical-align: middle;">Barang</th>
        <th class="text-center" style="vertical-align: middle;">Kuantiti</th>
    </tfoot>
    </table>
</div>';
endif;


    
echo $output;
?>
