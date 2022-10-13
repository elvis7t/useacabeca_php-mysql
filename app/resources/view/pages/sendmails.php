<div class="form-group d-flex justify-content-center">
    <h1>{{title}}</h1>
</div>
<br />

<div class="container-fluid">
    <div class="form-group d-flex justify-content-center">
        <h3> <b>Titulo: </b>{{subtitle}}</h3>
    </div>
    <div class="d-flex justify-content-center">
        <b>{{message}}</b>
    </div>
    <br />
</div>
<div class="col-md-6 offset-md-3">
    <table class="table table-striped" id="example">
        <thead>
            <th>Id:</th>
            <th>Name:</th>
            <th>Lastname:</th>
            <th>E-mail:</th>
            <th>Link:</th>
            <th>Action:</th>
        </thead>
        <tbody>
            {{list}}
        </tbody>
    </table>
</div>

