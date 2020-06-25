<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>palindrome-angka</title>
</head>
<body>
<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  echo ($angka + 1)."<br>";
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>
</body>
</html>