<?php

namespace App\Helpers;

use DateTime;
use Hashids\Hashids;

class Helper
{
    public const OPSDIK_ID_DIKMA = "48428e68-364d-4956-84c7-67e14512241c";
    public const OPSDIK_ID_BANGUM = "19cce4a1-337c-4e07-972b-3b822574cab3";
    public const OPSDIK_ID_BANGSPES = "fd556ae7-fbbf-47a2-b20f-629e622fa2ef";
    public const OPSDIK_ID_DIKLU = "e3473502-983d-49e8-b72e-e944059fe344";

    public static function encodeOutput($datas)
    {
        $hashids = new Hashids('', 10, 'abcdefghijklmnopqrstuvwxyz');
        $complete = [];
        foreach ($datas as $data) {
            $temp = $data;
            $temp['id'] = $hashids->encode($temp['id']);
            array_push($complete, $temp);
        }
        return (collect((object) $complete))->paginate();
    }

    public static function formatRupiah($int)
    {
        return "Rp. " . number_format($int, 0, ',', '.');
    }

    public static function tanggal_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
     
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }

    public static function detectDelimiter($csvFile)
    {
        $delimiters = [";" => 0, "," => 0, "\t" => 0, "|" => 0];

        $handle = fopen($csvFile, "r");
        $firstLine = fgets($handle);
        fclose($handle); 
        foreach ($delimiters as $delimiter => &$count) {
            $count = count(str_getcsv($firstLine, $delimiter));
        }

        return array_search(max($delimiters), $delimiters);
    }

    public static function abjad($inputan)
    {
        if(in_array(strtoupper($inputan),["A","B","C","D","E"])):
            $data = ["A" => 100, "B" => 80, "C" => 70, "D" => 60, "E" => 50];
            return $data[strtoupper($inputan)];
        else:
            return 0;
        endif;
        
    }

    public static function hitungUmur($tanggal_lahir){
        $birthDate = new DateTime($tanggal_lahir);
        $today = new DateTime("today");
        if ($birthDate > $today) { 
            exit("0 tahun 0 bulan 0 hari");
        }
        $y = $today->diff($birthDate)->y;
        $m = $today->diff($birthDate)->m;
        $d = $today->diff($birthDate)->d;

        return ["tahun" => $y, "bulan" => $m, "hari" => $d];
    }
    
    public static function jsonToCSV($json, $csvFilePath = false, $boolOutputFile = false)
    {
        $strTempFile = "";
        // See if the string contains something
        if (empty($json)) { 
            die("The JSON string is empty!");
        }
        
        // If passed a string, turn it into an array
        if (is_array($json) === false) {
            $json = json_decode($json, true);
        }
        
        // If a path is included, open that file for handling. Otherwise, use a temp file (for echoing CSV string)
        if ($csvFilePath !== false) {
            $f = fopen($csvFilePath,'w+');
            if ($f === false) {
            die("Couldn't create the file to store the CSV, or the path is invalid. Make sure you're including the full path, INCLUDING the name of the output file (e.g. '../save/path/csvOutput.csv')");
            }
        }
        else {
            $boolEchoCsv = true;
            if ($boolOutputFile === true) {
            $boolEchoCsv = false;
            }
            $strTempFile = 'uploads/csvOutput' . date("U") . ".csv";
            $f = fopen($strTempFile,"w+");
        }
        
        $firstLineKeys = false;
        foreach ($json as $line) {
            if (empty($firstLineKeys)) {
            $firstLineKeys = array_keys($line);
            fputcsv($f, $firstLineKeys);
            $firstLineKeys = array_flip($firstLineKeys);
            }
            
            // Using array_merge is important to maintain the order of keys acording to the first element
            fputcsv($f, array_merge($firstLineKeys, $line));
        }
        fclose($f);
        
        // Take the file and put it to a string/file for output (if no save path was included in function arguments)
        if ($boolOutputFile === true) {
            if ($csvFilePath !== false) {
            $file = $csvFilePath;
            }
            else {
            $file = $strTempFile;
            }
            
            // Output the file to the browser (for open/save)
            if (file_exists($file)) {
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment; filename='.basename($file));
            header('Content-Length: ' . filesize($file));
            readfile($file);
            }
        }
        elseif ($boolEchoCsv === true) {
            if (($handle = fopen($strTempFile, "r")) !== FALSE) {
            while (($data = fgetcsv($handle)) !== FALSE) {
                echo implode(",",$data);
                echo "<br />";
            }
            fclose($handle);
            }
        }
        
        // Delete the temp file
        // unlink($strTempFile);
    }
}
