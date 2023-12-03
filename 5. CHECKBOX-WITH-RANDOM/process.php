<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $subject = isset($_POST['checkbox']) ? $_POST['checkbox'] : array();
}
?>
    <div class="card">
        
        <div class="card-body">
            <?php
            // CODE HERE
            foreach ($subject as $value){
                $random_color = array_rand($colors);
                $color = $colors[$random_color];
                echo '<button class="btn btn-' . $color . ' me-3">' . $value .'</button>';
            }
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>