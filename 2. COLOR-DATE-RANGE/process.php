<?php require './templates/header.php' ?>
<?php
// YOUR CODE HERE
    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        $color = $_POST['form_color'];
        $range = $_POST['form_range'];
        $date = $_POST['form_date'];
    }
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php echo $color; ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php echo $range; ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php echo $date; ?></span>
    </div>

<?php require './templates/footer.php' ?>