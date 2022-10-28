<?php

require_once('../model/conf.php');
require_once('../config/menu.php')

?>
<div class="d-flex justify-content-center">
    <h2>{{title}}</h2>
</div>

<?php
require_once('../config/login.php');
?>
<div class="col-md-6 offset-md-3">
    <img src="../../../../../image/{{picture}}">
    <p><strong>Username:</strong> {{username}} <br /><strong>Gender:</strong> {{gender}} <br />
        <strong>Firstname: </strong> {{firstname}} <br />
        <strong>Lastname: </strong> {{lastname}} <br />
        <strong>Birddate: </strong> {{birdate}} <br />
        <strong>City: </strong> {{city}} <br />
        <strong>State: </strong> {{state}} <br />
    </p>
    <div class="col-md-6 offset-md-3">
        <p><strong>Would you like to </strong><a href="editprofile?id={{id}}">Edit your profile</a></p>
    </div>
</div>
<?php
require_once('../config/footer.php');
?>
