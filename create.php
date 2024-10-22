<!-- App/Views/create.php -->
<!-- Xabien - file for creating a form for adding new flashcards -->

<h1>Create Flashcard</h1>
<form action="/CsSeniorProject/App/Controllers/create_flashcard.php" method="post">
<fieldset>

<div class="login-box">
    <label>Question:</label>
    <input type="text" name="question">
    <br>
    <label>Answer:</label>
    <input type="text" name="answer">
    <label for="email">Number of Cards: </label>
    <select name="status" id="cars">
    <option value="One">1</option>
    <option value="Two">2</option>
    <br>
    <button type="submit">Submit</button>
</fieldset>
</form>
