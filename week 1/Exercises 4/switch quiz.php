<?php

$hari = 1;
$bulan = 5;
$tahun = 1945;

switch($bulan){
  case 1:
    echo "$hari Januari $tahun";
  break;
  case 2:
    echo "$hari Februari $tahun";
  break;
  case 3:
    echo "$hari Maret $tahun";
  break;
  case 4:
    echo "$hari April $tahun";
  break;
  case 5:
    echo "$hari Mei $tahun";
  break;
  case 6:
    echo "$hari Juni $tahun";
  break;
  case 7:
    echo "$hari Juli $tahun";
  break;
  case 8:
    echo "$hari Agustus $tahun";
  break;
  case 9:
    echo "$hari September $tahun";
  break;
  case 10:
    echo "$hari Oktober $tahun";
  break;
  case 11:
    echo "$hari November $tahun";
  break;
  case 12:
    echo "$hari Desember $tahun";
  break;
  default:
  echo "bulan lewat";
  break;
}

?>