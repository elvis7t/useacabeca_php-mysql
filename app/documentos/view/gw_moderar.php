<?php
require_once('../config/authentica.php');
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
        $sql = "UPDATE guitarwars SET gw_aproved = '".$_POST['confirm']."' WHERE gw_id = $id LIMIT 1";
        mysqli_query($con, $sql);
        echo '<div class="col-md-6 offset-md-3">';
        echo '<p class="error"> A Pontuação '.$id.' foi alterada com sucesso</p>';
        echo '</div>';
    
        
}else if(isset($id)){
    $sql = "SELECT * FROM guitarwars WHERE gw_id = ".$id;
    $result = mysqli_query($con, $sql);
    
    while($row = mysqli_fetch_array($result)){
        $nome = $row['gw_name'];
        $data = $row['gw_date'];
        $score = $row['gw_score'];
        $screenshot = $row['gw_screenshot'];
        $check = $row['gw_aproved']=='n'?"checked":"";
        $check2 = $row['gw_aproved']=='a'?"checked":"";

    }

   
    echo '<div class="col-md-6 offset-md-3">';
    echo '<p class="bg-danger"> Tem certeza de que deseja apagar a pontuação abaixo?:</p>';
    echo '<p><strong>Nome:</strong> '.$nome.' <br /><strong>Data:</strong> '.$data.' <br />
    <strong>Pontuação: </strong> '.$score.' <br /> </p>';
    echo '<img src="../image/'.$screenshot.'">';  

    echo'<div class="form-group col-mb-6 offset">';
    echo'<form method="post" action="gw_moderar.php" class="row g-3">';
    echo'<div class="col-auto">';
    echo'<input class="form-check-input" type="radio" name="confirm" value="a" id="flexRadioDefault1" '.$check2.'>';
    echo'<label class="form-check-label" for="flexRadioDefault1"> Aprovado';
    echo'</label>';
    echo'</div>';
    echo'<div class="col-auto">';
    echo'<input class="form-check-input" type="radio" name="confirm" value="n" id="flexRadioDefault2" '.$check.'>';
    echo'<label class="form-check-label" for="flexRadioDefault2">Nâo aprovado';
    echo'</label>';
    echo'</div>';
    echo'<div class="col-auto">';
    echo '<input type="hidden" value="'.$id.'" name="id"/>';    
    echo '<input type="submit" class="btn btn-primary" value="Moderar" name="submit">';    
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