<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form method="POST" name="register" action="valid.php">
        <label for="username">Username: </label>
        <input type="text" id="username" name="username"><br><br>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name"><br><br>
        <label for="last_name">Last Name: </label>
        <input type="text" id="last_name" name="last_name"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <label for="confirm_password">Confirm Password: </label>
        <input type="password" id="confirm_password" name="confirm_password"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="gender">Gender: </label>
        <input type="radio" id="male" name="gender" value="Male"><label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female"><label for="female">Female</label>
        <input type="radio" id="others" name="gender" value="Others"><label for="others">Others</label><br><br>
        <input type="checkbox" id="iagree" name="iagree">
        <label for="iagree">I Accept Terms and Conditions </label><br>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>
