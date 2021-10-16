<?php
    include_once "header/header.php";
    require_once "database.php";

    $username = '';
    $password = '';
    $confirmPassword = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['repeat-password'];

    if (empty($username)) {
        echo "Username cannot be empty!<br>";
    } elseif (empty($password || $confirmPassword)) {
        echo "Password field cannot be empty<br>";
    } elseif (!empty($username && $password || empty($confirmPassword))) {
        echo "Confirm password cannot be empty!";
    }

}
?>

<title>Signup</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
    <div class="user-input">

        <input type="text" name="username" size="30" placeholder="Username"/><br><br>
        <input type="password" name="password" size="30" placeholder="Password"/><br><br>
        <input type="password" name="repeat-password" size="30" placeholder="Repeat Password"/><br><br>
        <button class="register-button" type="submit">Register</button>

    </div>
</form>
