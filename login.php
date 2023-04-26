<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link preload href="https://api.fontshare.com/v2/css?f[]=clash-display@200,400,500,600&display=swap" rel="stylesheet" />
    <link preload href="https://api.fontshare.com/v2/css?f[]=200,300,400&display=swap" rel="stylesheet" />
    <link preload rel="stylesheet" href="styles.css" />
</head>

<?php
session_start();
require_once 'db_connection.php';
require_once "utils.php";
$err_msg = "";

$_SESSION["login_fail_attempt"] = 0;

// Check if the user is already logged in
if (isset($_SESSION["adminid"]) || isset($_SESSION["customerid"])) {
    echo '<script>alert("You are already logged in.");</script>';
    header("Location: index.php");
    exit;
}

function isUserLockedOut()
{
    if (isset($_SESSION['lockout']) && $_SESSION['lockout']['attempts'] >= 3) {

        $lockoutTime = $_SESSION['lockout']['time'];
        $currentTime = time();
        $timeDifference = $currentTime - $lockoutTime;
        if ($timeDifference < 100) { // 10 minutes
            return true;
        } else {
            unset($_SESSION['lockout']);
            return false;
        }
    } else {
        return false;
    }
}

function logIncorrectLogin()
{
    global $err_msg;
    if (isset($_SESSION['lockout'])) {
        $_SESSION['lockout']['attempts']++;
    } else {
        $_SESSION['lockout']['attempts'] = 1;
    }
    $_SESSION['lockout']['time'] = time();
    $err_msg = "Login failed: Incorrect credentials. </br>
    You will be locked out for 10 minutes after 3 failed attempts. </br> 
    Attempt left: " . (3 - $_SESSION['lockout']['attempts']) . "";
}


function resetLockoutStatus()
{
    if (isset($_SESSION['lockout'])) {
        unset($_SESSION['lockout']);
    }
}


if (isset($_POST["login"])) {
    $memail = trim($_POST["email"]);
    $mpassword = $_POST["password"];

    if (isUserLockedOut($username)) {
        run_js("alert('You are locked out. Please try again after 10 minutes.')");
        // header("Location: login.php");
        exit();
    }

    // Check if the user exists in the database
    $statement = mysqli_prepare($connection, "SELECT adminid, password FROM admin WHERE email = ?");
    mysqli_stmt_bind_param($statement, "s", $memail);
    mysqli_stmt_execute($statement);
    mysqli_stmt_bind_result($statement, $id, $pwd);
    if (mysqli_stmt_fetch($statement)) {
        if (password_verify($mpassword, $pwd)) {
            $_SESSION["adminid"] = $id;
            $err_msg = "";
            header("Location: index.php");
        } else {
            logIncorrectLogin();
        }
    } else {
        mysqli_stmt_close($statement);
        $statement = mysqli_prepare($connection, "SELECT customerid, customername, password FROM customer WHERE email = ?");
        mysqli_stmt_bind_param($statement, "s", $memail);
        mysqli_stmt_execute($statement);
        mysqli_stmt_bind_result($statement, $id, $cname, $pwd);
        if (mysqli_stmt_fetch($statement) && password_verify($mpassword, $pwd)) {
            $_SESSION["customerid"] = $id;
            $_SESSION["customername"] = $cname;
            $err_msg = "";
            header("Location: information.php");
        } else {
            logIncorrectLogin();
        }
    }
}
?>

<body>
    <header>
        <nav class="container">
            <a href="index.php" class="logo">GWSC</a>
            <ul>
                <?php
                get_nav_items();
                ?>
            </ul>
        </nav>
    </header>

    <main>
        <section class="auth contain-y container">
            <div>
                <form class="login" method="POST">
                    <fieldset>
                        <legend>
                            <h1>Login</h1>
                        </legend>
                        <small>Please enter your registered email and password to login.</small>
                        <label>
                            <p>Email</p>
                            <input type="email" name="email" required maxlength="45" title="Enter your registered email address" placeholder="example@gmail.com" autofocus />
                        </label>
                        <label>
                            <p>Password</p>
                            <input type="password" name="password" required maxlength="20" title="Enter your password to log in." placeholder="Password" />
                        </label>
                        <button class="btn btn-primary" type="submit" name="login">Login </button>
                        <div class="error">
                            <?php
                            echo $err_msg;
                            ?>
                        </div>
                    </fieldset>
                </form>
                <p class="to-next-auth">Don't have an account? <a href="register.php">Register</a></p>

            </div>
        </section>
    </main>
</body>

</html>