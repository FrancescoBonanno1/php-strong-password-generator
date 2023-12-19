<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-primary d-flex align-center flex-column">
    <h1>STRONG PASSWORD GENERATOR</h1>
    <H2> GENERA UNA PASSWORD SICURA</H2>
    <div class="bg-light container-lg d-flex flex-column ">
        <form action="password.php" method="get">
        <span>Lunghezza password :</span>
        <input class="col-3" type="text" placeholder="inserire un numero" name="number">
        <span> consenti ripetizioni di caratteri :</span>
        <input type="radio" id="positive" name="yes" value="1">
        <label for="positive">Sì</label>
        <input type="radio" id="negative" name="no" value="0">
        <label for="negative">No</label>
        <input type="checkbox" id="numbers" name="numeri" value="0">
        <label for="numbers">Numeri</label><br>
        <input type="checkbox" id="letters" name="lettere" value="1">
        <label for="letters">Lettere</label><br>
        <input type="checkbox" id="symbols" name="simboli" value="2">
        <label for="symbols">Simboli</label><br><br>
        <button class="bg.primary col-1">Invia</button>
    </form>
    </div>
</body>

</html>