<?php require './templates/header.php' ?>
<?php
$province = $_POST['choose_provice'];
$gender = $_POST['gender'];
$subject = $_POST['checkbox_id'];
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php if(isset($province)) {echo $province;} ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <?php
            if (isset($_POST['gender'])) {
                if ($gender === 'Male') {
                  echo '<img class='.'"rounded-circle w-25 h-"'.' src="./images/male.png">';
                } else{
                  echo '<img class='.'"rounded-circle w-25 h-"'.' src="./images/female.png">';
                }
              }
            ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
                if(isset($subject)) {
                    foreach ($subject as $value) {
                        echo '<button class="btn btn-primary me-3">'. $value . '</button>';
                    }
                }
            ?>
        </div>
    </div>
<?php require './templates/footer.php' ?>