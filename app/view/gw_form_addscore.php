<<<<<<< HEAD
<?php
require_once('../config/menu.php');
require_once('../model/conf.php');
?>
<body>
    <div class="form-group d-flex justify-content-center">
        <h2>Guitar Wars -  Add Your High Score</h2>
    </div>
    <br><br />
    <div class="container-fluid"> 
        <?php
        //Define as constantes do caminho e do tamenho maximo dos arquivos
        define('GW_UPLOADPATH', '../image/');
        if(ISSET($_POST['submit'])){
            $nome = $_POST['nome'];
            $score = $_POST['score'];
            $screenshot = "guitar.png";

            // if (!empty($name) && !empty($score) && !empty($screenshot)){
                //if(($screenshot_type == 'image/pnj') && ($screenshot_sise > 0) && ($screenshot_sise <= GW_UPLOADPATH))){
                    // if($_FILES['screanshot']['error'] == 0){
                            //Move o arquivo para a pasta-alvo
                            //  $target = GW_UPLOADPATH . $screenshot;
                            //if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $target)){               

                            $sql ="INSERT INTO guitarwars VALUES(0,NOW(),'$nome','$score','$screenshot')";
                            mysqli_query($con,$sql);
                            echo '<div class="col-md-6 offset-md-3">';
                            echo'<p>Obrigado por adicionar o seu recorde!</p>';
                            echo'<p><strong>Nome:</strong>'.$nome.'<br />';
                            echo'<strong>Score:</strong>'.$score.'</p>';
                            echo'<img src="'.GW_UPLOADPATH. $screenshot.'" alt="Score image">';
                            echo'</div>';
                            // echo'<p><a href="'.$hosted.'/view/index.php">';
                            $nome="";
                            $score="";
                            $screenshot="";
                            // mysqli_close($con);
                     // }
                 // }
              //}
         // }
       
        }else{
            echo'<div class="col-md-6 offset-md-3">';
            echo'<p class="error"> Por favor, Insira Todas as informações para adicionar seu recorde.</p>';
            echo $target;
            echo'</div>';
        }
//    }
//    }else{  echo'<p class="error"> O Arquivo precisa ser png com menos de '.''.'(GW_MAXFILESIZE / 1024).' KB de tamenho.</p>'; }
''

        ?>
        <form enctype="multipart/form-data" method="post" action="<?=$_SERVER["PHP_SELF"];?>" class="col-md-6 offset-md-3">
            <div class="row mb-3">
                <label for="Nome" class="col-sm-6 col-form-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" value="<?php if(!empty($name)) echo $name;?>"name="nome" placeholder="Informe o seu nome">
                </div>    
            </div>
            <div class="row mb-3">  
                <label for="score" class="col-sm-6 col-form-label">Score</label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" value="<?php if(!empty($score)) echo $score;?>"name="score" placeholder="Informe o seu Score">
                </div>
            </div>
            <div class="row mb-3">  
                <label for="screenshot" class="col-sm-6 col-form-label">Score</label>
                <div class="col-sm-6">
                    <input type="file" required class="form-control" name="screenshot">
                    <input type="hidden"  name="MAX_FILE_SIZE" value="327000"/>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit"><ion-icon name="send"></ion-icon> Enviar</button>
            </div>
        </form>
    </div> 
</body>
<?php
require_once('../config/footer.php');
=======
<?php
require_once('../config/menu.php');
require_once('../model/conf.php');
?>
<body>
    <div class="form-group d-flex justify-content-center">
        <h2>Guitar Wars -  Add Your High Score</h2>
    </div>
    <br><br />
    <div class="container-fluid"> 
        <?php
        //Define as constantes do caminho e do tamenho maximo dos arquivos
        define('GW_UPLOADPATH', 'image/');
        if(ISSET($_POST['submit'])){
            $nome = $_POST['nome'];
            $score = $_POST['score'];
            $screenshot = $_FILE['screenshot']['name'];

            // if (!empty($name) && !empty($score) && !empty($screenshot)){
                //if(($screenshot_type == 'image/pnj') && ($screenshot_sise > 0) && ($screenshot_sise <= GW_UPLOADPATH))){
                    // if($_FILES['screanshot']['error'] == 0){
                            //Move o arquivo para a pasta-alvo
                            //  $target = GW_UPLOADPATH . $screenshot;
                            //if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $target)){               

                            $sql ="INSERT INTO guitarwars VALUES(0,NOW(),'$nome','$score','$screenshot')";
                            mysqli_query($con,$sql);
                            echo '<div class="col-md-6 offset-md-3">';
                            echo'<p>Obrigado por adicionar o seu recorde!</p>';
                            echo'<p><strong>Nome:</strong>'.$nome.'<br />';
                            echo'<strong>Score:</strong>'.$score.'</p>';
                            echo'<img src="'.GW_UPLOADPATH. $screenshot.'" alt="Score image">';
                            echo'</div>';
                            // echo'<p><a href="'.$hosted.'/view/index.php">';
                            $nome="";
                            $score="";
                            $screenshot="";
                            // mysqli_close($con);
                     // }
                 // }
              //}
         // }
       
        }else{
            echo'<div class="col-md-6 offset-md-3">';
            echo'<p class="error"> Por favor, Insira Todas as informações para adicionar seu recorde.</p>';
            echo $target;
            echo'</div>';
        }
//    }
//    }else{  echo'<p class="error"> O Arquivo precisa ser png com menos de '.''.'(GW_MAXFILESIZE / 1024).' KB de tamenho.</p>'; }
''

        ?>
        <form enctype="multipart/form-data" method="post" action="<?=$_SERVER["PHP_SELF"];?>" class="col-md-6 offset-md-3">
            <div class="row mb-3">
                <label for="Nome" class="col-sm-6 col-form-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" value="<?php if(!empty($name)) echo $name;?>"name="nome" placeholder="Informe o seu nome">
                </div>    
            </div>
            <div class="row mb-3">  
                <label for="score" class="col-sm-6 col-form-label">Score</label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" value="<?php if(!empty($score)) echo $score;?>"name="score" placeholder="Informe o seu Score">
                </div>
            </div>
            <div class="row mb-3">  
                <label for="screenshot" class="col-sm-6 col-form-label">Score</label>
                <div class="col-sm-6">
                    <input type="file" required class="form-control" name="screenshot">
                    <input type="hidden"  name="MAX_FILE_SIZE" value="327000"/>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit"><ion-icon name="send"></ion-icon> Enviar</button>
            </div>
        </form>
    </div> 
</body>
<?php
require_once('../config/footer.php');
>>>>>>> 8873f45b80b73266875547cf15586c6c78b5dbd5
?>