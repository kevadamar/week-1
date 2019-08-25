<?php
function konversiMenit($menit) {
    
    //menggunakan built-in function floor()
    $jam = floor($menit / 60);
    $mnt = $menit % 60;

    return $mnt <= 4 ? $jam.":0".$mnt."\n" : $jam .':' .$mnt."\n";
 }

// TEST CASES
echo konversiMenit(63); // 1:03
echo konversiMenit(124); // 2:04
echo konversiMenit(53); // 0:53
echo konversiMenit(88); // 1:28
echo konversiMenit(120); // 2:00

?>
