<html>

<a href="test.php">Return</a><br>
<?php
	shell_exec("ovs-vsctl --all destroy qos"); //Remove rule
	echo $output;
?>

</html>


