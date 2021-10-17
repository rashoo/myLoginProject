<?php
    include_once "header/header.php";
    require_once "database.php";
?>
<title>Login</title>

<div class="user-input">
    <form method="post">
        <input type="text" name="username" size="30" placeholder="Username" /><br><br>
        <input type="password" name="password" size="30" placeholder="Password" /><br><br>
        <button class="login-button" type="button">Login</button>
    </form>
</div>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
    } try {
       /* $statement = $pdo->prepare("SELECT * FROM 'loginform' WHERE (username, password) VALUES(:user, :pass)");
        $statement->bindParam('user', $username, PDO::PARAM_STR);
        $statement->bindValue('pass', $password, PDO::PARAM_STR);
        $statement->execute();*/
        $statement = $pdo->prepare('SELECT * FROM users');
        $statement->execute();
        print("Rows");
        $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
        print_r($result);

} catch (PDOException $e) {
        echo "Error: " .$e->getMessage();
    }
?>