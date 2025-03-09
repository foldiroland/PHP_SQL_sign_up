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
            <input id="input_1" type="text" name="name" required placeholder="  Ird be a neved"><br><br>
            <input id="input_2" type="password" name="password" required placeholder="  Ird be a jelszavad"> <br><br>
            <button class="button" type="submit">Bejelentkezés</button>
            <p><a href="register.php">Még nincs fiókod? <b id="white">Regisztrálj!</b></a></p>
            </form>
        </div>
    </section>
</body>
</html>