<?php
$name = "Demo User";
$date = date("Y-m-d");
$time = date("H:i:s");
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Demo</title>
</head>
<body>

    <h1>Welcome to PHP Demo Page 🚀</h1>

    <p>Hello, <?php echo $name; ?>!</p>

    <p>Today's Date: <?php echo $date; ?></p>
    <p>Current Time: <?php echo $time; ?></p>

    <hr>

    <h2>Simple Form</h2>

    <form method="post">
        Enter your name: <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["username"];
        echo "<p>You entered: <b>$user</b></p>";
    }
    ?>

</body>
</html>