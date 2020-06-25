<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>papan-catur</title>
</head>
<body>
<?php

function papan_catur($angka) {
// tulis kode di sini
    for($i=0; $i<$angka; $i++){
        if($i%2 == 0){
            for($j=0; $j<$angka; $j++){
                echo "# . ";
            }
        }else{
            for($k=0; $k<$angka-1; $k++){
                echo " . #";
            }
        }echo "<br>";
    }echo "<br>";
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>
</body>
</html>