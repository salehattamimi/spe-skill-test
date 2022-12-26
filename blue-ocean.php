<?php
function array_blue_ocean($angka1 = array(),$angka2){
 
$angka_search = array_search($angka2, $angka1);
 
if ($angka_search !== false) {

    // Hapus Array
    unset($angka1[$angka_search]);
}

foreach ($angka1 as $key => $val) {
    echo $val.',';
 }
}

array_blue_ocean([1,2,3,4,5,6],1);