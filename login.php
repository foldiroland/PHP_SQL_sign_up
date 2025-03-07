<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
        <div class="content_L">
            <form action="feldolgoz_R.php" method="POST">
            <h1>Bejelentkezés</h1>    
            <label>Név: </label><br>
            <input type="text" name="name" required><br><br>
            <label>Jelszó: </label><br>
            <input type="password" name="password" required><br><br>
            <button type="submit">Bejelentkezés</button>
            <p><a href="register.php">Még nincs fiókod? Regisztrálj!</a></p>
            </form>
        </div>
    </section>
</body>
</html>