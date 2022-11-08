<?php
require_once '../config/menu.php';
?>
    <div class="form-group d-flex justify-content-center">
        <h1 class="text-center">Livro</h1>
    </div><br />
    <!-- <?php
    $Url[1] = (empty($Url[1]) ? null : $Url[1]);
if(file_exists(DIRECTORY_SEPARATOR . '/' .$Url[0] . 'php' )):
    require DIRECTORY_SEPARATOR . '/' .$Url[0] . 'php';
elseif(file_exists(DIRECTORY_SEPARATOR . '/' . $Url[0] . '/' . $Url[1] . 'php')):  
    require DIRECTORY_SEPARATOR . '/' . $Url[0] . '/' . $Url[1] . 'php';
else:
        require '../404.php';  
endif;
?> -->
    <div class="form-group d-flex justify-content-center">
        <img src="../image/useacabeca.jpg" width="350px" alt="Fuzzy Cardigan" class="img-thumbnail img-responsive"  >
    </div> <br />
    
</body>
<?php
require_once ('../config/footer.php');
?>