<?php 
$nim = 'A';
$nama = "Muhammad Fadli";
$umur = 20;
$nilai = 85.25;
$status = TRUE;

echo "---BELAJAR TIPE DATA---<br><br>";
echo "Tipe Data Char :".$nim."<br>";
echo "Tipe Data String : $nama<br>";
echo "Tipe Data Int :".$umur;
print "<br>";
printf("Tipe Data Float : %.5f<br><br>",$nilai);
echo "Tipe Data Boolean :<br><br>";
if($status)
    echo "Status : Aktif";
else
    echo "status : Tidak Aktif";
?>