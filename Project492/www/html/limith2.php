<html>

<a href="test.php">Return</a><br>
<?php
	$output = shell_exec("ovs-vsctl set interface s1-eth2 ingress_policing_rate=1000"); //Set rule
	echo $output;
?>

</html>


