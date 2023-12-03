<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php

    ?>
    <tr>
        <td><?php echo $_POST['name']; ?></td>
        <td><?php echo $_POST['mail']; ?></td>
        <td><?php echo $_POST['password']; ?></td>
        <td><?php echo $_POST['number']; ?></td>
        <td><?php echo $_POST['message']; ?></td>
        <td><?php echo $_POST['province']; ?></td>
        <td>
            <?php if (isset($_POST['gender'])) {
                if ($_POST['gender'] == 'Male') {
                    echo "Male";
                } else {
                    echo "Female";
                }
            }
            ?>
        </td>
        <td>
            <?php
            $subject = isset($_POST['subject']) ? $_POST['subject'] : array();
            foreach($subject as $value){
                echo $value . '|';
            }
            ?>
        </td>
    </tr>

</table>
<?php require_once 'templates/footer.php' ?>