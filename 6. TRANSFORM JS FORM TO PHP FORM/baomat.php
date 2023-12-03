<?php
function logIn() {
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $password = isset($_POST['password']) ? $_POST['password'] : array();

        // Mã hóa mật khẩu
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if ($password == "1234") {
            echo 'success';
        } else {
            echo 'wrong password';
        }
}
}
logIn();
?>