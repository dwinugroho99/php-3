<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tukar besar kecil</title>
</head>
<body>
<?php
function tukar_besar_kecil($string){
//kode di sini
for ($i=0; $i < strlen($string); $i++) { 
    # code...
    $kodestring = ord($string[$i]);
    if($kodestring >= 65 && $kodestring <=90){
        $string[$i] = chr($kodestring+32);
    } elseif ($kodestring >= 97 && $kodestring <=122){
        $string[$i] = chr($kodestring-32);
    }
}
return "$string<br>";

}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>    
</body>
</html>