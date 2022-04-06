<?php
namespace App\Helpers;

use App\Invoice;
use App\Models\SeleksiBangspesView;
use App\Models\SeleksiBangumView;
use App\Models\SeleksiDikluView;
use App\Models\SeleksiDikmaView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\Exportable;

class FormExport implements FromCollection, WithHeadings
{
    use Exportable;
    protected $kegiatan;
    protected $opsdik;
    public function __construct($kegiatanId,$opsdik)
    {
        $this->kegiatan = $kegiatanId;
        $this->opsdik = $opsdik;
    }

  /**
   * @return Builder
   */
  public function collection()
  {
    switch($this->opsdik):
      case 'DIKMA':
        return SeleksiDikmaView::where('kegiatan_id',$this->kegiatan)->get();
        break;
      case 'BANGUM':
        return SeleksiBangumView::where('kegiatan_id',$this->kegiatan)->get();
        break;
      case 'BANGSPES':
        return SeleksiBangspesView::where('kegiatan_id',$this->kegiatan)->get();
        break;
      case 'DIKLU':
        return SeleksiDikluView::where('kegiatan_id',$this->kegiatan)->get();
        break;
    endswitch;
    
  }

  /**
   * @return string
   */
  public function title(): string
  {
    return 'FORM NILAI';
  }

  /**
   * @return array
   */
  public function headings(): array
    {
      switch($this->opsdik):
        case 'DIKMA':
            return [
              'ID Kegiatan',
              'No Test',
              'NRP',
              'PSI_NQ',
              'PSI_NK',
              'PSI_IP',
              'SMT_NM',
              'SMT_IP',
              'AKD_NM',
              'AKD_IP',
              'KES',
              'MI',
              'KESWA',
              'RIKMIN',
              'CATATAN',
          ];
          break;
        case 'BANGUM':
          return [
            'ID Kegiatan',
            'No Test',
            'NRP',
            'PSI_NQ',
            'PSI_NK',
            'PSI_IP',
            'SMT_NM',
            'SMT_IP',
            'AKD_NM',
            'AKD_IP',
            'BI_NM',
            'BI_IP',
            'KES',
            'MI',
            'RIKMIN',
            'CATATAN',
        ];
        case 'BANGSPES':
          return [
            'ID Kegiatan',
            'No Test',
            'NRP',
            'PSI_NQ',
            'PSI_NK',
            'PSI_IP',
            'JAS_NM',
            'JAS_IP',
            'AKD_NM',
            'AKD_IP',
            'BI_NM',
            'BI_IP',
            'APT_NM',
            'APT_IP',
            'KES',
            'MI / SC',
            'MIN',
            'CATATAN',
        ];
        break;
        case 'DIKLU':
          return [
            'ID Kegiatan',
            'No Test',
            'NRP',
            'BAHASA_TNI_AL',
            'BAHASA_MABES_TNI',
            'BAHASA_KEDUTAAN',
            'BAHASA_PUS_BAHASA_KEMHAN',
            'ADMIN_SC',
            'ADMIN_VISA',
            'CATATAN',
        ];
        break;
      endswitch;
    }

  /**
   * @return array
   */
  public function columnFormats(): array
  {
    return [
      'A' => NumberFormat::FORMAT_TEXT,
      'B' => NumberFormat::FORMAT_TEXT,
      'C' => NumberFormat::FORMAT_TEXT,
      'D' => NumberFormat::FORMAT_TEXT,
      'E' => NumberFormat::FORMAT_TEXT,
      'F' => NumberFormat::FORMAT_TEXT,
      'G' => NumberFormat::FORMAT_TEXT,
      'H' => NumberFormat::FORMAT_TEXT,
      'I' => NumberFormat::FORMAT_TEXT,
      'J' => NumberFormat::FORMAT_TEXT,
      'K' => NumberFormat::FORMAT_TEXT,
      'L' => NumberFormat::FORMAT_TEXT,
      'M' => NumberFormat::FORMAT_TEXT,
    ];
  }

}