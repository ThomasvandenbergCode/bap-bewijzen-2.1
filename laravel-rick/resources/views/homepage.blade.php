<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Grauw Amsterdam | Kleding voor de awesome Amsterdammer</title>
    <!-- MetaData -->
    <meta name="description" content="Grauw is een Amsterdam based kledinglijn en ziet de kracht in de glans van een pantervacht, draait de hand niet om voor wat permanente inkt en gelooft in de duisterheid van Darth Vader. ">
    <meta name="keywords" content="Grauw, Amsterdam, Grauwamsterdam, website, Kleding, online kleding, kleding online, panter, kledinglijn, design, merk, Shirt, Trui, Bomberjack, foto, plaatje, Amsterdammer,020,xxx,online, zwart, unisex, dameskleding, herenkleding, dames, heren">
    <meta name="author" content="Grauw Amsterdam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- imports -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

    {{--<!-- jQuery -->--}}
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- Fotorama -->
    <link href="{{ asset('css/fotorama.css') }}" rel="stylesheet">
    <script src="{{ asset('js/fotorama.js') }}"></script>

    <!-- Google Analytics -->
    <script>

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-92627349-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body>
<nav class="nav">
    <div class="burger">
        <div class="burger__patty"></div>
    </div>

    <ul class="nav__list">
        <li class="nav__item">
            <a href="#1" class="nav__link c-blue"><img src="images/nav_home.png" alt="Grauw Home" name="Grauw Home"></a>
        </li>
        <li class="nav__item">
            <a href="#2" class="nav__link c-yellow scrolly"><img src="images/nav_about.png" alt="Grauw Over" name="Grauw Over"></a>
        </li>
        <li class="nav__item">
            <a href="#3" class="nav__link c-red"><img src="images/nav_kleding.png" alt="Grauw Kleding" name="Grauw Kleding"></a>
        </li>
        <li class="nav__item">
            <a href="#4" class="nav__link c-green"><img src="images/nav_contact.png" alt="Grauw Contact" name="Grauw Contact"></a>
        </li>
    </ul>
</nav>
<section class="panel b-background" id="1">
    <article class="panel__wrapper">
        <div class="panel__content">
            <h1 class="panel__headline"><a href="#2"></a>
                <img src="images/grauwbannerLOGO.png" alt="Logo Grauw" name="Logo Grauw"/>
            </h1>

        </div>
        <a href="#2"><div class="arrow bounce"></div></a>
    </article>
</section>
<section class="panel b-black" id="2">
    <article class="panel__wrapper">
        <div class="panel__content">
            <h1 class="panel__headline">Wat is Grauw</h1>
            <div class="panel__block"></div>
            <p class="aboutText">
                Er is niet één schoonheid te vinden in de kleur zwart. Grauw ziet de kracht in de glans van een pantervacht, draait de hand niet om voor wat permanente inkt en gelooft in de duisterheid van Darth Vader.<br><br>
                Voor ons is kleding unisex, comfortabel, sexy en bold.<br>
                Je wing(wo)man in elke situatie. Wees een beetje rebels en neem gewoon een shotje wodka. Formaliteiten zijn overbodig om de wereld te veroveren.
            </p>
            <img src="images/plaatje_tattoo.png" class="uitlijnenlinks" alt="Grauw Tattoo">
            <img class="uitlijnenrechts" src="images/plaatje_wodka.png" alt="Grauw Vodka Icon" name="Grauw Vodka">
        </div>
    </article>
</section>
<section class="panel b-white" id="3">
    <article class="panel__wrapper">
        <div class="panel__content">
            <h1 class="panel__headline">KLEDING<img class="uitlijnenrechts plaatjemargetop"  src="images/plaatje_darthvader_zw.png" alt="Grauw DarthVader"></h1>
            <div class="panel__block"></div>

            {{--<div class="galleryContainer">--}}
                {{--<div class="fotorama" data-nav="thumbs">--}}
                    {{--<a href="images/trui_man_voor.jpg"><img src="images/trui_man_voor.jpg" width="100px" height="100px" alt="Grauw trui" name="Grauw trui">&nbsp;</a>--}}
                    {{--<a href="images/trui_man_achter.jpg"><img src="images/trui_man_achter.jpg" width="100px" height="100px" alt="Grauw trui" name="Grauw trui">&nbsp;</a>--}}
                    {{--<a href="images/trui_vrouw_voor.jpg"><img src="images/trui_vrouw_voor.jpg" width="100px" height="100px" alt="Grauw trui" name="Grauw trui">&nbsp;</a>--}}
                    {{--<a href="images/trui_vrouw_achter.jpg"><img src="images/trui_vrouw_achter.jpg" width="100px" height="100px" alt="Grauw trui" name="Grauw trui">&nbsp; </a>--}}
                    {{--<a href="images/tshirt_zoom1.jpg"><img src="images/tshirt_zoom1.jpg" width="100px" height="100px" alt="Grauw trui" name="Grauw trui">&nbsp;</a>--}}
                    {{--<a href="images/trui_zoom3.jpg"><img src="images/trui_zoom3.jpg" width="100px" height="100px" alt="Grauw trui" name="Grauw trui">&nbsp;</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="textContainer">--}}
                {{--<h2>--}}
                    {{--Trui--}}
                {{--</h2>--}}
                {{--<p class="textKleding">--}}
                    {{--De trui is voor de echte comfort-freak, de stof is zo zacht als een zondag zonder kater. Een relaxte fit bij die eindeloze terrasmomenten, of verwarm je lovah lovah na een avond vol avontuurlijke wendingen.--}}
                {{--</p>--}}
                {{--<p class="kledingSpecs">--}}
                    {{--<b>Info</b><br>--}}
                    {{--33% polyester<br>--}}
                    {{--66% katoen<br>--}}
                    {{--1% chillness<br>--}}
                    {{--Dropped Shoulders--}}
                    {{--<br>--}}
                    {{--<br>--}}
                    {{--De modellen dragen S (1.64m) en L (1.91m)<br><br>--}}
                    {{--<b>€ 50,-</b>--}}
                {{--</p>--}}
            {{--</div>--}}
            {{--<div class="gallerylineClear">&nbsp;--}}
            {{--</div>--}}
            {{--<div class="galleryContainer">--}}
                {{--<div class="fotorama" data-nav="thumbs">--}}
                    {{--<a href="images/jas_vrouw_voor.jpg"><img src="images/jas_vrouw_voor.jpg" width="100px" height="100px" alt="Grauw bomberjas" name="Grauw bomberjas">&nbsp;</a>--}}
                    {{--<a href="images/jas_vrouw_achter.jpg"><img src="images/jas_vrouw_achter.jpg" width="100px" height="100px" alt="Grauw bomberjas" name="Grauw bomberjas">&nbsp;</a>--}}
                    {{--<a href="images/jas_man_voor.jpg"><img src="images/jas_man_voor.jpg" width="100px" height="100px" alt="Grauw bomberjas" name="Grauw bomberjas">&nbsp;</a>--}}
                    {{--<a href="images/jas_man_achter.jpg"><img src="images/jas_man_achter.jpg" width="100px" height="100px" alt="Grauw bomberjas" name="Grauw bomberjas">&nbsp;</a>--}}
                    {{--<a href="images/jas_zoom4.jpg"><img src="images/jas_zoom4.jpg" width="100px" height="100px" alt="Grauw bomberjas" name="Grauw bomberjas">&nbsp;</a>--}}
                    {{--<a href="images/jas_zoom5.jpg"><img src="images/jas_zoom5.jpg" width="100px" height="100px" alt="Grauw bomberjas" name="Grauw bomberjas">&nbsp;</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="textContainer">--}}
                {{--<h2>--}}
                    {{--Bomberjas--}}
                {{--</h2>--}}
                {{--<p class="textKleding">--}}
                    {{--De bomberjas spant de kroon, zonder echt te spannen. Lekker warm als je de volgende party zoekt en de straatnaamborden niet kan lezen. Nooit meer een walk of shame, alleen nog maar walks of pride.--}}
                {{--</p>--}}
                {{--<p class="kledingSpecs">--}}
                    {{--<b>Info</b><br>--}}
                    {{--33% polyester<br>--}}
                    {{--66% katoen<br>--}}
                    {{--1% badassness<br>--}}
                    {{--Binnenvoering<br>--}}

                    {{--<br>--}}
                    {{--De modellen dragen S (1.64m) en L (1.91m)<br><br>--}}
                    {{--<b>€ 75,-</b>--}}
                {{--</p>--}}
            {{--</div>--}}
        @foreach ($kleren as $kleding)
        <div class="galleryContainer">
            <div class="fotorama" data-nav="thumbs">
                @foreach($kleding->images as $image)
                    <a href="{{asset('/photos/'.$image->filename)}}"><img src="{{asset('/photos/'.$image->filename)}}" width="100px" height="100px" alt="Grauw trui" name="Grauw trui">&nbsp</a>
                @endforeach
            </div>
        </div>
        <div class="textContainer">
            <h2>
                {{$kleding->name}}
            </h2>
            <p class="textKleding">
                {{$kleding->description}}
            </p>
            <p class="kledingSpecs">
                <b>Info</b><br>
               {{$kleding->items}}
                <b>€ {{$kleding->price}}</b>
            </p>
        </div>
        <div class="gallerylineClear">&nbsp;&nbsp;
        </div>
        @endforeach
        </div>
    </article>
</section>
<section class="panel b-black" id="4">
    <article class="panel__wrapper">
        <div class="panel__content">
            <h1 class="panel__headline">CONTACT</h1>
            <div class="panel__block"></div>
            <div class="galleryContainer">
                <p>
                    <b>Grauw Amsterdam</b><br>
                    <a href="mailto:mail@grauw.amsterdam" class="whitelink">mail@grauw.amsterdam</a><br>
                    kvk: 68166486
                    <br><br>
                    Volg ons ook op <a href="http://www.facebook.com/grauwamsterdam" class="whitelink">Facebook</a> en <a href="http://www.instagram.com/grauwamsterdam" class="whitelink">Instagram</a>
                    <br><br>
                </p>
            </div>
            <div class="textContainer">
                <p>
                    Is het de hoogste tijd om deze relatie een stapje verder te nemen?<br><br>
                    Slide meteen in onze mailbox met een duidelijk verzoek. <br>
                    Vergeet niet je <b>maat</b>, welk <b>kledingstuk</b> je zoekt en je <b>adres</b> te vermelden.
                    Dan zorgen wij voor een onweerstaanbaar pakketje.
                    <br><br>
                </p>
            </div>
            <img src="images/plaatje_kip.png" class="uitlijnenlinks" alt="Grauw Stripper Icon" name="Grauw Stripper">
            <img class="uitlijnenrechts" src="images/plaatje_boot.png" alt="Grauw PiratenBoot Icon" name="Grauw PiratenBoot">
        </div>
    </article>
</section>
<a href="https://www.facebook.com/Grauwamsterdam/" class="logo" target="_new">
    <img src="images/icon_facebook.png" alt="Grauw Facebook" name="Grauw Facebook">
</a>
<a href="https://www.instagram.com/Grauwamsterdam/" class="logo2" target="_new">
    <img src="images/icon_instagram.png" alt="Grauw Instagram" name="Grauw Instagram">
</a>
<!-- laad Javascscript in zodat website beweegd -->
<script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
