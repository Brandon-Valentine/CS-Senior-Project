<?php
// App/Controllers/FlashcardController.php
// Xabien - this file is the controller logic

require_once '../models/Flashcard.php';

class FlashcardController {
    private $flashcardModel;

    public function __construct($pdo) {
        $this->flashcardModel = new Flashcard($pdo);
    }

    public function index() {
        $flashcards = $this->flashcardModel->getAllFlashcards();
        include '../views/flashcards/index.php';
    }

    public function create($question, $answer) {
        $this->flashcardModel->createFlashcard($question, $answer);
        header('Location: /');
    }
}
?>
