<!-- App/Views/flashcards/create.php -->
<!-- Xabien - file for creating a form for adding new flashcards -->

<h1>Create Flashcard</h1>
<form action="/create" method="post">
    <label>Question:</label>
    <input type="text" name="question">
    <br>
    <label>Answer:</label>
    <input type="text" name="answer">
    <br>
    <button type="submit">Submit</button>
</form>
