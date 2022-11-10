<?php

require __DIR__ . '/../vendor/autoload.php';
require_once '../../config/menu.php';

use ElvisLeite\RecordSetDatabase\Recordset;
use ElvisLeite\RecordSetDatabase\Formatter;
$fn = new Formatter();
$rs = new Recordset();

?>

<body>
    <div class="form-group d-flex justify-content-center">
        <h1></h1>
    </div>

    <div class="container-fluid">
        <div clas="col-md-6 offset-md-3">
                <table class="table table-striped" id="example">
                    <thead>
                        <th>id</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>last name</th>
                    </thead>
                    <tbody>
                        <?php
                            $rs->Select('mismatch_user');
                            while ($rs->DataGenerator()){                                                            
                        ?>
                        <tr>
                            <td><?=$rs->fld('user_id')?></td>
                            <td><?=$rs->fld('user_firstname')?></td>
                            <td><?=$rs->fld('user_lastname')?></td>
                            <td><?=$rs->formFld('user_joindate')?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
        </div>
    </div>
</body>
<?php
require_once '../../config/footer.php';
?>