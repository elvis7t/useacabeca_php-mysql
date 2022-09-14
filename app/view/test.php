<?php
require_once('../config/authentica.php');
?>
<body>
    <div class="d-flex justify-content-center">
        <h1> Teste de fomulario</h1>
    </div>

    <div class="col-md-6 offset-md-3">
       <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" class="form-vertical">
       <?php
       require_once '../model/conf.php';
       if(ISSET($_POST["send"])){
        foreach($_POST['deleta'] as $deletItem ){
            $sql = "DELETE FROM email_list WHERE elist_id = $deletItem";
            mysqli_query($con, $sql)or Die(mysqli_error($con));
            echo "Email Deletado";
        }
    }
         $sql ="SELECT * FROM email_list ";
         $result = mysqli_query($con,$sql)or die(mysqli_error($result)); 
         $row = array();
         
         while($row = mysqli_fetch_array($result)){
            echo'<div class="form-check form-switch">';
            echo "<input type='checkbox' class='form-check-input' role='switch' value =".$row['elist_id']." name='deleta[]'>";
            echo ' '.$row['elist_firstname'];
            echo ' '.$row['elist_lastname'];
            echo ' '.$row['elist_email'];
            echo '<br />';
            echo '</div>';
         }
         ?>
         <input class="btn btn-danger" type="submit" name="send">
       </form>
    </div>    
</body>
<?php
require_once('../config/footer.php');
?>