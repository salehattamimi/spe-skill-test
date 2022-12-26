<?php
$angka = $_GET['angka'];
function angka_narsis(int $nomor): bool {
  $arr_nomor   = str_split($nomor);
  $nomor_length = count($arr_nomor);
  $sum = 0;

  foreach($arr_nomor as $n){
    $sum += pow((int)$n, $nomor_length);
  }	
	
  return $sum==$nomor;
}

if(angka_narsis($angka)){
    echo "true";
}else{
    echo "false";
}
?>