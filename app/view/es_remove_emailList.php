<?php
require_once('../config/menu.php');
?>
<body>
<div class="form-group d-flex justify-content-center">
     <h1>Por favor selecione os endereços de email a <p>
        serem apagados e clique em Remover</h1>
     <br />
</div>
<div class="col-md-6 offset-md-3">
        <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" class="row g-3">
            <table class="table table-striped" id="example">
                <thead>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Select</th>                    
                </thead>
                <tr>
                <?php
                    require_once('../model/conf.php');
                    if(isset($_POST['submit'])){
                        foreach ($_POST['todelete'] as $deleteId){
                        $sql = "DELETE FROM email_list WHERE elist_id = $deleteId";
                        mysqli_query($con, $sql)or die(mysqli_error($con)); 
                        }   
                    echo 'Clientes removidos.<br />';
                    }
                    $sql = "SELECT * FROM email_list";
                    $result = mysqli_query($con, $sql)or die(mysqli_error($con));
                    $row = array();
                    
                    while ($row = mysqli_fetch_array($result)){                   
                    echo'<td>';
                    echo $row['elist_id'];
                    echo'</td>';
                    echo'<td>';
                    echo $row['elist_firstname'];
                    echo'</td>';
                    echo'<td>';
                    echo $row['elist_lastname'];
                    echo'</td>';
                    echo'<td>';
                    echo $row['elist_email'];
                    echo'</td>';                    
                    echo'<td>';                    
                    echo '<div class="form-check form-switch">';
                    echo '<input class="form-check-input" type="checkbox" role="switch"   name="todelete[]" value="'.$row['elist_id'].'">';          
                    echo'</div>';
                    echo'</td>';
                    
                }
                
                // mysqli_close($con);    
                ?>
                </tr>
            </table>
        <div class="col-12">
            <button class="btn btn-danger" name="submit"   type="submit">Remove</button>
        </div>
    </div>

</body>
<?php
require_once('../config/footer.php');
?>

