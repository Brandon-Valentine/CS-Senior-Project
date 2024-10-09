<?php
$host = 'localhost';
$dbname = 'flashcards_db';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query the database
    $stmt = $pdo->query("SELECT * FROM flashcards");

    // Fetch all results
    $flashcards = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($flashcards); // Display the fetched data
    echo "</pre>";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
