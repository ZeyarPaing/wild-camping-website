<?php
require "utils.php";
require_once "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
                <fieldset>
                    <legend>
                        <h1>Contact </h1>
                    </legend>

                    <label>
                        <p>Name *</p>
                        <input name="name" required />
                    </label>
                    <label>
                        <p>Email *</p>
                        <input name="email" type="email" required />
                    </label>
                    <label>
                        <p>Message *</p>
                        <textarea name="message" required></textarea>
                    </label>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <small class="privicy-link">By submitting this form, you are agreeing to our <a href="privacy-policy.php">Privacy Policy</a>.</small>
                </fieldset>
            </form>
        </section>
    </main>

    <?php
    renderFooter();
    ?>
</body>

</html>