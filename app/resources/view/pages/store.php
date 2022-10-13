<div class="form-group d-flex justify-content-center">
    <h1>{{titulo}}
        <p>
            {{subtitulo}}
    </h1>
    <br />
</div>
<div class="form-group col-md-6 offset-md-3">
    <form method="post" action="" class="row g-3">
        <table class="table table-striped" id="example">
            <thead>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Link</th>
                <th>Select</th>
            </thead>
            <tbody>
                {{list}}
            </tbody>
        </table>
        <div class="col-12">
            <button class="btn btn-danger" name="submit" type="submit">Remove</button>
        </div>
    </form>
</div>