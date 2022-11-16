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
        <form class="form-horizontal" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
            <?php
            if (isset($_POST['submit'])) {
                $date = array();
                $cod = $rs->setAutoCode('topic_id', 'mismatch_topic');
                $date['topic_id'] = $cod;
                $date['name'] = $_POST['name'];
                $date['category_id'] = $_POST['category'];
                if (!$rs->Insert($date, 'mismatch_topic')) {
                    echo '<div class="alert alert-primary" role="alert">';
                    echo "This Topic has add with success!";
                    echo '</div>';
                }
            }
            ?>
            <div class="row mb-3">
                <label for="Name" class="col-sm-6 col-form-label">Topic</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="Topic" maxlength="30" minlength="2" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="Category" class="col-sm-6 col-form-label">Select</label>
                <div class="col-md-6">
                    <select class="form-control" name="category" required>
                        <option value="">Choose..</option>
                        <?php
                        $rs->Select('mismatch_category');
                        while ($rs->DataGenerator()) {
                        ?>
                            <option name="category"value="<?=$rs->fld('category_id') ?>"><?=$rs->fld('name'); ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-grup">
                <button type="submit" name="submit" class="btn btn-primary"> Save</button>
            </div>
        </form>
    </div>
</body>
<?php
require_once('../config/footer.php');
?>