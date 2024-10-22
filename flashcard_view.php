<!-- app/views/index.php -->
 <!-- Xabien - Simple view file for displaying the flashcards -->
 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="flashcard.css">
</head>
<body>
 <h1>Flashcards</h1>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1>Front Side</h1>
    </div>
    <div class="flip-card-back">
      <h2>Back Side</h2>
    </div>
  </div>
</div>
<ul>
    <?php foreach ($flashcards as $flashcard): ?>
        <li><?php echo $flashcard['question']; ?> - <?php echo $flashcard['answer']; ?></li>
    <?php endforeach; ?>
</ul>
<a href="/CsSeniorProject/App/Views/create.php">Create New Flashcard</a>
    </body>
    </html>