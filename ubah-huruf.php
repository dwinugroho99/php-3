<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
function ubah_huruf($string){
//kode di sini

    for ($i=0; $i < strlen($string); $i++) { 
        $string[$i] = chr(ord($string[$i])+1);
    }
    echo $string . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>    
</body>
</html>