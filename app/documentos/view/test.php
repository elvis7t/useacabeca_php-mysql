<?php
require_once('../config/menu.php');
require_once('../model/conf.php');
?>

<body>
    <div class="form-group d-flex justify-content-center">
        <h1>Teste</h1>
    </div>

    <div class="form-group d-flex justify-content-center">
        <form class="form-horizontal" method="post" action="<?=$_SERVER['PHP_SELF'];?>">
            <table class="table table-striped table-bordered" id="example">
                <thead>
                    <th>id</th>
                    <th>name</th>
                    <th>action</th>
                </thead>

                <tbody>
                    <?php
                    if (isset($_POST['submit'])) {
                        foreach ($_POST['todelete'] as $item) {
                            $sql = "DELETE FROM aliens_abduction WHERE aa_id = $item";
                            mysqli_query($con, $sql);
                            echo "Item" . $item . " foi deletado";
                        }
                        $sql = "SELECT * FROM aliens_abduction";
                        $res = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>".$row['aa_id']."</td>";
                            echo "<td>".$row['aa_firstname']."</td>";
                            echo "<td>"; 
                            echo "<div class='form-ckeck form-switch'>";
                            echo "<input type='checkbox' class='form-check-input' role='switch' nama='todelete[]' value='".$row['aa_id']."'>";
                            echo "</div>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        $sql = "SELECT * FROM aliens_abduction";
                        $res = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>".$row['aa_id']."</td>";
                            echo "<td>".$row['aa_firstname']."</td>";
                            echo "<td>"; 
                            echo "<div class='form-ckeck form-switch'>";
                            echo "<input type='checkbox' class='form-check-input' role='switch' nama='todelete[]' value='".$row['aa_id']."'>";
                            echo "</div>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
            <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-danger">Deletar</button>
            </div>
        </form>
    </div>
</body>
<?php
require_once('../config/footer.php');
?>