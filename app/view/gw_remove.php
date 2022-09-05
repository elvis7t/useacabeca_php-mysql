<?php
require_once('../config/menu.php');
require_once('../model/conf.php');
?>
<body>
    <div class="d-flex justify-content-center">
<?php
 extract($_GET);
 $sql = "DELETE FROM guitarwars WHERE gw_id =".$id;
 $result = mysqli_query($con, $sql);

 echo "<h1>Id ".$id." Foi removido</h1>";
?>
</div>
</body
<?php
require_once('../config/footer.php');
?>