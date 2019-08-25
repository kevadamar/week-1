<?php

function bandingkanAngka($angka1, $angka2) {
  if ($angka1 < $angka2){
    return "true\n";
  }
  else if ($angka1 > $angka2){
    return "false\n";
  }
  else if ($angka1 == $angka2){
    return "-1\n";
  }

  // switch($angka1 && $angka2){
  //   case ($angka1 < $angka2) :
  //   return "true\n";
  //   break;
  //   case ($angka1 > $angka2) :
  //   return "false\n";
  //   break;
  //   case ($angka1 == $angka2) :
  //   return "-1\n";
  //   break;
  //   default:
  //   return "hayoo";
  //   break;
  // }
}

// TEST CASES
echo bandingkanAngka(5, 8); // true
echo bandingkanAngka(5, 3); // false
echo bandingkanAngka(4, 4); // -1
echo bandingkanAngka(3, 3); // -1
echo bandingkanAngka(17, 2); // false

?>

