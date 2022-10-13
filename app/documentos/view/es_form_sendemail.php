<?php
require_once('../config/menu.php');
?>
<body>
    <div class="form-group d-flex justify-content-center">    
        <h1>E-mail registration Form</h1>    
       </div>
       <br><br />
    <?php
    require_once('../model/conf.php');
    if(isset($_POST['submit'])){
        $from = 'elvis7t@gmail.com';
        $subject = $_POST['subject'];
        $text = $_POST['elvismail'];
        $output_form = false;        
        
        if(empty($subject) && empty($text)){
            echo '<div class="form-group bg-danger d-flex justify-content-center">'; 
            echo "Voce esqueceu tanto o assunto quanto o corpo.<br />";
            $output_form = true;
            echo '</div>';
        }
    
        if(empty($subject) && (!empty($text))){
            echo '<div class="form-group bg-danger d-flex justify-content-center">'; 
            echo "Voce esqueceu o assunto .<br />";
            $output_form = true;
            echo '</div>';
        }
    
        if((!empty($subject)) && empty($text)){
            echo '<div class="form-group bg-danger d-flex justify-content-center">'; 
            echo "Voce esqueceu o corpo .<br />";
            $output_form = true;
            echo '</div>';
        }
    
        if((!empty($subject)) && (!empty($text))){
            $sql ="SELECT * FROM elvis_store";
            $result = mysqli_query($con, $sql)or die(mysqli_error($con));

            while ($row = mysqli_fetch_assoc($result)){
                // $rows[] = $row;
                echo '<div class="form-group d-flex justify-content-center">'; 
                echo "E-mail enviadoss .<br />";
                echo  $firstname = $row['elist_firstname'];
                echo  $lastname = $row['elist_lastname']."<br />";
                echo '</div>';

                // $msn = "Dear $first_name $lastname, \n $text";
                // $to = $row['elist_email'];
                // mail($to, $subject, $msg.'from'. $from);
                // echo 'Email send to:'.$to.'</br>;
                
            }
        }
            }else{
            $output_form = true;
        }
    
        if($output_form){   
        
    ?>   
    <div class="col-md-6 offset-md-3">
        <form method="post" action="<?=$_SERVER['PHP_SELF'];?>" class="row g-3 needs-validation">
            <div class="col-md-12">
                <label for="subject" class="form-label">Subject of email</label>
                <input type="text" class="form-control" id="subject" name="subject" value="<?=$subject;?>" maxlength="30">                
            </div>
            <div class="md-4">
                <label for="elvismail" class="form-label">Body of email</label>
                <textarea class="form-control" id="elvismail" name="elvismail" maxlength="30"   rows="3"><?=$text;?></textarea>
                 
            </div>            
            <div class="col-12">
            <button class="btn btn-primary" name="submit"   type="submit">Submit form</button>
            </div>
        </form>
        <?php
        }
        ?>
    </div>
</body>
<?php
require_once('../config/footer.php');
?>