<?php
require_once('../config/authentica.php');
require_once('../model/conf.php');
?>
<body>
    <div class="d-flex justify-content-center">
        <h1>Admin - Guitar Wars </h1>
    </div>

    <div class="col-md-6 offset-md-3">        
        <table class="table" id="example">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Data</th>
                <th>Score</th>
                <th>Image</th>                
                <th>Aproved</th>                
                <th>Remover</th>
                <th>Moderaction</th>
            </thead>    
                <?php
                $sql = "SELECT * FROM guitarwars";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)){
                    $check = $row['gw_aproved']=='a'?"CHECKED":"";
                    echo'<tr>';
                    echo'<td>'.$row['gw_id'].'</td>';
                    echo'<td>'.$row['gw_name'].'</td>';
                    echo'<td>'.$row['gw_date'].'</td>';
                    echo'<td>'.$row['gw_score'].'</td>';                                 
                    echo'<td><img src="../image/'.$row['gw_screenshot'].'" alt="Score image"></td>';                    
                    echo'<td>';
                    echo'<div class="form-check form-switch">';
                    echo'<input type="checkbox" name="todelete" '.$check.' class="form-check-input">';
                    echo'</div>';
                    echo'</td>';
                    echo'<td><a href="gw_remove.php?id='.$row['gw_id'].'">Remover</a></td>';
                    echo'<td><a href="gw_moderar.php?id='.$row['gw_id'].'">Moderar</a></td>';
                    echo'</tr>';
                }
                ?>            
        </table>
    </div>
</body>
<?php
require_once('../config/footer.php');
?>
