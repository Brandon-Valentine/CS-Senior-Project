<?php
// App/Models/Flashcard.php
// Xabien - This file creates a basic Flashcard model

class Flashcard {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllFlashcards() {
        $stmt = $this->pdo->query("SELECT * FROM flashcards");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createFlashcard($question, $answer) {
        $stmt = $this->pdo->prepare("INSERT INTO flashcards (question, answer) VALUES (?, ?)");
        $stmt->execute([$question, $answer]);
    }
}
?>
