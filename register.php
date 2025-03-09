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
            <input id="input_1" type="text" name="name" required placeholder="  Ird be a neved"><br><br>
            <input id="input_2" type="password" name="password" required placeholder="Ird be a jelszavadat"><br><br>
            <input id="input_3" type="text" name="email" required placeholder="ird be az email cimedet"><br><br>
            <button type="submit">Regisztráicó</button><br>
            <p><a href="login.php">Már van fiókod? <b id="white">Jelentkezz be!</b></a></p>
            </form>
        </div>
    </section>
</body>
</html>