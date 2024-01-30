<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw product invoeren</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Vul in:</h2>
    <form action="verwerk-nieuw-product.php" method="post">
        <div class="form-groep">
            <label for="naamProduct">Naam product</label>
            <input type="text" name="naamProduct" id="naamProduct" required>
        </div>
        <div class="form-groep">
             <label for="catagorieProduct">Catagorie product</label>
            <input type="text" name="catagorieProduct" id="catagorieProduct">
        </div>
        <div class="form-groep">
            <label for="prijProduct">Prijs product</label>
            <input type="text" name="prijProduct" id="prijProduct">
        </div>
        <div class="form-groep">
            <label for="merkProduct">Merk product</label>
            <input type="text" name="merkProduct" id="merkProduct">
        </div>
        
        <button type="submit">Maak nieuw product</button>
    </form>
</body>
</html>