<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'flashcard_db'); // Update with your database info

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$question = $_POST['question'];
$answer = $_POST['answer'];

// Insert into the database
$sql = "INSERT INTO flashcards (question, answer) VALUES ('$question', '$answer')";

if ($conn->query($sql) === TRUE) {
    echo "Flashcard created successfully!";
    echo '<br><a href="/CsSeniorProject/App/Views/create.php"><button>Back to Create Flashcard</button></a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
