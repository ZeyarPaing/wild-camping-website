<?php
include_once 'utils.php';
include_once 'db_connection.php';

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
    $statement = mysqli_prepare($connection, "SELECT email FROM user WHERE email = ? UNION SELECT email FROM admin WHERE email = ?");
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
    $dob = $_POST["dateofbirth"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $phoneno = $_POST["phoneno"];
    $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $cpass = password_hash($_POST["cpassword"], PASSWORD_DEFAULT);
    if ($_POST["password"] != $_POST["cpassword"]) {
        echo '<script>alert("Password not match");window.navigation.back();</script>';
    }

    if (valid_email($email)) {
        $statement = mysqli_prepare($connection, "INSERT INTO user (username,email,password,dateofbirth,gender,address,phoneno) VALUES(?,?,?,?,?,?,?)");
        mysqli_stmt_bind_param($statement, "sssssss", $username, $email, $pass, $dob, $gender, $address, $phoneno);
        mysqli_stmt_execute($statement);
        echo '<script>alert("Registration Success. You can login now."); window.location.assign("login.php")</script>';
    } else {
        echo '<script>alert("Email already exist");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
metaHead("Register", "Register your account");
?>

<body>

    <?php
    renderHeader();
    ?>

    <main>
        <section class="auth contain-y contain">
            <form class="register" method="POST">
                <fieldset>
                    <legend>
                        <h1>Register </h1>
                    </legend>
                    <small>Please enter your information to register.</small>
                    <label>
                        <p>Username</p>
                        <input type="text" name="username" required maxlength="30" pattern="[a-zA-Z][a-zA-Z ]+" autofocus />
                    </label>
                    Email <input type="email" name="email" required maxlength="50" />

                    <label>
                        <p>Password</p>
                        <input type="password" name="password" required maxlength="20" pattern="\w+" />
                    </label>
                    <label>
                        <p>Retype Password</p>
                        <input type="password" name="cpassword" required maxlength="20" />
                    </label>
                    <label>
                        <p>Date of Birth</p>
                        <input type="date" name="dateofbirth" required />
                    </label>
                    <label>
                        <p>Gender</p>
                        <label>
                            Male: <input type="radio" name="gender" value="Male" required />
                        </label>
                        <label>
                            Female: <input type="radio" name="gender" value="Female" required />
                        </label>
                    </label>

                    <label>
                        <p>Address</p>
                        <textarea type="text" name="address" required maxlength="100" title="Address"></textarea>
                    </label>
                    <label>
                        <p>Phone No</p>
                        <input type="text" name="phoneno" required maxlength="30" pattern="[0-9][0-9\-, ]+" title="Phone no only allow number, hyphen and comma." />
                    </label>

                    <button class="btn btn-primary" type="submit" name="create">Register</button>
                </fieldset>
            </form>
        </section>
    </main>
</body>

</html>