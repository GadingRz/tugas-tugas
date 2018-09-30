<?php
$nim="184714987";
$nama="Chotimatul Musyarofah";
$umur="23";
$nilai="82.25";
$status=true;
echo"NIM : ".$nim."<br>";
echo"Nama : ".$nama."<br>";
print "Umur : ".$umur;print "<br>";
printf("Nilai : %.3f <br>",$nilai);
if($status)
echo "Status : Aktif ";
else
echo "Status : Tidak Aktif";
$a = 10;
$b = 5;
$c = 6;
$d = 9;
$e = 11;
$f = 13;

echo "<p>10 ~ 5 ~ ", $a + $b / 2, "<br>";
echo "10 ~ 6 ~ ", ($a + $c - $d) /2, "<br>";
echo "10 ~ 6 ~ ", ($a + $c - $d)," ~ ",($c - ($a + $c -$d) /2 ) *2*$a,"<br>";
echo "11 ~ 6 ~ -6.5 ~ ", $a * $a + $c, "<br>";
echo "11 ~ 5 ~ ", ($a * $a + $b) /-10, "<br>";
echo "13 ~ 4 ~ ", ($c * $a + $b) /-10, "<br>"; 
echo "13 ~ 4 ~ ", ($a * $e) /10, "<br>";


?>