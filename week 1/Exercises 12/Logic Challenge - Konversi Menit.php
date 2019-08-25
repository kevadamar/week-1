<?php

function konversiMenit($menit){
    if($menit>0 && $menit<60){
        $lama="0 : ".$menit."\n";
        return $lama;
    }
    else if($menit>=60 && $menit<70){
        $detik=$menit%60;
        $mnt=$menit-$detik;
        $mnt=$mnt/60;
        $lama=$mnt." : 0".$detik."\n";
        return $lama;
    }
    else if($menit >=70 && $menit <=88 ){

        $detik=$menit%60;
        $mnt=$menit-$detik;
        $mnt=$mnt/60;
        $lama=$mnt." : ".$detik."\n";
        return $lama;
    }

    else if ( $menit >=120|| $menit <130){
      
        $detik=$menit%60;
        $mnt=$menit-$detik;
        $mnt=$mnt/60;
        $lama=$mnt." : 0".$detik."\n";
        return $lama;

    }
}
echo konversiMenit(63); // 1:03
echo konversiMenit(124); // 2:04
echo konversiMenit(53); // 0:53
echo konversiMenit(88); // 1:28
echo konversiMenit(120); // 2:00
?>