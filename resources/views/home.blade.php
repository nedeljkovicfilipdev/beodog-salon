<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Nedeljković Filip">
    <title>Salon za šišanje pasa "Beodog"</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div id="preloader" style="background-image: url('images/dogPawLoading.jpg');">
        <div id="loader"></div>
    </div>
    <header>
        <a href="#intro" class = "logo" data-scroll>
            <img src="images/dogPawLogo1.png" width="50" height="50">
        </a>
        <nav class="nav-collapse">
            <ul>
                <li class="menu-item-o-nama">
                    <a class="menu-item" href="#o-nama" data-scroll>O NAMA</a>
                </li>
                <li class="menu-item-usluge">
                    <a class="menu-item" href="#usluge" data-scroll>USLUGE</a>
                </li>
                <li class="menu-item-galerija">
                    <a class="menu-item" href="#galerija" data-scroll>GALERIJA</a>
                </li>
                <li class="menu-item-kontakt">
                    <a class="menu-item" href="#kontakt" data-scroll>KONTAKT</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="main-section page-section" style="background-image: url('images/pozadinaBeodog.png');" id="intro">
        <div class="main-homepage">
            <h1>SALON ZA ŠIŠANJE PASA "BEO DOG"</h1>
            <h4>Profesionalni, posebni i strasni!</h4>
            <h5>Mi brinemo o vašim kucama.</h5>
        </div>
    </section>
    <section class="page-section o-nama-section" style="background-image: url('images/pozadinaHome1.jpg');" id="o-nama" >
        <div class="o-nama-overlay">
            <h2>O NAMA</h2>
            <h3>Beo Dog - šišanje, kupanje i kompletna nega pasa</h3>
        </div>
        <div class="o-nama-container">
            <p>U salonu za negu pasa <b>Beo Dog</b> vaši ljubimci će dobiti vrhunski tretman, maksimalno strpljenje i ljubav, sve što ukupno obećava jedan prijatan boravak i kvalitetnu uslugu u njemu. Zaposlene u salonu odlikuje pre svega iskustvo, ljubaznost i pravilan pristum vašim ljubimcima. U njemu se trudimo da saslušamo vlasnika kao i njegovog ljubimca šta je najbolje za njega. U prijatnom prostoru salona <b>Beo Dog</b> očekuje vas profesionalnost, ljubav prema ljubimcima i pristupačne cene.<br>Mali, srednji, veliki, glasni i veseli.. svi dlakavci i sve pasmine su dobrodošle.</p>
        </div>
    </section>
    <section class="page-section usluge-section" style="background-image: url('images/pozadinaUsluge.jpg');" id="usluge" >
        <h2>USLUGE</h2>
        <div class="usluge-container">
            <p>Od naših usluga za vaše ljubimce možemo ponuditi tretman od glave do repa. Mi ćemo mu očistiti uši, srediti i oblikovati nokte, ošišati, okupati i fenirati. Cene šišanja pasa se kreću od 1.500 dinara..<br> Naravno i naše ostale usluge su:</p>
            <ul>
                <li>Rašćebavanje</li>
                <li>Furminiranje (izbacivanje poddlake, smanjenje linjanja)</li>
                <li>Tretman protiv buva</li>
            </ul>
            <p>Psi su razigranje životinje koje trče, skaču i uvek su u nekom poslu, tako da je vrhunski i kompletan tretman za vašeg ljubimca <b>neophodan</b>.</p>
            <p>Ne dozvolite da se vaš ljubimac pretvori u zapetljanu i neurednu kuglicu nego reagujte na vreme i zakažite tretman putem poruke, poziva i od skoro preko Interneta.</p>
            <p>Salon za negu pasa <b>Beo Dog</b> vas očekuje..<br>
            A od 15.12.2017 pa do kraja Januara 2018. godine, popust na sve usluge 20%.</p>
            <p>Od februara 2018. godine, uvodi se usluga čuvanja Vaših ljubimaca na dnevnom nivou.</p>
            <h4>Vaš Beo Dog.</h4>
        </div>
    </section>
    <section class="page-section galerija-section" style="background-image: url('images/pozadinaGallery.jpg');" id="galerija">
        <h2 style="text-align: center;">GALERIJA</h2>
        <div class="galerija-container" style="max-width:1024px">
            <div class="mySlides">
                <div class="numbertext">1 / 6</div>
                <img src="images/gallery1.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">2 / 6</div>
                <img src="images/gallery2.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">3 / 6</div>
                <img src="images/gallery3.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">4 / 6</div>
                <img src="images/gallery4.jpeg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">5 / 6</div>
                <img src="images/gallery5.jpg" style="width:100%">
            </div>
            <div class="mySlides">
                <div class="numbertext">6 / 6</div>
                <img src="images/gallery6.jpg" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            <div class="caption-container">
                <p id="caption"></p>
            </div>
            <div class="row">
            <div class="column">
              <img class="demo cursor" src="images/gallery1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Caption Prvi">
            </div>
            <div class="column">
              <img class="demo cursor" src="images/gallery2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Caption Drugi">
            </div>
            <div class="column">
              <img class="demo cursor" src="images/gallery3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Caption Treci">
            </div>
            <div class="column">
              <img class="demo cursor" src="images/gallery4.jpeg" style="width:100%" onclick="currentSlide(4)" alt="Caption Cetvrti">
            </div>
            <div class="column">
              <img class="demo cursor" src="images/gallery5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Caption Peti">
            </div>
            <div class="column">
              <img class="demo cursor" src="images/gallery6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Caption Sesti">
            </div>
          </div>
        </div>
    </section>
    <section class="page-section kontakt-section" style="background-image: url('images/pozadinaKontakt.jpg');" id="kontakt">
        <h2>KONTAKT</h2>
        <div class="split kontakt-container-left">
            <div class="centered form-effect">
                <form method="POST">
                     <input class="effect" type="text" name="ime" style="width: 350px" placeholder="Ime">
                     <br><br>
                     <input class="effect" type="text" name="prezime" style="width: 350px" placeholder="Prezime">
                     <br><br>
                     <input class="effect" type="text" name="brojtelefona" style="width: 350px" placeholder="Broj Telefona">
                     <br><br>
                     <input class="effect" type="email" name="email" style="width: 350px" placeholder="E-mail">
                     <br><br>
                     <textarea class="effect" name="poruka" cols="30" rows="10" style="width: 350px" placeholder="Poruka"></textarea>
                     <br><br>
                     <input type="submit" value="Posalji poruku" style="width: 160px">
                     <input type="reset" value="Obrisi" style="width: 160px">
                </form>
            </div>
        </div>
        <div class="split kontakt-container-right">
            <div class="centered">
                <div id="mapa"></div>
            </div>
        </div>
    </section>
    <footer class="nav-down">
        <h2>Kontakt informacije:</h2>
        <ul>
            <li>Salon za negu pasa BEO DOG</li>
            <li>T.C Konjarnik, Ustanička 189, Beograd, Srbija</li>
            <li>Br.tel: <a href="tel:+381645772908">+381645772908</a></li>
            <li>E-mail: <a href="mailto:nedeljkovic.filip.dev@gmail.com">nedeljkovic.filip.dev@gmail.com</a></li>
            <li>Radno vreme: Ponedeljak - Petak 10-18h</li>
            <li>Termini za subotu i nedelju se zakazuju.</li>
        </ul>
    </footer>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCs1K1FTYr0vRzwr7QG7hSdqdTVikzl2Y8&callback=myMap" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/scrollingetc.js"></script>

</body>
</html>
