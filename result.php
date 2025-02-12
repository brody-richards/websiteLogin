<?php 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'agent' && $password === 'password123') {
            setcookie('username','agent',strtotime('+24 hours'));
            header('Location: result.php');
            exit;
        } else {
            setcookie('username','agent',time()-3600);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Login | Result</title>
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
        echo "<p>Welcome " . $_COOKIE['username'] . ".</p>";
        echo "<p>Here, you will find the leaked 2025 NHL script, revealing that the <span>Calgary Flames</span> will win the Stanley Cup. Tell no one.</p>";
        echo '<a href="destroy.php">Logout</a>';
        ?>
        </div>
        <?php 
    } else {
        echo "<h1>NHL Script 2025</h1>";
        ?>
        <div>
        <?php
        echo "<p>Verification Failed. Intruder detected.</p>";
        echo '<a href="index.php">Try Again?</a>';
    }
    ?>
        </div>
    </section>
    </main>
</body>
</html>