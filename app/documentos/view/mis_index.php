<?php
require_once('../config/session.php');
require_once('../config/menu.php');
require_once('../model/conf.php');

?>
<div class="form-group d-flex justify-content-center">
    <h1></h1>
</div>
<br><br />


<div class="col-mb-6 offset-md-3">
    <?php

    if (isset($_SESSION['user_name'])) {
        echo '&#10084; <a href="mis_viewprofile.php?id='.$_SESSION['user_id'].'" class="">View Profile</a><br />';
        echo '&#10084; <a href="mis_editprofile.php?id='.$_SESSION['user_id'].'" class="">Edit Profile</a><br />';
        echo '&#10084; <a href="mis_logout.php" class="">Logout (' . $_SESSION['user_name'] . ')</a>';
    } else {
        echo '&#10084; <a href="mis_login.php" class="">login</a><br />';
        echo '&#10084; <a href="mis_sigup.php" class="">Add</a><br />';
    };
    ?>
</div>

<div class="col-mb-6 offset-md-3">
    <h3>Last Members</h3>
</div>

<?php

$sql = 'SELECT * FROM mismatch_user';

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
?>
    <div class="col-md-6 offset-md-3">
        <img src="../../image/<?= $row['user_picture']; ?>" width="100px" alt="<?= $row['user_name']; ?>" class="img-thumbnail img-responsive">
        <a href="<?=$hosted;?>view/mis_viewprofile.php?id=<?= $row['user_id']; ?>" class=""><?= $row['user_name']; ?></a>
    </div>

<?php
}
require_once('../config/footer.php');
?>