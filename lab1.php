<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $name = trim($name); 
    $email = strtolower(trim($email)); 
    $message = htmlspecialchars(trim($message)); 


    echo "<h2>Sanitized Output</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";
}
?>


<form method="post" action="">
    <label>Name:</label>
    <input type="text" name="name" required><br><br>
    
    <label>Email:</label>
    <input type="email" name="email" required><br><br>
    
    <label>Message:</label><br>
    <textarea name="message" rows="5" cols="30" required></textarea><br><br>
    
    <input type="submit" value="Submit">
</form>

</body>
</html>