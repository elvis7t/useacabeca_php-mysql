<?php
require_once('../config/authentica.php');
?>
<?php
require_once('../config/authentica.php');

$Url[1] = (empty($Url[1]) ? null : $Url[1]);
if(file_exists(DIRECTORY_SEPARATOR . '/' .$Url[0] . 'php' )):
    require DIRECTORY_SEPARATOR . '/' .$Url[0] . 'php';
elseif(file_exists(DIRECTORY_SEPARATOR . '/' . $Url[0] . '/' . $Url[1] . 'php')):  
    require DIRECTORY_SEPARATOR . '/' . $Url[0] . '/' . $Url[1] . 'php';
else:
        require '../404.php';  
endif;
require_once('../config/footer.php');
?>
<body>
    <div class="d-flex justify-content-center">
        <h1>
            Teste
        </h1>
    </div>
    <div class="col-md-6  offset_md-3">
        <form class="col-md-6" method="post" action="<?=$_SERVER['SELF_PHP'];?>">
        <?php
        require_once('../model/conf.php');
        if(isset($_POST['Send'])){
            foreach($_POST['deleta'] as $deleteItem ) {
                $sql = "DELETE FROM aliens_abduction WHERE aa_id=$deleteItem";
                mysqli_query($con, $sql)or Die(mysqli_error($con));
                echo "Registro deletado";
            }
        }    
        $sql = "SELECT * FROM aliens_abduction";
        $result = mysqli_query($con, $sql);
        $row = array();
        while($row = mysqli_fetch_array($result)){
            echo "<div class='form-check form-switch>";
            echo "<input type='checkbox'class='form-check-input' role='switch' value=".$row['aa_id']." name='deleta[]'>";
            echo ''.$row['aa_name'];        
            echo "</div>";
        }
        ?>
        <button name="Send" class="btn-primary">Send</button>
        </form>

    </div>
</body>
<?php
require_once('../config/footer.php');
?>
