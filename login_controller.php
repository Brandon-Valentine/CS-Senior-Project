<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Database connection
$host = 'localhost';
$dbname = 'flashcards_db';
$username = 'guest';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    header("Location: login.php?message=" . urlencode("Database connection failed: " . $e->getMessage()));
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: login.php?message=" . urlencode("Both email and password are required."));
        exit();
    }

    try {
        // Query to validate login credentials
        $stmt = $db->prepare("SELECT user_id FROM users WHERE user_email = :email AND user_name = :password");
        $stmt->execute(['email' => $email, 'password' => $password]);
        $validLogin = $stmt->fetchColumn();

        if ($validLogin) {
            // Set session variables for logged-in user
            $_SESSION["user_id"] = $validLogin;
            $_SESSION["logged_in"] = true;

            // Redirect to index.php after successful login
            header('Location: /CsSeniorProject/Backend/Views/index.php');
            exit();
        } else {
            header("Location: login.php?message=" . urlencode("Invalid email or password."));
            exit();
        }
    } catch (PDOException $e) {
        header("Location: login.php?message=" . urlencode("Error during login: " . $e->getMessage()));
        exit();
    }
}
?>
