<?php
$angka1 = array ('1', '2', '3', '4', '5', '6');

 
$angka2 = array_search('2', $angka1);
 
if ($angka2 !== false) {

    // Hapus Array
    unset($angka1[$angka2]);
}

foreach ($angka1 as $key => $val) {
    echo $val.',';
 }