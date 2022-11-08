<?php
require_once('../config/menu.php');
require_once('../model/Recordset.php');
$rs = new Recordset();
?>

<body>
    <div class="form-group d-flex justify-content-center">
        <h1></h1>
        <br />
    </div>
    <div class="col-md-6 offset-md-3">
        <table class="table table-striped" id="example">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
            </thead>

            <tbody>
                
                    <?php
                    $rs->Select('mismatch_topic');
                    while ($rs->DataGenerator()) {
                    ?>
                    <tr>
                        <td><?= $rs->fld("topic_id"); ?></td>
                        <td><?= $rs->fld("name"); ?></td>
                        <td><?= $rs->fld("category"); ?></td>
                    <?php
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<?php
require_once('../config/footer.php');
?>