<?php
function xo($str) {
    // echo $str[2];
    $x = 0;
    $o = 0;
    $i = 0; //iterasi awal
    for (; $i <= strlen($str); $i++) {
        if ($str[$i] === "x") {

          return "true\n";
            $i++;
        } else if ($str[$i] === "o") {

          return "false\n";
            $o++;
        }
        //ternary operator
        // return $x === $o ? "true\n" : "false\n";
    }
    
}

// TEST CASES
echo xo("xoxoxo"); // true
echo xo("oxooxo"); // false
echo xo("oxo"); // false
echo xo("xxxooo"); // true
echo xo("xoxooxxo"); // true

?>
