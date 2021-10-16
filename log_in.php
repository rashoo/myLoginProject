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