<?php
require_once('../config/menu.php');
require_once('../model/conf.php');
?>
<body>
    <div class="d-flex justify-content-center">
        <h1 class="" >Admin</h1>
    </div>

    <div class="col-md-6 offset-md-3">        
        <table class="table" id="example">
            <thead>
                <th>Name</th>
                <th>Score</th>
                <th>Data</th>
                <th>Image</th>
                <th>Remover</th>
                <?php
                $sql = "SELECT * FROM guitarwars";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)){
                    echo'<tr>';
                    echo'<td>'.$row['gw_id'].'</td>';
                    echo'<td>'.$row['gw_date'].'</td>';
                    echo'<td>'.$row['gw_name'].'</td>';
                    echo'<td>'.$row['gw_score'].'</td>';                                 
                    echo'<td><img src="../image/'.$row['gw_screenshot'].'" alt="Score image"</td>';
                    echo '<td><a href="gw_remove.php?id='.$row['gw_id'].'">Remover</a><td>';
                    echo "</tr>";
                }
                ?>
            


        </table>

    </div>

    
</body>
<?php
require_once('../config/footer.php');
=======
<?php
require_once('../config/menu.php');
require_once('../model/conf.php');
?>

<body>
    <div class="d-flex justify-content-center">
        <h1 class="">Admin</h1>
    </div>

    <div class="col-md-6 offset-md-3">
        <table class="table" id="example">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Score</th>
                <th>Data</th>
                <th>Image</th>
                <th>Remover</th>
            </thead>

            <?php
            $sql = "SELECT * FROM guitarwars";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['gw_id'] . "</td>";
                echo "<td>" . $row['gw_name'] . "</td>";
                echo "<td>" . $row['gw_date'] . "</td>";
                echo "<td>" . $row['gw_score'] . "</td>";
                echo "<td><img src='../image/".$row['gw_screanshot']."></td>";
                echo '<td><a href="gw_remove.php?id='. $row['gw_id'].'">Remover</a></td>';
                echo "</tr>";
            };
            ?>
        </table>
    </div>
</body>
<?php
require_once('../config/footer.php');
>>>>>>> 8873f45b80b73266875547cf15586c6c78b5dbd5
?>