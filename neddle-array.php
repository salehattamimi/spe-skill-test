<?php 
function strposa($angka1, $angka2=array(), $test=0) {
    $chr = array();
    foreach($angka2 as $r) {
            $res = strpos($angka1, $r, $test);
            if ($res !== false) $chr[$r] = $res;
    }
    if(empty($chr)) return false;
    return min($chr);
}
$string = '"biru" ';
$array  = array('merah', 'kuning', 'biru', 'hijau');

if (strposa($string, $array, 1)) {
    echo 'true';
} else {
    echo 'false';
}

echo array_search($string,$array);
?>