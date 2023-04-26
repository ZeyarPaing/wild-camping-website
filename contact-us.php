<?php
require "utils.php";
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
        <form class="p-5 lg:p-10 rounded-lg border border-gray-900 max-w-md w-full space-y-5 lg:my-10 mx-auto relative z-10 bg-black/25 backdrop-blur-lg" method="POST">
            <h1 class="section-title !mb-10">Contact Us</h1>
            <fieldset>
                <label for="name">Full Name*</label>
                <div class="field">
                    <input id="name" name="name" required />
                </div>
            </fieldset>
            <fieldset>
                <label for="email">Email*</label>
                <div class="field">
                    <input id="email" name="email" type="email" required />
                </div>
            </fieldset>
            <fieldset>
                <label for="message">Message*</label>
                <div class="field h-40 rounded-xl">
                    <textarea id="message" name="message" class="resize-none w-full" required></textarea>
                </div>
            </fieldset>
            <button class="button w-full !mt-10" type="submit">Submit</button>
        </form>
    </main>

    <?php
    renderFooter();
    ?>
</body>

</html>