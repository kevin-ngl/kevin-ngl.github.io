<?php 
    include_once 'header.php';
?>
    <div class="transisi">
    <section class="signup-form">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="post">
            <div class="mb-3">
            <input type="text" name="name" placeholder="Full Name...">
            </div>
            <div class="mb-3">
            <input type="text" name="email" placeholder="Email...">
            </div>
            <div class="mb-3">
            <input type="text" name="uid" placeholder="Username...">
            </div>
            <div class="mb-3">
            <input type="Password" name="pwd" placeholder="Password...">
            </div>
            <div class="mb-3">
            <input type="Password" name="pwdrepeat" placeholder="Repeat Password...">
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields</p>";
            }
            else if ($_GET["error"] == "invaliduid") {
                echo "<p>Choose a proper username!</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<p>Choose a proper email</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Password doesn't match!</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again!</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username already taken!</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>You have signed up!</p>";
            }
        }
    ?>
    </section>
    </div>

<?php 
    include_once 'footer.php';
?>