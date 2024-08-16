<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Example</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    setcookie('user_name', $name, time() + (86400 * 30), "/"); 
    echo "Cookie has been set.";
}
?>
