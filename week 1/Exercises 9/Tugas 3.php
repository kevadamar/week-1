<?php

function processSentence($name,$age,$address,$hobby){

// Menampilkan "Nama saya Agus, umur saya 30 tahun, alamat saya di Jln. Malioboro, Yogjakarta, dan saya punya hobby yaitu gaming!"
  return "Nama saya $name, Umur saya $age, Alamat saya $address, dan saya punya hobby yaitu $hobby";
}

$name = "Agus";
$age = 30;
$address = "Jln. Malioboro, Yogjakarta";
$hobby = "gaming";

$fullSentence = processSentence($name,$age,$address,$hobby);


echo "$fullSentence";

?>

