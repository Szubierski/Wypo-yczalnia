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
<body onload="checkForm()">
    <header id="home">
        <div id="logo"><a href="index.php"><img src="img/logo.png" alt="logo"></a></div>
        <menu>
            <ul>
                <li><a href="index.php">Strona główna</a></li>
                <li><span onclick="toSmth(4)">Nasze Samochody</span></li>
                <li><span onclick="toSmth(5)">Zamów teraz</span></li>
            </ul>
        </menu>
    </header>
    <main>
        <h1 id="title1">Nasze samochody</h1>
        <div id="carInfo">
            <div class="cars">
                <h2>Samochody Osobowe</h2>
                <div class="carsInfo">
                    <h3>Audi A4</h3>
                    <div class="carImg" style="background: url(offimg/A41.png) center no-repeat; background-size: contain"></div>
                    <ul>
                        <li>Ilość miejsc: 5</li>
                        <li>Moc: 150KM</li>
                        <li>Pojemność Silnika: 2.0L</li>
                        <li class="price">Cena: 700</li>
                    </ul>
                </div>
                <div class="carsInfo">
                    <h3>Audi A6</h3>
                    <div class="carImg" style="background: url(offimg/a61.png) center no-repeat; background-size: contain"></div>
                    <ul>
                        <li>Ilość miejsc: 5</li>
                        <li>Moc: 204KM</li>
                        <li>Pojemność Silnika: 2.0L</li>
                        <li class="price">Cena: 820</li>
                    </ul>
                </div>
                <div class="carsInfo">
                    <h3>Citroen C5</h3>
                    <div class="carImg" style="background: url(offimg/C51.png) center no-repeat; background-size: contain"></div>
                    <ul>
                        <li>Ilość miejsc: 5</li>
                        <li>Moc: 204KM</li>
                        <li>Pojemność Silnika: 2.7L</li>
                        <li class="price">Cena: 630</li>
                    </ul>
                </div>
                <div class="carsInfo">
                    <h3>Volkswagen Arteon</h3>
                    <div class="carImg" style="background: url(offimg/Arteon1.png) center no-repeat; background-size: contain"></div>
                    <ul>
                        <li>Ilość miejsc: 5</li>
                        <li>Moc: 150KM</li>
                        <li>Pojemność Silnika: 2.0L</li>
                        <li class="price">Cena: 700</li>
                    </ul>
                </div>
            </div>
            <div class="cars">
                <h2>Samochody Sportowe</h2>
                <div class="carsInfo">
                    <h3>Audi R8</h3>
                    <div class="carImg" style="background: url(offimg/R81.png) center no-repeat; background-size: contain"></div>
                    <ul>
                        <li>Ilość miejsc: 5</li>
                        <li>Moc: 610KM</li>
                        <li>Pojemność Silnika: 5.2L</li>
                        <li class="price">Cena: 1400</li>
                    </ul>
                </div>
                <div class="carsInfo">
                    <h3>Nissan GTR R35</h3>
                    <div class="carImg" style="background: url(offimg/gtr1.png) center no-repeat; background-size: contain"></div>
                    <ul>
                        <li>Ilość miejsc: 2</li>
                        <li>Moc: 550KM</li>
                        <li>Pojemność Silnika: 3.8L</li>
                        <li class="price">Cena: 1580</li>
                    </ul>
                </div>
                <div class="carsInfo">
                    <h3>Toyota Supra MK5</h3>
                    <div class="carImg" style="background: url(offimg/supra1.png) center no-repeat; background-size: contain"></div>
                    <ul>
                        <li>Ilość miejsc: 2</li>
                        <li>Moc: 340KM</li>
                        <li>Pojemność Silnika: 3.0L</li>
                        <li class="price">Cena: 1620</li>
                    </ul>
                </div>
                <div class="carsInfo">
                    <h3>Porsche 911</h3>
                    <div class="carImg" style="background: url(offimg/9111.png) center no-repeat; background-size: contain"></div>
                    <ul>
                        <li>Ilość miejsc: 2</li>
                        <li>Moc: 650KM</li>
                        <li>Pojemność Silnika: 3.9L</li>
                        <li class="price">Cena: 1240</li>
                    </ul>
                </div>
            </div>
            <div class="cars">
            <h2>Samochody Elektryczne</h2>
                <div class="carsInfo">
                    <h3>Audi e-Tron GT</h3>
                    <div class="carImg" style="background: url(offimg/etron1.png) center no-repeat; background-size: contain"></div>
                    <ul>
                        <li>Ilość miejsc: 5</li>
                        <li>Moc: 440kW</li>
                        <li>Pojemność Silnika: Elektryczny</li>
                        <li class="price">Cena: 1640</li>
                    </ul>
                </div>
                <div class="carsInfo">
                    <h3>Porsche Taycan Turbo S</h3>
                    <div class="carImg" style="background: url(offimg/taycan1.png) center no-repeat; background-size: contain"></div>
                    <ul>
                        <li>Ilość miejsc: 5</li>
                        <li>Moc: 560kW</li>
                        <li>Pojemność Silnika: Elektryczny</li>
                        <li class="price">Cena: 1440</li>
                    </ul>
                </div>
                <div class="carsInfo">
                    <h3>Tesla Model S</h3>
                    <div class="carImg" style="background: url(offimg/tesla1.png) center no-repeat; background-size: contain"></div>
                    <ul>
                        <li>Ilość miejsc: 5</li>
                        <li>Moc: 760kW</li>
                        <li>Pojemność Silnika: Elektryczny</li>
                        <li class="price">Cena: 930</li>
                    </ul>
                </div>
                <div class="carsInfo">
                    <h3>Volkswagen e-UP</h3>
                    <div class="carImg" style="background: url(offimg/up1.png) center no-repeat; background-size: contain"></div>
                    <ul>
                        <li>Ilość miejsc: 5</li>
                        <li>Moc: 61kW</li>
                        <li>Pojemność Silnika: Elektryczny</li>
                        <li class="price">Cena: 420</li>
                    </ul>
                </div>
            </div>
        </div>
        <h1 id="title2">Zamowienie</h1>
        <form id="order" action="summary.php" method="post">
            <div class="order">
                <h2>Imię:</h2>
                <input type="text" name="name" required>

                <h2>Nazwisko:</h2>
                <input type="text" name="secName" required>

                <h2>PESEL:</h2>
                <input type="text" name="PESEL" required>

                <h2>Miejscowość:</h2>
                <input type="text" name="city" required>
                
                <h2>Kod Pocztowy:</h2>
                <input type="text" name="kod" required>
            </div>
            <div class="order">
                <h2>Wybierz samochód</h2>
                <select name="car" id="car">
                    <optgroup label="Samochody Osobowe">
                        <option value="1">Audi A4</option>
                        <option value="2">Audi A6</option>
                        <option value="5">Citroen C5</option>
                        <option value="12">Volkswagen Arteon</option>
                    </optgroup>
                    <optgroup label="Samochody Sportowe">
                        <option value="4">Audi R8</option>
                        <option value="7">Nissan GTR R35</option>
                        <option value="11">Toyota Supra MK5</option>
                        <option value="8">Porsche 911</option>
                    </optgroup>
                    <optgroup label="Samochody Elektryczne">
                        <option value="3">Audi e-Tron GT</option>
                        <option value="9">Porsche Taycan Turbo S</option>
                        <option value="10">Tesla Model S</option>
                        <option value="13">Volkswagen e-UP</option>
                    </optgroup>
                </select>
                <h2>Wybierz placówkę</h2>
                <select name="location" id="location">
                    <option value="1">Warszawa</option>
                    <option value="2">Rzeszów</option>
                    <option value="3">Kraków</option>
                    <option value="4">Toruń</option>
                </select>

                <h2>Wybierz datę odbioru</h2>
                <input type="date" name="Od" required>

                <h2>Wybierz datę zwrotu</h2>
                <input type="date" name="Do" required>
                
                <br />
                <input type="submit" value="Wypożycz" class="btn">
            </div>
            <div id="infoForm"></div>
        </form>
        
    </main>
    <footer>
        <h3>
            Projekt:<br />
            Bazy Danych, <br />
            Tworzenie Stron Internetowych
        </h3>
        <h3>
            Autor: Nikodem Szubierski
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