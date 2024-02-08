

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database configuration
    $host = '127.0.0.1';
    $username = 'root';
    $password = '';
    $database = 'login';

    // Create a database connection
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the values from the registration form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $class = $_POST['class'];
    $course = $_POST['course'];

    // Prepare and execute an SQL statement to insert the data into the database
    $stmt = $conn->prepare("INSERT INTO students (firstname, lastname, email, password, class, course) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis", $first_name, $last_name, $email, $password, $class, $course);

    if ($stmt->execute()) {
        header("Location: login.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Handle cases where the form was not submitted via POST
    echo "Form not submitted.";
}
?>



