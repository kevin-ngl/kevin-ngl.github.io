<?php 
    include_once 'header.php';
?>
    <div class="transisi">
        <section class="login-form">
            <h2>Login</h2>
            <form action="includes/login.inc.php" method="post">
                <div class="mb-3">
                <input type="text" name="uid" placeholder="Username/Email...">
                </div>
                <div class="mb-3">
                <input type="Password" name="pwd" placeholder="Password...">
                </div>
                <button class="btn btn-primary" type="submit" name="submit">Log In</button>
            </form>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect login information!</p>";
                }
            }
            ?>
        </section>
    </div>

<?php 
    include_once 'footer.php';
?>