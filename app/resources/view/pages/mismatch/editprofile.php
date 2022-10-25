<div class="d-flex justify-content-center">
    <h2>{{title}}</h2>
</div>


<div class="col-md-6 offset-md-3">
    <form class="form-horizontal" method="post">
        <img src="../../../../image/{{picture}}">
        <div class="row mb-3">
        <label for="username" class="col-sm-6 col-form-label">Picture:</label>
            <div class="col-sm-6">
                <select class="form-select" name="picture" aria-label="Default select example">
                    <option selected>Selecione</option>
                    <option value="{{picture}}" selected>{{username}}</option>
                    <option value="john _dewey.png">John</option>
                    <option value="jean_piage.png">John</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="username" class="col-sm-6 col-form-label">Username:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="username" minlength="6" maxlength="9" size="9" value="{{username}}">
                <input type="hidden"name="id" value="{{id}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="firstname" class="col-sm-6 col-form-label">Firstname:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="firstname" minlength="2" maxlength="30" size="30" value="{{firstname}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="lastname" class="col-sm-6 col-form-label">Lastname:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="lastname" minlength="2" maxlength="30" size="30" value="{{lastname}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="birdate" class="col-sm-6 col-form-label">Birddate:</label>
            <div class="col-sm-6">
                <input type="date" class="form-control" name="birdate"  value="{{birdate}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="city" class="col-sm-6 col-form-label">City:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="city" minlength="2" maxlength="30" size="30" value="{{city}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="state" class="col-sm-6 col-form-label">State:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="state" minlength="2" maxlength="30" size="30" value="{{state}}">
            </div>
        </div>
        <div class="col-auto">
                <input class="form-check-input" type="radio" name="gender" value="m" id="flexRadioDefault1" {{check}}>
                <label class="form-check-label" for="flexRadioDefault1"> Male
                </label>
            </div>
            <div class="col-auto">
                <input class="form-check-input" type="radio" name="gender" value="f" id="flexRadioDefault2" {{check2}}>
                <label class="form-check-label" for="flexRadioDefault2">Female
                </label>
            </div>
        <div class="row mb-3"></div>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>