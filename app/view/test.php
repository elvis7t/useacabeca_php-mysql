<?php
require_once('../config/authentica.php');

$Url[1] = (empty($Url[1]) ? null : $Url[1]);
if(file_exists(DIRECTORY_SEPARATOR . '/' .$Url[0] . 'php' )):
    require DIRECTORY_SEPARATOR . '/' .$Url[0] . 'php';
elseif(file_exists(DIRECTORY_SEPARATOR . '/' . $Url[0] . '/' . $Url[1] . 'php')):  
    require DIRECTORY_SEPARATOR . '/' . $Url[0] . '/' . $Url[1] . 'php';
else:
        require '../404.php';  
endif;
require_once('../config/footer.php');
?>