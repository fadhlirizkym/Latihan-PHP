<?php
// readline membaca garis untuk command line di interface users
 $angka1 = readline('Masukan Angka 1 : ');
 $angka2 = readline(' masukan angka 2 :');
 $kalkulasi = readline("masukan aritmatika:");

 $array = ["+","-","*","/"];
  

 	// is numeric adalah untuk mengecek apakah itu type data integer / angka
 	// in_array adalah untuk mencari apakah data di array ada atau tidak
 	// and or not equals
 	// And = &&
 	// or = ||

 	if (is_numeric($angka1)  && is_numeric($angka2) && in_array ($kalkulasi,$array)) {
        if ($kalkulasi == "+") {
          $result = $angka1 + $angka2;
        }elseif ($kalkulasi == "-") {
 		$result = $angka1 - $angka2;
 	}elseif ($kalkulasi == "*") {
 		$result = $angka1 * $angka2;
 	}elseif ($kalkulasi == "/") {
 		$result = $angka1 / $angka2;
 	}
   
 	}else{
 		$result = "angka mesti bertipe integer dan aritmatika (+ - / *)";
 	}
 	echo $result;