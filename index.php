<!-- App/Views/index.php -->
 <!-- Xabien - Simple view file for displaying the flashcards -->

 <h1>Flashcards</h1>
<ul>
    <?php foreach ($flashcards as $flashcard): ?>
        <li><?php echo $flashcard['question']; ?> - <?php echo $flashcard['answer']; ?></li>
    <?php endforeach; ?>
</ul>
<a href="/create">Create New Flashcard</a>
