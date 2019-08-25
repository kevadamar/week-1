<?php

$nilai = 1;

echo "Ganjil Genap\n\n";

for ($nilai; $nilai <= 100; $nilai++) {
    if ($nilai % 2 == 0) {
        echo "$nilai = genap\n";
    } else{
        echo "$nilai = ganjil\n";
    }
}

echo "\n\ncontoh - untuk pertambahan counter 2\n\n";

$nilai2 = 1;

for ($nilai2; $nilai2 <= 100; $nilai2++) {  

   if ($nilai2 == 1){
     echo '" "'."\n\n";
   }
   else if ($nilai2 % 3 == 0) {
        echo "$nilai2 = kelipatan 3\n\n";
    }
    else{
      echo '" "'."\n\n";
    }
}

echo "\n\ncontoh - untuk pertambahan counter 5\n\n";

$nilai3 = 1;

for ($nilai3; $nilai3 <= 100; $nilai3++) {
    if ($nilai3 == 1){
      echo '" "'."\n\n";
    }
    else if ($nilai3 % 6 == 0) {
        echo "$nilai3 = kelipatan 6\n\n";
    } else{
      echo '" "'."\n\n";
    }
}
  
echo "\n\ncontoh - untuk pertambahan counter 9\n\n";

$nilai4 = 1;

for ($nilai4; $nilai4 <= 100; $nilai4++) {
    if ($nilai4 == 1){
      echo '" "'."\n\n";
    }
    else if ($nilai4 % 10 == 0) {
        echo "$nilai4 = kelipatan 10\n\n";
    } else{
      echo '" "'."\n\n";
    }
}


?>

