<?php


if (isset($_POST['number'])) { 
	if ($_POST['number'] != ""){
		$phone = $_POST['number'];
		$s1 = "0";
		$s2 = "58";
		$s3 = "0241";
		$s4 = $phone;
	 }
}
?>

<a href="tel:<?php echo $s1;?>+<?php echo $s2;?>+<?php echo $s3;?>+<?php echo $s4;?>" class="btn btn-success btn-block"> Callin</a>