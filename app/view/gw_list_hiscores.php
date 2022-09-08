<?php
require_once('../config/menu.php');
require_once('../model/conf.php');
?>
<body>
    <div class="d-flex justify-content-center">
        <h1>Guitar Wars - Maiores Pontuações</h1>        
    </div>
    <div class="col-md-7 offset-md-3">
     <h5>Bem-vindo, intrépido guitarrista! Você é bom o suficiente para entrar na lista 
        de recordes do guitar Wars? se for, clique  <a href="gw_form_addscore.php">Aqui</a>  para adicionar a sua pontuação.</h5>
    </div>
    <div class="col-md-6 offset-md-3">
        <table class="table" id="example">
            <thead>
                <th>ID</th>
                <th>Data</th>
                <th>Nome</th>
                <th>SCORE</th>
                <th>SCREENSHOT</th>
            </thead>           
                <?php
                $sql = "SELECT * FROM guitarwars ORDER BY gw_score DESC";
                $result = mysqli_query($con,$sql);
                $row = array();
                while($row = mysqli_fetch_array($result)){
                    echo'<tr>';
                    echo'<td>'.$row['gw_id'].'</td>';
                    echo'<td>'.$row['gw_date'].'</td>';
                    echo'<td>'.$row['gw_name'].'</td>';
                    echo'<td>'.$row['gw_score'].'</td>';
                    if(is_file($row['gw_screenshot']) && filesize($row['gw_screenshot'])>0){
                        echo'<td><img src="../image/'.$row['gw_screenshot'].'" alt="Score image"</td>';                         
                    }else{
                        echo'<td><img src="../image/'.$row['gw_screenshot'].'" alt="Score image"</td>';                        
                    }
                    // mysqli_close($con);
                }
                ?>
            </tr>
        </table>
    </div>
</body>
<?php
require_once('../config/footer.php');
?>