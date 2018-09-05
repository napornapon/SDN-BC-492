<html>

<a href="test.php">Return</a><br>

<?php
	$output = shell_exec("ovs-vsctl list qos"); //Set rule
	echo $output;
?>

</html>


