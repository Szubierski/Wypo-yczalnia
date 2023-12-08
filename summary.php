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
<body onload="">
    <header id="home">
        <div id="logo"><a href="index.php"><img src="img/logo.png" alt="logo"></a></div>
    </header>
    <main id="summ">
    <h1 id="title3">Podsumowanie Zamówienia</h1>
        <?php
            //Połączenie się z bazą danych
            require_once "connect.php";
            $conn = @new mysqli($host,$db_user,$db_password,$db_name);
            if($conn->connect_errno!=0) {
                echo "Error:".$conn->connect_errno."Opis:".$conn->connect_error;
            }
            //Pobranie wartości z formularza
            $name = $_POST['name'];
            $secName = $_POST['secName'];
            $PESEL = $_POST['PESEL'];
            $city = $_POST['city'];
            $kod = $_POST['kod'];
            $car = $_POST['car'];
            $location = $_POST['location'];
            $od = $_POST['Od'];
            $do = $_POST['Do'];

            $czas = (strtotime($do) - strtotime($od)) / (60*60*24);
            
            //Dodawanie klienta
            $conn->query("INSERT INTO klienci(Imie,Nazwisko,PESEL,Miejscowosc,Kod_pocztowy) VALUES('$name','$secName',$PESEL,'$city','$kod')");
            
            //Pobieranie ID klienta
            $IDclient = $conn->insert_id.'';

            //Pobieranie danych z zamówienia
            $zam = $conn->query("SELECT ID_zamowienia, Marka, Model, Cena, Miasto, od, do FROM `zamowienia` JOIN samochody ON zamowienia.ID_samochodu=samochody.ID_samochodu JOIN placowki ON zamowienia.ID_placowki=placowki.ID_placowki WHERE samochody.ID_samochodu=$car AND placowki.ID_placowki=$city AND zamowienia.od='$od' AND zamowienia.do='$do'");
            
            $carResult = $zam->fetch_assoc();
            $ID_zam = $carResult['ID_zamowienia'];
            $marka = $carResult['Marka'];
            $model = $carResult['Model'];
            $cena = $carResult['Cena'];
            $miasto = $carResult['Miasto'];

            $cena = $cena * ($czas+1);

            //Dodawanie zamowienia
            $conn->query("INSERT INTO zamowienia(ID_klienta,ID_samochodu,ID_placowki,od,do) VALUES($IDclient,$car,$location,'$od','$do')");
            
            //Zrobić sprawdzanie czy klient już istnieje
            //Zrobić sprawdzanie czy zamówienie o podanych parametrach już istnieje
            //Sprawdzać czy samochód jest już w tym okresie wypożyczony

echo<<<END
    <div class="grid-container">
        <div class="con1">
            <div class="con15">
                Klient:&nbsp<br />
                PESEL:&nbsp<br />
                Kod:&nbsp<br />
                Adres:&nbsp
            </div>
            <div class="con16">
                $name $secName<br />
                $PESEL<br />
                $kod<br />
                $city
            </div>
        </div>
        <div class="con2">
            <div class="con25">
                Samochód:&nbsp<br />
                Placówka:&nbsp<br />
                Od:&nbsp<br/ >
                Do:&nbsp<br />
                Cena:&nbsp
            </div>
            <div class="con26">
                $marka $model<br />
                $miasto<br />
                $od<br />
                $do<br />
                $cena zł
            </div>
        </div>
        <div class="title1">Dane Klienta</div>
        <div class="title2">Zamówienie</div>
    </div>
END;
            $conn->close();
        ?>

        <a href="index.php" id="back">Powrót na stronę główną</a>
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