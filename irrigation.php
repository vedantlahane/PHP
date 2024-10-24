<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irrigation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nameE = $emailE = $ageE = ""; 
$name = $email = $age = "";    
$successMsg = "";

function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;

    if (empty($_POST["name"])) {
        $nameE = "Name is required";
        $isValid = false;
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameE = "Only letters and spaces allowed";
            $isValid = false;
        }
    }

    if (empty($_POST["email"])) {
        $emailE = "Email is required";
        $isValid = false;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailE = "Invalid email format";
            $isValid = false;
        }
    }

    if (empty($_POST["age"])) {
        $ageE = "Age is required";
        $isValid = false;
    } else {
        $age = test_input($_POST["age"]);
        if (!is_numeric($age) || $age < 18 || $age > 100) {
            $ageE = "Please enter a valid age between 18 and 100";
            $isValid = false;
        }
    }

    if ($isValid) {
        $sql = "INSERT INTO registrations (name, email, age) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $name, $email, $age);

        if ($stmt->execute()) {
            header("Location: " . $_SERVER["PHP_SELF"] . "?success=1");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Irrigation Labor Registration Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: white;
            padding: 30px;
            max-width: 400px;
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 0.9rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #4CAF50;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            padding: 12px;
            font-size: 1rem;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 0.8rem;
            margin-top: 5px;
        }

        .success {
            color: green;
            font-size: 1rem;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Irrigation Labor Registration Form</h2>
        
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <p class="success">Registration successful!</p>
        <?php endif; ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label>Candidate name:</label>
                <input type="text" name="name" value="<?php echo $name;?>">
                <span class="error"><?php echo $nameE;?></span>
            </div>

            <div class="form-group">
                <label>Candidate email:</label>
                <input type="email" name="email" value="<?php echo $email;?>">
                <span class="error"><?php echo $emailE;?></span>
            </div>

            <div class="form-group">
                <label>What is your age?</label>
                <input type="number" name="age" value="<?php echo $age;?>">
                <span class="error"><?php echo $ageE;?></span>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
