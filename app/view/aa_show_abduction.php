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
    extract($_GET);
            
    $sql = "SELECT * FROM aliens_abduction WHERE aa_id =$var"; 
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)){                
         
    echo "<div class='form-group col-md-3 offset-md-5'>";            
    echo "<br />";
    echo '<b>Thanks for submitting the form.</b><br/>';
    echo '<b>You were abducted </b>'. $row['aa_whenithappened'].'<br/>';
    echo '<b>and were gone for </b>'. $row['aa_howlong'].'<br/>';
    echo '<b>Number of aliens </b>'. $row['aa_howmany'].'<br/>';
    echo '<b>Describe Them </b>'. $row['aa_aliendescription'].'<br/>';
    echo '<b>The aliens did this </b>'. $row['aa_whattheydid'].'<br/>';
    echo '<b>Was Fang there? </b>'. $row['aa_fangspotted'].'<br/>';
    echo '<b>Other Comments </b>'. $row['aa_other'].'<br/>';
    echo '<b>Your email address is </b>'. $row['aa_email'].'<br/>';
    echo '<b>Your email address is </b>'. $row['aa_firstname'].'<br/>';
    echo '</div>';
    }

    ?>
    </div>
</body>
<?php
require_once('../config/footer.php');
?>