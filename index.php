

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Login</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <main>
        <section>

            <?php 

                if (isset($_COOKIE['username'])) {
                echo "<h1>NHL Script 2025</h1>";
                ?>
                <div>
                <?php 
                echo "<p>Welcome back ". $_COOKIE['username']."</p>";
                echo "<p>You are already logged in.</p>";
                echo '<a href="result.php">View 2025 NHL Script</a>';
                ?>
                </div>
                <?php 
                } else {

                ?>

            <h1>NHL Script 2025</h1>
            <p>Please enter your secret information below to view.</p>
            
            <div class="login">
                <form action="result.php" method="post" name="loginForm">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" maxlength="15" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" maxlength="15" required>

                    <input type="submit" value="Login">
                </form>
            </div>
        </section>
    </main>
<?php } ?>
</body>
</html>