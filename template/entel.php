<?php

if (isset($_POST['number'])) { 
	if ($_POST['number'] != ""){
		$phone = $_POST['number'];
		$s1 = "123";
		$s2 = "0";
		$s3 = "58";
		$s4 = "0241";
		$s5 = $phone;
	 }
}
?>

<a href="tel:<?php echo $s1;?>+<?php echo $s2;?>+<?php echo $s3;?>+<?php echo $s4;?>+<?php echo $s5;?>" class="btn btn-success btn-block"> Callin</a>