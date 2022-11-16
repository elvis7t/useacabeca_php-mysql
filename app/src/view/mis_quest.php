<?php
require_once('../config/session.php');
require_once('../model/conf.php');
require_once('../config/menu.php');
if (!isset($_SESSION['user_id'])) {
    echo ('<p class="d-flex justify-content-center bg-success text-light"> Please <a href="mis_login.php"> log in</a> To access this page.</p>');
    exit();
} else {
    echo ('<p class="d-flex justify-content-center bg-success text-light"> You are logged in as ' . $_SESSION['user_name'] . ' <a href="mis_logout.php">Log Out</a></p>');
}
?>

<body>

    <?php
    //Se o usuário jamais responder ao questionario, inserir respostas vazias no banco de dados de

    $sql = "SELECT * FROM mismatch_response WHERE user_id = '" . $_SESSION['user_id'] . "'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 0) {
        //  $sql = "INSERT INTO mismatch_response (user_id, topic_id) VALUES ('". $_SESSION['user_id']."', '1')";        
        // mysqli_query($con, $sql);

        //Primeiramente, obtém a lista de IDs dos tópicos a partir da resposta da tabela
        $sql = "SELECT topic_id FROM mismatch_topic ORDER BY category_id, topic_id";

        $result = mysqli_query($con, $sql);

        $topcIDs = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($topcIDs, $row['topic_id']);
        }

        //Insere linhas de respostas na tabela respectiva, uma para cada tópicos
        foreach ($topcIDs as $topic_id) {
            $sql = "INSERT INTO mismatch_response (user_id, topic_id) VALUES ('" . $_SESSION['user_id'] . "', '$topic_id')";
            mysqli_query($con, $sql);
        }
    }

    //Se o formulario tiver sido submetido, escreve as respostas no banco
    if (isset($_POST['submit'])) {
        // Escreve as linhas de respostas na respectiva tabela
        foreach ($_POST as $response_id => $response) {
            $sql = "UPDATE mismatch_response SET response = '$response'" . "WHERE response_id = '$response_id'";

            mysqli_query($con, $sql);
        }
        echo '<div class="alert alert-success alert-dismiss flex justify-content-center"> As suas Respostas foram registradas</div>';
    }

    // Obtém os dados de respost do banco, para gerar o formulário
    $sql = "SELECT mr.response_id, mr.topic_id, mr.response, mt.name as topic_name,mc.name as Category_name
    FROM mismatch_response as mr
    INNER JOIN mismatch_topic as mt USING (topic_id)
    INNER JOIN mismatch_category as mc USING (category_id)
     WHERE mr.user_id =".$_SESSION['user_id'];
    $result = mysqli_query($con, $sql);

    $responses = array();
    while ($row = mysqli_fetch_array($result)) {
        //Verifica o nome do tópico correspondente á resposta, na tabela dos tópicos
        $sql2 = "SELECT mt.name as topic_name, mc.name as category_name
        FROM mismatch_topic as mt INNER JOIN mismatch_category as mc
        USING (category_id)
        WHERE mt.topic_id =   '" . $row['topic_id'] . "'";
        $result2 = mysqli_query($con, $sql2);

        if (mysqli_num_rows($result2) == 1) {
            $row2 = mysqli_fetch_array($result2);
            $row['topic_name'] = $row2['topic_name'];
            $row['category_name'] = $row2['category_name'];
            array_push($responses, $row);
        }
    }
    ?>
    <div class="container col-md-12">
        <div class="d-flex justify-content-center">
            <h1>teste</h1>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <form class="form-horizontal" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
            <p><strong>Qual a sua opnião sobre cada Topico</strong></p>
            <div class="border border-secondary"><label class="form-check-label"><strong><?= $responses[0]['category_name']; ?></strong></label><br />
                <?php 
                $category = $responses[0]['category_name'];
                foreach ($responses as $response) {
                    //Só inicia um novo conjunto de campos se a categoria tiver se modificado
                    if ($category != $response['category_name']) {
                        $category = $response['category_name'];
                        echo "</div><div class='border border-secondary'><label class='form-check-label'><strong>" . $response['category_name'] . "</strong></label><br />";
                    }

                    // //Exibe o campo do topico no formulario
                    echo '<label class="form-check-label"' . ($response['response'] == null ? 'class="border"' : '') . 'for="' . $response['response_id'] . '">' . $response['topic_name'] . ':</label>';
                    echo '<input class="form-check-input" type="radio" id="' . $response['response_id'] . '" name="' . $response['response_id'] . '" value=1 '.($response['response'] == '1' ? "checked" : "").'/>Love';
                    echo '<input class="form-check-input" type="radio" id="' . $response['response_id'] . '" name="' . $response['response_id'] . '" value=2 '.($response['response'] == '2' ? "checked" : "").'/>Hate<br>';                    
               }
        
                ?>
            </div>
            <div class="container">
                <button type="submit" class="btn btn-primary" name="submit">Salvar</button>
            </div>
        </form>
    </div>

</body>
<?php
require_once('../config/footer.php');
?>