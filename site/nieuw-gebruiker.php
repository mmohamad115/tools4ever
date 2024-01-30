<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw gebruiker</title>
</head>
<body>
    <h2>Vul in:</h2>
    <form action="verwerk-nieuw-gebruiker.php" method="post">
        <div class="form-groep">
            <label for="voornaam">Voornaam</label>
            <input type="text" name="voornaam" id="voornaam" required>
        </div>
        <div class="form-groep">
             <label for="achternaam">Achternaam</label>
            <input type="text" name="achternaam" id="achternaam">
        </div>
        <div class="form-groep">
             <label for="adress">Adress</label>
            <input type="text" name="adress" id="adress">
        </div>
        <div class="form-groep">
             <label for="plaats">Plaats</label>
            <input type="text" name="plaats" id="plaats">
        </div>
        <div class="form-groep">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="form-groep">
            <label for="telefoon_nummer">Telefoon_nummer</label>
            <input type="text" name="telefoon_nummer" id="telefoon_nummer">
        </div>
        <div class="form-groep">
            <label for="wachtwoord">Wachtwoord</label>
            <input type="text" name="wachtwoord" id="wachtwoord">
        </div>
        <button type="submit">Nieuw</button>
    </form>
</body>
</html>