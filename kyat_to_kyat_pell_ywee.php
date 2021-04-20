<?php
include("shwe_converter.php");
if(isset($_POST['kyat'])){
	$kyat = $_POST['kyat'];
	$kyat = kyat_to_kyat_pell_ywee($kyat);
	echo "Program output: ";
	echo $kyat['kyat']."Kyat ";
	echo $kyat['pell']."Pell ";
	echo $kyat['ywee']."Yeww";
}
?>
<form action="kyat_to_kyat_pell_ywee.php" method="POST">
	Kyat: <input type="text" name="kyat"/>
	<input type="submit"/>
</form>