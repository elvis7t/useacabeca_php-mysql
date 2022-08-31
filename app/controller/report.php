<?php
require_once('../config/menu.php');
?>
<body>
    <div class="d-flex justify-content-center">
        <h1>Aliens abduted Me - Report an Abduct</h1>    
    </div>
    <div class="container">
    <?php
    require_once('../model/conf.php');
    // require_once( "../model/test_con.php.php");
    $name = $_POST['firstname'].' '.$_POST['lastname'];   
    $firstname = $_POST['firstname'];   
    $lastname = $_POST['lastname'];
    $whenithappened = $_POST['whenithappened'];   
    $howlong = $_POST['howlong'];   
    $howmany = $_POST['howmany'];   
    $aliendescription = $_POST['aliendescription'];   
    $whattheydid = $_POST['whattheydid'];   
    $fangspotted = $_POST['fangspotted'];   
    $email = $_POST['email'];   
    $other = $_POST['other'];   
 
            $dbc = mysqli_connect($host, $user, $pass, $database) or die("Couldn't connect to database'");
            // mysql_select_db($database, $dbc);
            $sql = "INSERT INTO `aliens_abduction` (`aa_firstname`, `aa_lastname`, `aa_whenithappened`, `aa_howlong`, `aa_howmany`, `aa_aliendescription`, `aa_whattheydid`, `aa_fangspotted`, `aa_email`, `aa_other`) 
            VALUES ('$firstname','$lastname','$whenithappened', '$howlong','$howmany','$aliendescription', '$whattheydid', '$fangspotted', '$email', 't');";
            
            if (mysqli_query($dbc, $sql)) {       
                echo '<div class="d-flex justify-content-center">';
                echo "<h4>New record created successfully</h4>";
                echo "</div>";
                echo "<br />";
          } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
          }
            mysqli_close($dbc);
         
    echo "<div class='form-group col-md-3 offset-md-5'>";            
    echo "<br />";
    echo '<b>Thanks for submitting the form.</b><br/>';
    echo '<b>You were abducted </b>'. $whenithappened.'<br/>';
    echo '<b>and were gone for </b>'. $howlong.'<br/>';
    echo '<b>Number of aliens </b>'. $howmany.'<br/>';
    echo '<b>Describe Them </b>'. $aliendescription.'<br/>';
    echo '<b>The aliens did this </b>'. $whattheydid.'<br/>';
    echo '<b>Was Fang there? </b>'. $fangspotted.'<br/>';
    echo '<b>Other Comments </b>'. $other.'<br/>';
    echo '<b>Your email address is </b>'. $email.'<br/>';
    echo '</div>';

    ?>
    </div>
</body>
<?php
require_once('../config/footer.php');
?>