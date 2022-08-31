<?php
require_once('../config/menu.php');
?>
<body>
    <div class="form-group d-flex justify-content-center">					
        <h1>Aliens Abducted Me - Report an Abduction:</h1>        
    </div>
    <br/>
    <div class="form-group d-flex justify-content-center">					
        <h3>Share your story of alien abduction:</h3>        
    </div>
   <br></br>

    <div class="container-fluid">
        <form method="post" action="../controller/report.php" class="col-md-6 offset-md-3">
            <div class="row mb-3">
                <label for="firstname" class="col-sm-6 col-form-label">First Name</label>
                <div class="col-sm-6">
                  <input type="text" required class="form-control" id="firstname" name="firstname" value="" placeholder="Describe your First Name">
                </div>
              </div>
              <div class="row mb-3">
                <label for="lastname" class="col-sm-6 col-form-label">Last Name</label>
                <div class="col-sm-6">
                  <input type="text" required class="form-control" id="lastname" name="lastname" value="" placeholder="Describe your Last Name">
                </div>
              </div>
              <div class="row mb-3">
                <label for="email" class="col-sm-6 col-form-label">What is your email address?</label>
                <div class="col-sm-6">
                  <input type="email" required class="form-control" id="email" name="email" value="" placeholder="Example: name@domain.com">
                </div>
              </div>
              <div class="row mb-3">
                <label for="whenithappened" class="col-sm-6 col-form-label">When didi it happen?</label>
                <div class="col-sm-6">
                  <input type="text" required class="form-control" id="whenithappened" name="whenithappened" value="" placeholder="Describe When didi it happen">
                </div>
              </div>
              <div class="row mb-3">
                <label for="howlong" class="col-sm-6 col-form-label">How long were you gone?</label>
                <div class="col-sm-6">
                  <input type="text" required class="form-control" id="howlong" name="howlong" value="" placeholder="Describe How Long">
                </div>
              </div>
              <div class="row mb-3">
                <label for="howmany" class="col-sm-6 col-form-label">How many didi you see?</label>
                <div class="col-sm-6">
                  <input type="text" required class="form-control" id="howmany" name="howmany" value="" placeholder="Describe How Many">
                </div>
              </div>
              <div class="row mb-3">
                <label for="aliendescription" class="col-sm-6 col-form-label">Describe them:</label>
                <div class="col-sm-6">
                  <input type="text" required class="form-control" id="aliendescription" name="aliendescription" value="" placeholder="Describe them">
                </div>
              </div>
              <div class="row mb-3">
                <label for="whattheydid" class="col-sm-6 col-form-label">What did tehy do to you:</label>
                <div class="col-sm-6">
                  <input type="text" required class="form-control" id="whattheydid" name="whattheydid" value="" placeholder="Describe What did tehy do to you">
                </div>
              </div>
            
              <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-6 pt-0">Have you see my dog Fang?</legend>
                <div class="col-sm-6">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fangspotted" id="fangspotted" value="S" checked>
                    <label class="form-check-label" for="fangspotted">
                     Yes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fangspotted" id="fangspotted" value="N">
                    <label class="form-check-label" for="fangspotted">
                      No
                    </label>
                  </div>                  
                </div>
              </fieldset>
              <div class="form-group d-flex">
                <img src="../image/fang.jpg" width="100px" alt="Fuzzy Cardigan" class="img-thumbnail img-responsive"  >
              </div>              
              <div class="row mb-3">
                <label for="other" class="col-sm-6 col-form-label">Anything else you want to add?</label>
                <div class="col-sm-6">
                    <textarea class="form-control" placeholder="Leave a comment here" id="other" name="other">
                
                    </textarea><br />
                </div>
              </div>
              

              

              
                <div class="form-group">
                    <div class="col-md-6 offset-md-3"> 
                        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                    </div>
                </div>
        </form>
    </div>
</body>
<?php
require_once('../config/footer.php');
?>