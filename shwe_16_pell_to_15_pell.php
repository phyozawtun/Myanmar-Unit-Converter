<?php
include("shwe_converter.php");
if(isset($_POST['kyat'])){
	$kyat = $_POST['kyat'];
	echo "Program output: ".shwe_16_pell_to_15_pell($kyat);
}
?>
<form action="shwe_16_pell_to_15_pell.php" method="POST">
	<input type="text" name="kyat"/>
	<input type="submit"/>
</form>