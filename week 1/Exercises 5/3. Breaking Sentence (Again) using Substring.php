<?php

//Contoh Penggunaan Dengan Fungsi substr()
$string = "Wow JavaScript is so cool";
$firstWord = substr($string,0,3);
$secondWord = substr($string,4,10);
$thirdWord = substr($string,15,2);
$fourthWord = substr($string,18,2);
$fifthWord = substr($string,21,4);

 // First Word: wow
  echo "First Word: ".$firstWord."\n";

// Second Word: JavaScript
  echo "Second Word: ".$secondWord."\n";

// Third Word: is
  echo "Third Word: ".$thirdWord."\n";

// Fourth Word: so
  echo "Fourth Word: ".$fourthWord."\n";


// Fifth Word: cool
  echo "Fifth Word: ".$fifthWord."\n";

  


?>

