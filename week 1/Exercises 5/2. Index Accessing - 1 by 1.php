<?php

//Contoh Penggunaan Dengan Fungsi explode ()
$string = "Wow JavaScript is so cool";
$pecahString = explode(" ", $string);
 
for ( $i = 0; $i < count( $pecahString ); $i++ ) {
        if  ($i == 0){
                echo "First Word: $pecahString[0]" . "\n";
      } else if ($i == 1){
                echo "Second Word: $pecahString[1]" . "\n";
      } else if ($i == 2){
      echo "Third Word: $pecahString[2]" . "\n";
      } else if ($i == 3){
      echo "Fourth Word: $pecahString[3]" . "\n";
      } else if ($i == 4){
      echo "Fifth Word: $pecahString[4]" . "\n";
      }
}

?>