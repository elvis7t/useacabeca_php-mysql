<div class="d-flex justify-content-center">
    <h2>Guitar Wars - Remove a Hight Score</h2>
</div>


<div class="col-md-6 offset-md-3">
    <p class="bg-danger"> Tem certeza de que deseja apagar a pontuação abaixo?:</p>
    <p><strong>Nome:</strong> {{name}} <br /><strong>Data:</strong> {{date}} <br />
        <strong>Pontuação: </strong> {{score}} <br />
    </p>
    <img src="../../../../image/guitar.png">

    <div class="form-group col-mb-6 offset">
        <form method="post" action="" class="row g-3">
            <div class="col-auto">
                <input class="form-check-input" type="radio" name="confirm" value="a" id="flexRadioDefault1" {{check2}}>
                <label class="form-check-label" for="flexRadioDefault1"> Aprovado
                </label>
            </div>
            <div class="col-auto">
                <input class="form-check-input" type="radio" name="confirm" value="n" id="flexRadioDefault2" {{check}}>
                <label class="form-check-label" for="flexRadioDefault2">Nâo aprovado
                </label>
            </div>
            <div class="col-auto">
                <input type="hidden" value="{{id}}" name="id" />
                <input type="submit" class="btn btn-primary" value="Moderar" name="submit">
            </div>
        </form>
    </div>

    <div class="col-md-6 offset-md-3">
        <p><a href="admin_guitar_wars">Voltar</a></p>
    </div>
</div>