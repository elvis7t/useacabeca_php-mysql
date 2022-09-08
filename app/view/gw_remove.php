<?php
require_once('../config/menu.php');
require_once('../model/conf.php');
?>
<body>
    <div class="d-flex justify-content-center">
        <h2>Guitar Wars -  Remove a Hight Score</h2>
    </div>    
<?php
if(isset($_GET['id'])){
    //recebe os dados
    $id = $_GET['id'];
} else if(isset($_POST['id'])){
    $id = $_POST['id'];
}else {
    echo '<div class="col-md-6 offset-md-3">';
    echo '<p>Desculpe, nenhuma pontuação foi especificada para ser removida</p>';
    echo '</div>';
}

if (isset($_POST['submit'])){
    if ($_POST['confirm'] == 'yes'){
        //Exclui p arquivo gráfico do servidores
        // @unlink(GW_UPLOADPATH . $screenshot)
        $sql = "DELETE FROM guitarwars WHERE gw_id = ".$id." LIMIT 1";
        mysqli_query($con, $sql);
        echo '<div class="col-md-6 offset-md-3">';
        echo '<p class="error"> A Pontuação '.$id.' foi removida com sucesso</p>';
        echo '</div>';
    }else{
        echo '<div class="col-md-6 offset-md-3">';
        echo '<p class="error"> A Pontuação não foi removida</p>';
        echo '</div>';
    }
}else if(isset($id)){
    $sql = "SELECT * FROM guitarwars WHERE gw_id = ".$id;
    $result = mysqli_query($con, $sql);
    
    while($row = mysqli_fetch_array($result)){
        $nome = $row['gw_name'];
        $data = $row['gw_date'];
        $score = $row['gw_score'];
    }


    echo '<div class="col-md-6 offset-md-3">';
    echo '<p class="bg-danger"> Tem certeza de que deseja apagar a pontuação abaixo?:</p>';
    echo '<p><strong>Nome:</strong> '.$nome.' <br /><strong>Data:</strong> '.$data.' <br />
    <strong>Pontuação: </strong> '.$score.' <br /> </p>';

    echo'<div class="form-group col-mb-6 offset">';
    echo'<form method="post" action="gw_remove.php" class="row g-3">';
    echo'<div class="col-auto">';
    echo'<input class="form-check-input" type="radio" name="confirm" value="yes" id="flexRadioDefault1">';
    echo'<label class="form-check-label" for="flexRadioDefault1"> Yes';
    echo'</label>';
    echo'</div>';
    echo'<div class="col-auto">';
    echo'<input class="form-check-input" type="radio" name="confirm" value="no" id="flexRadioDefault2" checked>';
    echo'<label class="form-check-label" for="flexRadioDefault2">No';
    echo'</label>';
    echo'</div>';
    echo'<div class="col-auto">';
    echo '<input type="hidden" value="'.$id.'" name="id"/>';    
    echo '<input type="submit" class="btn btn-danger" value="Remover" name="submit">';    
    echo '</div>';    
    echo '</form>';
    echo '</div>';    
}
echo '<div class="col-md-6 offset-md-3">';
echo '<p><a href="gw_admin_listscore.php">Voltar</a></p>';
echo '</div>';
echo '</div>';
?>
<?php
require_once('../config/footer.php');
?>