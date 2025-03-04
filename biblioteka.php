<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteka</title>
</head>
<body>
<header>
<H1>Biblioteka w Książkowicach Małych</H1>

</header>
<nav>
    <H4>Dodaj czytelnika</H4>
    <form action="biblioteka.php" method="post">
    <p>Imie: <input type="text" name="imie"> </p>
    <label for="nazwisko">Nazwisko: </label> <input type="text" name="nazwisko" id="nazwisko"><br><br>
    <label  for="symbol"> Symbol: </label> <input type="number" name="symbol" id="symbol"><br><br>
    <button>Akceptuj</button>
    <!-- SK 1-->
</form>
</nav>
<main>
    <img src="biblioteka.png" alt="biblioteka">
    <H6>ul. Czytelników&nbsp15; Książkowice Małe</H6>
    <a href="mailto:biuro@bip.pl">    <p>Czy masz jakieś uwagi?</p> </a>
</main>
<aside>
    <H4>Nasi czytelnicy:</h4>
    <!-- SKRYPT -->
</aside>
<footer>
    <p>Projekt witryny: NR zdającego (PESEL)</p>
</footer>

</body>
</html>