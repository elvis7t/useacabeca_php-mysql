<?php
require_once('../model/conf.php');
require_once('../config/menu.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$sql ="INSERT INTO email_list (elist_firstname, elist_lastname, elist_email) VALUES('$firstname','$lastname','$email')";
mysqli_query($con, $sql)or die(mysqli_error());
echo'<div class="d-flex justify-content-center">';
echo "<h1>Cliente add</h1>";
echo'</div>';

mysqli_close($con);

require_once('../config/footer.php');
?>