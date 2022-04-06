<?php
namespace App\Helpers;

use App\Invoice;
use App\Models\SeleksiBangspesView;
use App\Models\SeleksiBangumView;
use App\Models\SeleksiDikmaView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\Exportable;

class FormPersonilExport implements FromCollection, WithHeadings
{
    use Exportable;
    public function __construct()
    {
    }

  /**
   * @return Builder
   */
  public function collection()
  {
        return collect([]);
  }

  /**
   * @return string
   */
  public function title(): string
  {
    return 'FORM PERSONIL';
  }

  /**
   * @return array
   */
  public function headings(): array
    {
        return [
            'NRP',
            'NAMA',
            'KETKATP',
            'KETKORPS',
            'TGLAHIR',
            'TPLAHIR',
            'JENKLAMIN',
            'TMTTNI',
            'TMTPA',
            'TMTBA',
            'TMTTA',
            'KETDIKTUK',
            'KETBANGUM',
            'JABATAN',
            'TMTJAB',
            'DSRJAB',
            'TGDSRJAB',
            'KDKAT'
        ];
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