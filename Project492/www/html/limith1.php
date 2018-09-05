<html>

<a href="test.php">Return</a><br>

<?php
	$output = shell_exec("ovs-vsctl set port s1-eth1 qos=@newqos -- --id=@newqos create qos \
  type=linux-htb other-config:max-rate=100000"); //Set rule
	echo $output;
?>
</html>


