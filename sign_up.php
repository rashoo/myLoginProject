<?php
    include_once "header/header.php";
    require_once "database.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['repeat-password'];
    }
    if (empty($username) && empty($password) || empty($confirmPassword)) {
        echo "Fill out all the fields.";
    } elseif ($password !== $confirmPassword) {
        echo "Your passwords do not match";
    } else {
        $statement = $pdo->prepare("INSERT INTO users (Pass, User)
                    VALUES(:Pass, :User)");
        $statement->bindValue(':Pass', $password);
        $statement->bindValue(":User", $username);
        $statement->execute();
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
