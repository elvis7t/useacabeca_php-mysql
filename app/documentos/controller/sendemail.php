<?php
require_once('../model/conf.php');
require_once('../config/menu.php');
$from = 'elvis7t@gmail.com';
$subject = $_POST['validationCustom01'];
$text = $_POST['validationCustom02'];
echo'<body>';
echo'<div class="d-flex justify-content-center">';

echo $subject."<br />";
echo $text."<br />";

$sql ="SELECT * FROM email_list";
$result = mysqli_query($con, $sql)or die(mysqli_error());
// $rows[] = $row;
while ($row = mysqli_fetch_assoc($result)){

 echo  $firstname = $row['elist_firstname'];
 echo  $lastname = $row['elist_lastname']."<br />";

    // $msn = "Dear $first_name $lastname, \n $text";
    // $to = $row['elist_email'];
    // mail($to, $subject, $msg.'from'. $from);
    // echo 'Email send to:'.$to.'</br>;
    
}
echo'</div>';
mysqli_close($con);

require_once('../config/footer.php');
?>