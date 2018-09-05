<html>

<a href="test.php">Return</a><br>

<?php
	$output = shell_exec("ovs-vsctl list interface s1-eth1"); //Set rule
	echo $output.<br>;
	$output = shell_exec("ovs-vsctl list interface s1-eth2"); //Set rule
	echo $output.<br>;
?>

</html>


