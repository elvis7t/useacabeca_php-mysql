<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  date_default_timezone_set('America/Sao_paulo');
  error_reporting(E_ALL & E_NOTICE & E_USER_WARNING);
  $hosted = "http://localhost:85/documentos/";
  ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use a Cabeça PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- DATATABLES -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=$hosted;?>">Use a Cabeça PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Aliens Abduction
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="<?=$hosted;?>view/aa_form_report.php">Form Report Abduction</a></li>                        
            <li><a class="dropdown-item" href="<?=$hosted;?>view/aa_list_report_abductions.php">Report Abduction</a></li>            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Elvis Store
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="<?=$hosted;?>view/es_form_addemail.php">Form Registration E-mail on List </a></li>       
            <li><a class="dropdown-item" href="<?=$hosted;?>view/es_form_sendemail.php">Form Send E-mail</a></li>            
            <li><a class="dropdown-item" href="<?=$hosted;?>view/es_form_validation.php">Form Send E-mail with validation</a></li>                 
            <li><a class="dropdown-item" href="<?=$hosted;?>view/es_form_remove_email_search.php">Form Remove E-mail Search</a></li>                 
            <li><a class="dropdown-item" href="<?=$hosted;?>view/es_remove_emailList.php">List Remove E-mail List</a></li>                 
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Guitar Wars
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="<?=$hosted;?>view/gw_list_hiscores.php">Guitar Wars App</a></li>                        
            <li><a class="dropdown-item" href="<?=$hosted;?>view/gw_form_addscore.php">Form add Score</a></li>            
            <li><a class="dropdown-item" href="<?=$hosted;?>view/gw_admin_listscore.php">Admin add Score</a></li>            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mismatch
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="<?=$hosted;?>view/gw_list_hiscores.php">Guitar Wars App</a></li>                        
            <li><a class="dropdown-item" href="<?=$hosted;?>view/gw_form_addscore.php">Form add Score</a></li>            
            <li><a class="dropdown-item" href="<?=$hosted;?>view/gw_admin_listscore.php">Admin add Score</a></li>            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Test
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">            
            <li><a class="dropdown-item" href="<?=$hosted;?>view/test.php">Testar</a></li>            
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>