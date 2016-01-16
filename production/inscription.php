<?php
include "connect.inc.php";  /// Connection bdd

 if (isset($_POST['firstName'])) {
 	echo $_POST['firstName'];
 	echo "-->".md5($_POST['firstName']);
 	}
?>