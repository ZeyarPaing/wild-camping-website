<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link preload href="https://api.fontshare.com/v2/css?f[]=clash-display@200,400,500,600&display=swap" rel="stylesheet" />
    <link preload href="https://api.fontshare.com/v2/css?f[]=200,300,400&display=swap" rel="stylesheet" />
    <link preload rel="stylesheet" href="styles.css" />
</head>

<?php
include_once 'mysqli_connection.php';
include_once 'utils.php';
$errormessage = "";
$username = "";
$email = "";
$pass = "";
$dob = "";
$gender = "";
$address = "";
$phoneno = "";

function valid_email($email)
{
    global $connection;
    $statement = mysqli_prepare($connection, "SELECT email FROM customer WHERE email = ? UNION SELECT email FROM admin WHERE email = ?");
    mysqli_stmt_bind_param($statement, "ss", $email, $email);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    if (mysqli_stmt_num_rows($statement) > 0) {
        mysqli_stmt_close($statement);
        return FALSE;
    }
    return TRUE;
}

if (isset($_POST["create"])) {
    $username = $_POST["username"];
    $email = trim($_POST["email"]);
    $dob = $_POST["birthday"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $phoneno = $_POST["phoneno"];
    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

    if (valid_email($email)) {
        $statement = mysqli_prepare($connection, "INSERT INTO customer(customername,email,password,dateofbirth,gender,address,phoneno) VALUES(?,?,?,?,?,?,?)");
        mysqli_stmt_bind_param($statement, "sssssss", $username, $email, $pass, $dob, $gender, $address, $phoneno);
        mysqli_stmt_execute($statement);
        echo '<script>alert("Customer Registration Success");location.assign("index.php");</script>';

        $errormessage = "";
        $username = "";
        $email = "";
        $pass = "";
        $dob = "";
        $gender = "";
        $address = "";
        $phoneno = "";
    } else {
        echo '<script>alert("Email already exist");location.assign("index.php");</script>';
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
        <section class="auth contain-y contain">
            <form class="register" method="POST">
                <fieldset>
                    <legend>User Registration</legend>

                    User Name <input type="text" name="username" value="<?php echo $username; ?>" required maxlength="30" pattern="[a-zA-Z][a-zA-Z ]+" title="Customer name only in letter with space" autofocus /><br><br>
                    Email <input type="email" name="email" value="<?php echo $email; ?>" required maxlength="50" title="Valid email to use in log in" /><br><br>
                    Password <input type="password" name="pass" value="" required maxlength="20" pattern="\w+" title="Password" onchange="frm.cpassword.pattern = this.value;" /><br><br>
                    Retype Password <input type="password" name="cpassword" value="" required maxlength="20" title="Retype password same as above password" /><br><br>
                    Date of Birth <br><input type="text" name="birthday" id="birthday" value="" /><br><br>
                    Gender <input type="radio" name="gender" <?php if (isset($sex) && $sex == "female") echo "checked"; ?> value="female"> Female
                    <input type="radio" name="gender" <?php if (isset($sex) && $sex == "male") echo "checked"; ?> value="male"> Male <br><br>
                    Address <textarea name="address" required maxlength="100"><?php echo $address; ?></textarea><br><br>
                    Phone No <input type="text" name="phoneno" value="<?php echo $phoneno; ?>" required maxlength="30" pattern="[0-9][0-9\-, ]+" title="Phone no only allow number, hyphen and comma." /><br><br>
                    <input type="submit" value="Create" name="create" style="margin-right: 7px;" />
                    <input type="submit" value="Cancel" name="cancel" formnovalidate />

                </fieldset>
            </form>
        </section>
    </main>
</body>

</html>