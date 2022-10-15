<div class="d-flex justify-content-center">
        <h1>{{title}}</h1>        
    </div>
    <div class="col-md-7 offset-md-3">
     <h5>Welcome, intrepid guitarist! Are you good enough to make the guitar wars highscore list? if it is, click  <a href="{{URL}}/form_hiscore">Here</a> to add your score.</h5>
    </div>
    <div class="col-md-6 offset-md-3">
        <table class="table table-striped table-bordered" id="example">
            <thead>
                <th>ID</th>
                <th>Data</th>
                <th>Nome</th>
                <th>SCORE</th>
                <th>Rankin</th>
                <th>SCREENSHOT</th>
            </thead>           
            <tbody>
                {{list}}
            </tbody>                           
        </table>
    </div>