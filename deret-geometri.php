<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>deret-geometri</title>
</head>
<body>
<?php
function tentukan_deret_geometri($arr) {
// kode di sini
if(count($arr)<2){
    return "Deret Geometri : True<br>";
}
$nilai = $arr[1]/ $arr[0];
for ($i=0; $i < count($arr)-1; $i++) { 
    # code...
    if($nilai !== ($arr[$i+1] / $arr[$i])){
        return "Deret Geometri : False<br>";
    }
}
return "Deret Geometri : True<br>";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>
</body>
</html>