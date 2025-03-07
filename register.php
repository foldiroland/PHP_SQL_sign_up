<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="content">
            <form action="feldolgoz_R.php" method="POST">
            <h1>Regisztráció</h1>    
            <label>Név: </label><br>
            <input type="text" name="name" required><br><br>
            <label>Jelszó: </label><br>
            <input type="password" name="password" required><br><br>
            <label>Email: </label><br>
            <input type="text" name="email" required><br><br>
            <button type="submit">Regisztráicó</button><br>
            <p><a href="login.php">Már van fiókod?</a></p>
            </form>
        </div>
    </section>
</body>
</html>