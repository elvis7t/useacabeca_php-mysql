<?php
session_start();
require_once '../model/conf.php';
//Limpa ERRO
$error_msg = "";

if (!isset($_SESSION['user_id'])) {
    if (isset($_POST['submit'])) {
        //obtem os dados de login digitados pelo usuario
        $user_name = mysqli_real_escape_string($con, trim($_POST['username']));
        $user_password = mysqli_real_escape_string($con, trim($_POST['password']));

        if (!empty($user_name) && !empty($user_password)) {
            //procura o nome e a senha no banco 
            $sql = "SELECT user_id,  user_name FROM mismatch_user WHERE user_name ='" . $user_name . "'";
            $data = mysqli_query($con, $sql);

            if (mysqli_num_rows($data) == 1) {
                //o login foi bem-sucedido, portanto, definir as variaveis de ID e nome do usuario
                $row = mysqli_fetch_array($data);
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['user_name'];
                // setcookie ('user_id', $row['user_id']);
                // setcookie ('user_name', $row['user_name']);
                $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/mis_index.php';
                header('location:' . $home_url);
            } else {
                $error_msg = 'Desculpe, voce deve digitar um nome e senha validos para fazer login';
            }
        } else {
            $error_msg = 'Desculpe, voce deve digitar um nome e senha validos para fazer login2';
        }
    }
}
require_once('../config/menu.php')
?>

<body class="hold-transition login-page">

    <?php
    if (empty($_SESSION['user_id'])) {
        echo '<p class="d-flex justify-content-center bg-danger">' . $error_msg . '</p>';

    ?>



        <div class="col-md-6 offset-md-3">
            <div class="border-bottom">
                <p class="login-box-msg">Entre com suas credenciais:</p>
                <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
                    <div class="row mb-3">
                        <label for="username" class="col-sm-6 col-form-label">Username:</label>
                        <div class="col-sm-6">
                            <input type="text" required value="<?php if (!empty($user_name)) echo $user_name; ?>" class="form-control" pattern="[a-zA-Z\s]+$" id="username" name="username" minlength="3" maxlength="30" placeholder="Describe your Username">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lastname" class="col-sm-6 col-form-label">Password:</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" name="password" required id="password" minlength="6" maxlength="9" size="9" placeholder="Describe your password ">
                        </div>
                    </div>

                    <div class="form-grup">
                        <div class="col-md-6 offset=md-3">
                            <button type="submit" name="submit" id="enviar" class="btn btn-primary">
                                <ion-icon name="send"></ion-icon> Sign-in
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            </main>
        </div>
        </div>
    <?php
    } else {
        echo ('<p class="d-flex justify-content-center bg-success text-light"> voce esta logado como ' . $_SESSION['user_name'] . '</p>');
    }
    // require_once('../config/footer.php');
    ?>