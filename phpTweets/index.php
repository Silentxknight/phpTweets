
<!DOCTYPE html>
<html lang="en">

<?php include('head&foot/header.php');
      include('config_file/conn.php');

$sql="SELECT  userMail, randomText FROM users ORDER BY id "; 

$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

// print_r($data);

?>

<div class="container">
    <div class="row">
      <?php foreach($data as $twt){ ?>
        
        <div class="col s6 md3 ">
            <div class="card">
             <div class="card-content center">
                <h6><?php echo htmlspecialchars($twt['userMail']) ?></h6>
                <div><?php echo htmlspecialchars($twt['randomText']) ?></div>
             </div>
             <div class="card-action right-align">
                <a href="#" class="brand-text">Details</a>
             </div>
            </div>
        </div>

      <?php }?>
    </div>

</div>




<?php include('head&foot/footer.php'); ?>

</html>