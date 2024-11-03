<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data here
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Perform any necessary validation or data manipulation

    // Display a success message
    echo "Form submitted successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Handling Example</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>