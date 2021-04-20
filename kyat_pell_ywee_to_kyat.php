<?php
include("shwe_converter.php");
if(isset($_POST['kyat'])&&isset($_POST['pell'])&&isset($_POST['ywee'])){
	$kyat = $_POST['kyat'];
	$pell = $_POST['pell'];
	$ywee = $_POST['ywee'];
	echo "Program output: ".kyat_pell_ywee_to_kyat($kyat,$pell,$ywee);
}
?>
<form action="kyat_pell_ywee_to_kyat.php" method="POST">
	Kyat:<input type="text" name="kyat"/>
	Pell:<input type="text" name="pell"/>
	Ywee:<input type="text" name="ywee"/>
	<input type="submit"/>
</form>