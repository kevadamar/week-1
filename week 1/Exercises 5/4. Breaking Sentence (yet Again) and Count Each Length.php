<?php

//Contoh Penggunaan Dengan Fungsi substr() dan strlen()
$string = "Wow JavaScript is so cool";
$firstWord = substr($string,0,3);
$secondWord = substr($string,4,10);
$thirdWord = substr($string,15,2);
$fourthWord = substr($string,18,2);
$fifthWord = substr($string,21,4);

 // First Word: wow, with length: 3
  echo "First Word: ".$firstWord.", with length:"." ". strlen($firstWord)."\n";

// Second Word: JavaScript, with length: 10
  echo "Second Word: ".$secondWord.", with length:"." ". strlen($secondWord)."\n";

// Third Word: is, with length: 2
  echo "Third Word: ".$thirdWord.", with length:"." ". strlen($thirdWord)."\n";

// Fourth Word: so, with length: 2
  echo "Fourth Word: ".$fourthWord.", with length:"." ". strlen($fourthWord)."\n";


// Fifth Word: cool, with length: 4
  echo "Fifth Word: ".$fifthWord.", with length:"." ". strlen($fifthWord)."\n";

  


?>

