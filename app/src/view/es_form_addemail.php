<?php
require_once('../config/menu.php');
?>
<body>
    <div class="form-group d-flex justify-content-center">    
        <h1>E-mail registration Form</h1>    
    </div>
    <br><br />

    <div class="container-fluid">        
        <form method="post" action="../controller/addemail.php" class="col-md-6 offset-md-3">    
            <div class="row mb-3">
                <label for="firstname" class="col-sm-6 col-form-label">First Name</label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" id="firstname" name="firstname" placeholder="Describe your first name">
                </div>    
            </div>
            <div class="row mb-3">
                <label for="lastname" class="col-sm-6 col-form-label">Last Name</label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" id="lastname" name="lastname" placeholder="Describe your last name ">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-6 col-form-label">E-mail</label>
                <div class="col-sm-6">
                <input type="email" required class="form-control" id="email" name="email" placeholder="Describe your e-mail">
                </div>                
            </div>

            <div class="form-grup">
                <div class="col-md-6 offset=md-3">
                    <button type="submit" id="enviar" class="btn btn-primary"><ion-icon name="send"></ion-icon> Enviar</button>
                </div>
            </div>

        </form>
    </div>
</body>
<?php
require_once('../config/footer.php');
?>