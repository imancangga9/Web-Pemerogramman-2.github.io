<?php  
	$A = 123;
	function test(){
		global $A;
		echo "Nilai A dalam fungsi = $A </br>";
	}
	test();
	echo "Nilai A luar fungsi = $A </br>";


?>