<?php
require_once("../model/conf.php");
require_once("../config/menu.php");
echo'<div class="d-flex justify-content-center">';
echo "<h1>E-mail Delected</h1>";
echo'</div>';

$email = $_POST['email'];
$sql = "DELETE FROM elvis_store WHERE elist_email = '$email'";
mysqli_query($con, $sql)or die(mysqli_error($con));
mysqli_close($con);

require_once('../config/footer.php');

?>