<pre>
<?php
if(isset($_GET['count'])){
	$count = $_GET['count'];
	$re = "/^[0-9]+$/";
	$cmd = "./stars $count";
	print($cmd);
	system("./stars $count");
} else {
	echo "Something is wrong";
}
?>
</pre>
