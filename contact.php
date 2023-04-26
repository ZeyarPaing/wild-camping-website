<?php
require "utils.php";
require_once "db_connection.php";

// if not login 
$is_loginned = false;
$user = get_user();
$user_info = null;
if ($user) {
    $is_loginned = true;

    if ($user['role'] == "user") {
        $sql = "SELECT * FROM user WHERE userid = {$user['id']}";
        $result = mysqli_query($connection, $sql);
        $user_info = mysqli_fetch_assoc($result);
    }
}

// query login user


if ($is_loginned && $_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo '<script>alert("Message sent successfully.");</script>';
    } else {
        echo '<script>alert("Message failed to send.");</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
metaHead("Contact Us", "Contact Us");
?>

<body>
    <?php
    renderHeader();
    ?>
    <main>
        <section class="container contain-y auth">
            <form name="contact" method="POST">
                <?php
                if (!$is_loginned) {
                    echo '<h3>Please login to contact us.</h3>';
                } else {
                    echo "
                <fieldset>
                    <legend>
                        <h1>Contact </h1>
                    </legend>

                    <label>
                        <p>Name *</p>
                        <input name='name' value='{$user_info['username']}' required />
                    </label>
                    <label>
                        <p>Email *</p>
                        <input name='email' type='email' value='{$user_info['email']}' required />
                    </label>
                    <label>
                        <p>Message *</p>
                        <textarea name='message' required></textarea>
                    </label>
                    <button class='btn btn-primary' type='submit'>Submit</button>
                    <small class='privicy-link'>By submitting this form, you are agreeing to our <a href='privacy-policy.php'>Privacy Policy</a>.</small>
                </fieldset>
                ";
                } ?>
            </form>
        </section>
    </main>

    <?php
    renderFooter();
    ?>
</body>

</html>