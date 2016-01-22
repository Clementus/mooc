<?php
include "connect.inc.php";  /// Connection bdd

echo "incription.php";
 if (isset($_POST['firstName'])) {
 	echo $_POST['firstName'];
 	echo "-->".md5($_POST['firstName']);
 	}
?>