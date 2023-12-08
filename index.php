<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <title>SmartCar - wypożyczalnia samochodów</title>
</head>
<body onload="showSlides()">
    <header id="home">
        <div id="logo"><a href="index.php"><img src="img/logo.png" alt="logo"></a></div>
        <menu>
            <ul>
                <li><span href="index.php" onclick="toSmth(1)">Strona główna</span></li>
                <li><a href="Oferta.php">Oferta</a></li>
                <li><span onclick="toSmth(2)">Informacje</span></li>
                <li><span onclick="toSmth(3)">Kontakt</span></li>
            </ul>
        </menu>
    </header>
    <main>
        <div id="vid"><video src="img/car-cut.mp4" width="100%" autoplay muted loop> //https://www.youtube.com/watch?v=3su8P5Z8NFk
            <source  type="video/mp4"> 
            </video>
            <div id="mySlider">
                <div class="slides">
                    Najlepsze samochody w Polsce<br />
                    dostępne od ręki w każdym miejscu<br />
                    w dobrej cenie
                </div>
                <div class="slides">
                    Rozmaita oferta<br />
                    wielu pojazdów,<br />
                    w tym elektrycznych
                </div>
                <div class="slides">
                    Niezawodna obsługa<br />
                    prowadzona przez wykfalifikowanych<br />
                    pracowników
                </div>
                <div class="dot-container">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div id="info">
            <div class="infoWin">
                <h3>Samochody Osobowe</h3>
                <ul>
                    <li>Audi A6</li>
                    <li>Audi A4</li>
                    <li>Citroen C5</li>
                    <li>Volkswagen Arteon</li>
                </ul>
                <a href="Oferta.php">Zobacz ofertę...</a>
            </div>
            <div class="infoWin">
                <h3>Samochody Sportowe</h3>
                <ul>
                    <li>Nissan GTR R35</li>
                    <li>Toyota Supra mk5</li>
                    <li>Audi R8</li>
                    <li>Porsche 911</li>
                </ul>
                <a href="Oferta.php">Zobacz ofertę...</a>
            </div>
            <div class="infoWin">
                <h3>Samochody Elektryczne</h3>
                <ul>
                    <li>Volkswagen e-UP</li>
                    <li>Tesla Model S</li>
                    <li>Audi e-Tron GT</li>
                    <li>Porsche Taycan Turbo S</li>
                </ul>
                <a href="Oferta.php">Zobacz ofertę...</a>
            </div>
        </div>
        <div id="about">
            <h1>Informacje</h1>
            <div id="why">
                <h2>Dlaczego my?</h2>
                <div>
                    <ul>
                        <li>Posiadamy nowe samochody</li>
                        <li>Zapewniamy atrakcyjne ceny</li>
                        <li>Nasze samochody są bezpieczne</li>
                        <li>Nasze samochody są stale serwisowane</li>
                        <li>To ty wybierasz godzinę i miejsce odbioru</li>
                        <li>Jesteśmy dostępni w całej Polsce</li>
                    </ul>
                </div>
            </div>
            <div id="obs">
                <div class="about">
                    Dla pracowników firmy SmartCar najważniejszy jest Klient, dlatego też stale wychodzimy naprzeciw oczekiwaniom naszych Klientów. Wszystko to z myślą o owocnej i długoletniej współpracy. Mamy na uwadze aktualne trendy i potrzeby. Stajemy na wysokości zadania i oferujemy najnowsze modele samochodów dające użytkownikom gwarancję bezpieczeństwa i komfortu jazdy.
                    Aby zapewnić jak najlepszą obsługę, zatrudniamy ponad 100 specjalistów, którzy zapewniają naszym Klientom profesjonalizm i wyjście nawet z nieoczekiwanych sytuacji. Jesteśmy elastyczni zarówno pod względem zróżnicowanej floty jak i warunków wynajmów. 
                </div>
                <h2>Obsługa</h2>
            </div>
            <div id="qual">
                <h2>Najwyższa jakość</h2>
                <div class="about">
                    Wypożyczalnia samochodów SmartCar cechuje się wysoką jakością oferowanych samochodów. Wszystkie nasze pojazdy są nowe: najstarszy model ma 2 lata. Ze szczególną starannością dbamy o sprawność techniczną pojazdów, dlatego stale przeprowadzamy przeglądy techniczne w autoryzowanych serwisach. 
                </div>
            </div>
        </div>
        <h1 id="con">Kontakt</h1>
        <div id="contact">
            <form id="contactForm" action="mailto:" methid="post" enctype="text/plain">
                <h1>Wyślij wiadomość E-mail</h1>
                E-mail:<br />
                <input type="email" id="mail" name="mail"><br />
                Temat:<br />
                <input type="text" id="title" name="Title"><br />
                Treść wiadomości:<br />
                <textarea type="textarea" id="msg" name="Message"></textarea><br />
                <input type="submit" id="btn" value="Wyślij">
            </form>
            <h2>Lub</h2>
            <p id="opt1" onclick="contactSwtch(1)">Wyślij wiadomość E-mail</p>
            <p id="opt2" onclick="contactSwtch(2)">Zadzwoń do nas</p>
            <div id="phone">
                <h1>Zadzwoń</h1>
                <h3>Warszawa:</h3>
                <ul>
                    <li>+48 123 123 123</li>
                    <li>+48 124 123 123</li>
                    <li>+48 125 123 123</li>
                </ul>
                <h3>Rzeszów:</h3>
                <ul>
                    <li>+48 123 124 123</li>
                    <li>+48 124 125 123</li>
                    <li>+48 125 126 123</li>
                </ul>
                <h3>Kraków:</h3>
                <ul>
                    <li>+48 123 124 124</li>
                    <li>+48 124 125 125</li>
                    <li>+48 125 126 127</li>
                </ul>
                <h3>Toruń:</h3>
                <ul>
                    <li>+48 123 312 124</li>
                    <li>+48 124 321 125</li>
                    <li>+48 125 421 127</li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <h3>
            Projekt:<br />
            Bazy Danych, <br />
            Tworzenie Stron Internetowych
        </h3>
        <h3>
            Autor: Nikodem Szubierski<br />
        </h3>
        <h3>
            Materiały:<br />
            Zakładka <a href="https://carnet.pl/o-firmie/wypozyczalnia-carnet/">informacje</a>,<br />
            <a href="https://www.youtube.com/watch?v=3su8P5Z8NFk">Video</a> strony głównej 
        </h3>
    </footer>
    <div id="side" onclick="sideMenu()"><i class="material-icons">expand_less</i></div>
    <div id="top" onclick="toSmth(1)"><i class="material-icons">expand_less</i></div>
</body>
</html>