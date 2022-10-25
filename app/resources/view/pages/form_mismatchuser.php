<div class="form-group d-flex justify-content-center">    
        <h1>{{title}}</h1>    
    </div>
    <br><br />

    <div class="container-fluid">        
        <form method="post" action="" class="col-md-6 offset-md-3">    
            <div class="row mb-3">
                <label for="username" class="col-sm-6 col-form-label">Username:</label>
                <div class="col-sm-6">
                    <input type="text" required  class="form-control" pattern="[a-zA-Z\s]+$" id="username" name="username" minlength="3" maxlength="30" placeholder="Describe your Username">
                </div>    
            </div>
            <div class="row mb-3">
                <label for="lastname" class="col-sm-6 col-form-label">Password:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password" required id="password" minlength="6" maxlength="9"  size="9"  placeholder="Describe your password ">
                </div>
            </div>
            <div class="row mb-3">
                <label for="lastname" class="col-sm-6 col-form-label">Password (Retype):</label>
                <div class="col-sm-6">
                <input type="password" class="form-control" name="password" required pattern="[0-9a-fA-F]{4,8}"  id="password" minlength="6" maxlength="9"  size="9" placeholder="Confirm your password ">
                </div>
            </div>

            <div class="form-grup">
                <div class="col-md-6 offset=md-3">
                    <button type="submit" id="enviar" class="btn btn-primary"><ion-icon name="send"></ion-icon> Enviar</button>
                </div>
            </div>

        </form>
    </div>
    