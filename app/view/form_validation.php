<?php
require_once('../config/menu.php');
?>
<body>
    <div class="form-group d-flex justify-content-center">    
        <h1>E-mail registration Form</h1>    
       </div>
       <br><br />
    <?php
    ?>   
    <div class="col-md-6 offset-md-3">
        <form method="post" action="../controller/sendemail.php" class="row g-3 needs-validation" novalidate>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Subject of email</label>
                <input type="text" class="form-control" id="validationCustom01" name="validationCustom01" value="" maxlength="30" minlength="2" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="md-4">
                <label for="validationCustom02" class="form-label">Body of email</label>
                <textarea class="form-control" id="validationCustom02" name="validationCustom02"  maxlength="30" minlength="2"   rows="3" required></textarea>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>            
            <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
</body>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
<?php
require_once('../config/footer.php');
?>