<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .user-box {
            margin-bottom: 10px;
        }
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>

<h1>Flashcard Crafter</h1>

<form method="post" action="login_controller.php?action=login">
    <fieldset>
        <div class="user-box">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" autocomplete="email" size="64">
        </div>
        <div class="user-box">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" autocomplete="current-password">
        </div>
        <p><i><?= htmlspecialchars($_GET['message'] ?? 'Please enter your login credentials'); ?></i></p>
        <hr>
        <input type="reset" value="Reset">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Login">
    </fieldset>
</form>
<p><a href="Backend/Views/index.php">Flashcard view</a></p>

</body>
</html>
