<div class="form-group d-flex justify-content-center">
        <h2>{{title}}</h2>
    </div>
    <br><br />
    <div class="container-fluid">   
        <form enctype="multipart/form-data" method="post" action="" class="col-md-6 offset-md-3">
            <div class="row mb-3">
                <label for="Nome" class="col-sm-6 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" value="" name="name" placeholder="Informe o seu nome">
                </div>    
            </div>
            <div class="row mb-3">  
                <label for="score" class="col-sm-6 col-form-label">Score</label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" value="" name="score" placeholder="Informe o seu Score">
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