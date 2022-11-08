<?php
require_once('../config/menu.php');
?>
<body>
    <div class="form-group d-flex justify-content-center">
        <h1>MakemeElvis.com</h1>        
    </div>
    <br />
    <div class="form-group d-flex justify-content-center">         
        <h2>Enter an email address to remove</h2>
    </div>
      <div class="container col-md-6 col-md-offset-3">
        <div class="col-md-6 offset-md-3">
            <form  id="form-remove" method="post" action="../controller/removeemail.php" class="row g-3">
            <div class="col-auto">
                <label for="email"class="visually-hidden">E-mail Address</label>
                <input type="email" class="form-control" id="email" name="email" REQUIRED placeholder="Describe email">
            </div> 
            <div class="col-auto"> 
                <button class="btn btn-primary mb-3" type="submit" id="remove">Enviar</button>
            </div> 
            </form>
        </div>
      </div>
</body>
<?php
require_once('../config/footer.php');
?>