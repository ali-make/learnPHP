<?php 
/**
 * Echo digunakan untuk menampilkan output di layar
 * echo bisa menggunakan html didalam kutip
 */
echo "<h1>PHP is Fun!</h1>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters";
/**
 * Juga bisa menampilkan variabel
 */
$text1 = "Learn PHP";
$text2 = "internet.com";
$x = 3;
$y = 1;

echo "<h2>" . $text1 . "</h2>";
echo "Study PHP at " . $text2 . "<br>";
echo $x + $y;
?>