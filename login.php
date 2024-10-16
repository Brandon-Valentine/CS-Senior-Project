<!DOCTYPE html>
<html>

<h1>Flashcard Crafter</h1> 


<form method="post" action=login.php?action=login>
<fieldset>

<div class="user-box">
    
    
    <input type="text" id="email" name="email" value="" size="64"><br>
    <label for="email">Email: </label>
    </div>
    <div class="user-box">
    
    <input type="password" name="password" value=""><br>
    <label for="password">Password: </label>
    </div>

    <p><i><?= $message; ?>
    <hr>
    <input type="reset" value="Reset">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value="Login">
</fieldset>
</form>
<p><a href="Backend\Views\index.php">Flashcard view</a>
<html>