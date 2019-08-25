<?php


$nama = "Samuel";
$peran = "Ksatria";

if ($nama === "" && $peran ===""){
  
  echo "Nama tidak boleh kosong." ;
  
} else if ($nama !== "" && $peran === "") {
  
  echo "Hai $nama, Pilih peranmu untuk memulai game" ;
  
} else if ($peran !== "" && $nama === ""){
  
  echo "Nama tidak boleh kosong" ;
  
}  else if ($peran === "Ksatria" || $peran === "Tabib" || $peran === "Penyihir"){
      if ($nama !== "" && $peran === "Ksatria") {
      
      echo "Selamat datang di Dunia Proxytia, $nama\nHalo Ksatria $nama, kamu dapat menyerang dengan senjatamu!" ;
      
    } else if ($nama !== "" && $peran === "Tabib") {
      
      echo  "Selamat datang di Dunia Proxytia,$nama Halo Tabib $nama, kamu akan membantu temanmu yang terluka." ;
      
    } else if ($nama !== "" && $peran === "Penyihir") {
      
      echo "Selamat datang di Dunia Proxytia, $nama Halo Penyihir $nama, ciptakan keajaiban yang membantu kemenanganmu!";
      
    }
} else {
  echo "Anda memilih peran $peran.\nDimohon pilih lah peran sesuai dengan keterangan berikut : \nKsatria, Tabib, dan Penyihir.";
}

?>