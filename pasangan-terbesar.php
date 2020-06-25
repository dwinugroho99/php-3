<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pasangan-terbesar</title>
</head>
<body>
<?php
function pasangan_terbesar($angka){
// kode di sini
$angka = "$angka";
$length = strlen($angka);
$puluhan = 0;
$satuan = 0;
for($i=0; $i<$length; $i++){
    if($angka[$i]>$puluhan){
        $puluhan = $angka[$i];
        $satuan = $angka[$i+1];
    }elseif($angka[$i]>$puluhan){
        if($angka[$i+1]>$satuan){
            $satuan = $angka[$i+1];
        }
    }
}
return "Pasangan Terbesar : ".(10*$puluhan+$satuan)."<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>
</body>
</html>