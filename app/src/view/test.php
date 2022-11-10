<?php
require_once('../config/menu.php');
require_once('../model/Recordset.php');
$rs = new Recordset();
?>

<body>
    <div class="d-flex justify-content-center">
        <h1>Teste</h1>
    </div>
    <div class="container">
        <form class="form-horizontal" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
            <?php
            if (isset($_POST['submit'])) {
                foreach ($_POST['todelete'] as $item) {
                    echo '<div class="alert alert-primary" role="alert">';
                    echo "Item delected is $item";
                    echo '</div>';
                    $rs->delete('aliens_abduction', "aa_id = $item");
                }
            }

            ?>
            <table class="table table-striped" id="example">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Whenithappened</th>
                    <th>Howlong</th>
                    <th>Action</th>
                </thead>
                <tbody>

                    <?php
                    // $sql = "SELECT * FROM aliens_abduction";
                    $rs->Select('aliens_abduction');
                    // $rs->Execute($sql);
                  
                    while ($rs->DataGenerator()) {
                    ?>
                        <tr>
                            <td><?= $rs->fld("aa_id"); ?></td>
                            <td><?= $rs->fld("aa_firstname"); ?></td>
                            <td><?= $rs->fld("aa_whenithappened"); ?></td>
                            <td><?= $rs->fld("aa_howlong"); ?></td>
                            <td>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" name="todelete[]" role="switch" value="<?= $rs->fld("aa_id"); ?>">
                                </div>
                            </td>
                        </tr>
                    <?php
                    };
                    ?>
                </tbody>
            </table>
            <div class="container">
                <button type="submit" class="btn btn-danger" name="submit">Deletar</button>
            </div>
        </form>
    </div>

</body>
<?php
require_once('../config/footer.php');
?>