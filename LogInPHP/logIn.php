<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In PHP</title>
    <link rel="stylesheet" href="logIn.css?=<?php echo time(); ?>">
</head>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <header>Log In</header>
    <div class="cont-input">
        <input type="text" name="username" placeholder="Enter username...">
        <input type="password" name="password" placeholder="Enter password...">
        <button type="submit" name="submit">Log in</button>
        <button type="clear" class="clear">Clear</button>
    </div>
</form>

<div class="output">
    <h2> Output here </h2>
<?php

    class Users{
       protected $username;
       protected $password;

        public function __construct($username, $password){
            $this->username = $username;
            $this->password = $password;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getPassword() {
            return $this->password;
        }
    }

    $accounts = array(
        "Account1" => new Users("myUser1", "password1"),
        "Account2" => new Users("myUser2", "password2"),
        "Account3" => new Users("myUser3", "password3")
    );

    if(isset($_POST["submit"])){
        $found = false;

        foreach ($accounts as $key => $user){
            if ($_POST["username"] == $user->getUsername() && $_POST["password"] == $user->getPassword()){
                echo "Successfully Logged in!<br>";
                $found = true;
                break;
            }
        }

            if (!$found) {
                echo "Username and password not found!<br>";
            }
    }
?>
</div>

</body>
</html>