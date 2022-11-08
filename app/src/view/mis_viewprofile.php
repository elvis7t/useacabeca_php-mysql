<?php
require_once('../config/session.php');
require_once('../config/menu.php');
require_once('../model/conf.php');
extract($_GET);

if (!isset($_SESSION['user_id'])){
    echo ('<p class="d-flex justify-content-center bg-success text-light"> Please <a href="mis_login.php"> log in</a> To access this page.</p>');
    exit();
}else{
    echo ('<p class="d-flex justify-content-center bg-success text-light"> You are logged in as ' . $_SESSION['user_name'] . ' <a href="mis_logout.php">Log Out</a></p>');
}
?>
<div class="d-flex justify-content-center">
    <h2>View</h2>
</div>


<div class="col-md-6 offset-md-3">

    <?php
    
    $sql = "SELECT * FROM mismatch_user WHERE user_id =" . $id;
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <img src="../../image/<?= $row['user_picture']; ?>" width="100px" alt="<?= $row['user_name']; ?>" class="img-thumbnail img-responsive">
        <p><strong>Username:</strong> <?= $row['user_name'] ?> <br />
            <strong>Gender:</strong> <?= $row['user_gender'] ?> <br />
            <strong>Firstname: </strong> <?= $row['user_firstname'] ?> <br />
            <strong>Lastname: </strong> <?= $row['user_lastname'] ?> <br />
            <strong>Birddate: </strong> <?= $row['user_birdate'] ?> <br />
            <strong>City: </strong> <?= $row['user_city'] ?> <br />
            <strong>State: </strong><?= $row['user_state'] ?> <br />
        </p>
        <div class="col-md-6 offset-md-3">
            <p><strong>Would you like to </strong><a href="mis_editprofile.php?id=<?= $id ?>">Edit your profile</a></p>
        </div>
    <?php
    }
    ?>
</div>
<?php
require_once('../config/footer.php');
?>