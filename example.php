<?php
include("shwe_converter.php");
// Kyat Pell Ywee to Kyat
echo "<h1>Kyat Pell Ywee to Kyat</h1>";
echo "<p>1 Kyat 8 Ple 3 Ywee</p>";
$kyat = 1;
$pell = 8;
$ywee = 3;
echo "Program output: ".kyat_pell_ywee_to_kyat($kyat,$pell,$ywee);
echo "<br /><br /><br />";


// Kyat to Kyat Pell Ywee
echo "<h1>Kyat to Kyat Pell Ywee</h1>";
$kyat = 3.1234375;
$kyat = rand(100000,900000)/100000;
echo "<p>$kyat Kyat</p>";
$kyat = kyat_to_kyat_pell_ywee($kyat);
echo "Program output: ";
echo $kyat['kyat']."Kyat ";
echo $kyat['pell']."Pell ";
echo $kyat['ywee']."Yeww";
echo "<br /><br /><br />";


// 15 Pell to 16 Pell
echo "<h1>15 Pell to 16 Pell</h1>";
echo "<p>1.5234375 15 Pell</p>";
$kyat = 1.5234375;
echo "Program output: ".shwe_15_pell_to_16_pell($kyat);
echo "<br /><br /><br />";


// 16 Pell to 15 Pell
echo "<h1>16 Pell to 15 Pell</h1>";
echo "<p>1.43382353 16 Pell</p>";
$kyat = 1.43382353;
echo "Program output: ".shwe_16_pell_to_15_pell($kyat);
?>
