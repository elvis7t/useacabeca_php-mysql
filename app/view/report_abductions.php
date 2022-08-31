<?php
require_once('../config/menu.php');
require_once('../model/conf.php');
?>
<body>
    <div class="container d-flex justify-content-center">
        <h1>Reports of abductions by aliens</h1>
    </div>
    <div class="container-fluid">
        <form method="post" action="<?php echo$_SERVER["PHP_SELF"];?>">
        <table class="table table-striped" id="example">
                <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">E-mail</th>
                <th scope="col">Action</th>
                <th scope="col">Select</th>
                </tr>
            </thead>
            <tbody>                
                <?php
                if(ISSET($_POST['submit'])){
                    foreach($_POST['todelete'] as $deleteItem){
                    $sql = "DELETE FROM aliens_abduction WHERE aa_id = $deleteItem";
                    mysqli_query($con, $sql);
                    }
                    $sql = "SELECT * FROM aliens_abduction";
                    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
                    $row = array();

                    while ($row = mysqli_fetch_array($result)){
                        echo'<tr>';
                        echo'<td>'.$row['aa_id'].'</td>';
                        echo'<td>'.$row['aa_firstname'].'</td>';
                        echo'<td>'.$row['aa_lastname'].'</td>';
                        echo'<td>'.$row['aa_email'].'</td>';
                        echo'<td><a class="btn btn-xs btn-info" a href="../view/show_abduction.php?var='.$row['aa_id'].'"><ion-icon name="glasses-sharp"></ion-icon></td>';                        
                        echo'<td>';                    
                        echo '<div class="form-check form-switch">';
                        echo '<input class="form-check-input" type="checkbox" role="switch"   name="todelete[]" value="'.$row['aa_id'].'">';          
                        echo'</div>';                                          
                        echo'</td>';
                        echo'</tr>';
                    }

                }else{
                    $sql = "SELECT * FROM aliens_abduction";
                    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
                    $row = array();

                    while ($row = mysqli_fetch_array($result)){
                        echo'<tr>';
                        echo'<td>'.$row['aa_id'].'</td>';
                        echo'<td>'.$row['aa_firstname'].'</td>';
                        echo'<td>'.$row['aa_lastname'].'</td>';
                        echo'<td>'.$row['aa_email'].'</td>';
                        echo'<td><a class="btn btn-xs btn-info" a href="../view/show_abduction.php?var='.$row['aa_id'].'"><ion-icon name="glasses-sharp"></ion-icon></td>';
                        echo'<td>';                    
                        echo '<div class="form-check form-switch">';
                        echo '<input class="form-check-input" type="checkbox" role="switch"   name="todelete[]" value="'.$row['aa_id'].'">';          
                        echo'</div>';                                          
                        echo'</td>';
                        echo'</tr>';
                    }
                }
                ?>                           
            </table>
            <input type="submit" class="btn btn-xs btn-danger" name="submit" value="Deletar">
        </div>
</body>
<?php
require_once('../config/footer.php');
?>