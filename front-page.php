<?php  get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt</title>
</head>
<body>
    <main>
    <section class="klasa1">
        <img src="<?php echo esc_url(get_theme_file_uri('images/plane2.png')); ?>" 
             alt="plane1">
    </section>

    
    <section class="klasa2">
        <h2>Llojet e avioneve</h2>
        <p>Ka shum lloje te avioneve disa te perfshir jane:</p>
    </section>

   
    <section class="klasa3">
        <div class="plane-box">
            <h3>Airbus A320</h3>
            <p>Avion i kategorisë narrow-body shumë i përdorur në botë.</p>
        </div>

        <div class="plane-box">
            <h3>Boeing 777</h3>
            <p>Nga avionët më të mëdhenj me dy motorë për fluturime të gjata.</p>
        </div>

        <div class="plane-box">
            <h3>Cessna 172</h3>
            <p>Avion i lehtë, perfekt për trajnime.</p>
        </div>

        <div class="plane-box">
            <h3>Concorde</h3>
            <p>Avion supersonik i përdorur për fluturime komerciale.</p>
        </div>

        <div class="plane-box">
                <h3>Lockheed SR-71 Blackbird</h3>
                <p>Avion zbulimi me shpejtësi të lartë dhe altitudë të madhe.</p>
        </div>        

        <div class="plane-box">
            <h3>Antonov An-225 Mriya</h3>
            <p>Avioni më i madh transportues në botë.</p>
        </div>    
    </section>

    <section class="klasa4">
    <h2>Fakte për avionet</h2>

    <div class="fakte-container">

        <div class="fact-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/speed.png')); ?>" alt="speed icon">
            <h3>Shpejtësi Marramendëse</h3>
            <p>Avioni më i shpejtë në botë, SR-71 Blackbird, arrin mbi 3,540 km/h.</p>
        </div>

        <div class="fact-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/height.png')); ?>" alt="height icon">
            <h3>Lartësi Mbresëlënëse</h3>
            <p>Avionët komercialë fluturojnë zakonisht në lartësi rreth 10,600 metra.</p>
        </div>

        <div class="fact-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/range.png')); ?>" alt="range icon">
            <h3>Fluturime të Gjatë</h3>
            <p>Airbus A350 mund të fluturojë deri në 18 orë pa ndalim.</p>
        </div>

    </div>
</section>
<section class="klasa5">
    <h2>Modelet e mjohura</h2>

    <div class="popular-planes">

        <div class="popular-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/boeing.png')); ?>" alt="Boeing 737">
            <h3>Boeing 737</h3>
            <p>Një nga avionët më të përdorur komercial në botë.</p>
        </div>

        <div class="popular-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/airbus.png')); ?>" alt="Airbus A380">
            <h3>Airbus A380</h3>
            <p>Avioni më i madh pasagjerësh në botë me dy kate.</p>
        </div>

        <div class="popular-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/f-16.png')); ?>" alt="F-16">
            <h3>F-16 Falcon</h3>
            <p>Një luftëtar i avancuar dhe shumë i njohur në forcat ajrore.</p>
        </div>

    </div>

</section>
<section class="klasa6">
    <h2>Teknologjitë Moderne në Aviacion</h2>

    <div class="tech-container">

        <div class="tech-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/flybywire.png')); ?>" alt="Fly-by-wire">
            <h3>Fly-By-Wire</h3>
            <p>Sistemi elektronik që zëvendëson kabllot mekanike, duke rritur sigurinë dhe saktësinë.</p>
        </div>

        <div class="tech-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/composite.jpg')); ?>" alt="Composite Materials">
            <h3>Materialet Kompozite</h3>
            <p>Fibra karboni dhe materiale ultra-të lehta që ulin peshën dhe rrisin efikasitetin.</p>
        </div>

        <div class="tech-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/turbofan.jpg')); ?>" alt="Turbofan Engine">
            <h3>Motorët Turbofan</h3>
            <p>Motorët modernë janë më të qetë, më të fuqishëm dhe përdorin shumë më pak karburant.</p>
        </div>

        <div class="tech-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/autopilot.png')); ?>" alt="Autopilot">
            <h3>Autopiloti Inteligjent</h3>
            <p>Kompiuterë të avancuar që asistojnë pilotët gjatë gjithë fluturimit.</p>
        </div>

    </div>
</section>
<section class="klasa7">
    <h2>Sistemet e Sigurisë së Avionëve</h2>

    <div class="safety-container">

        <div class="safety-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/pressurization.png')); ?>" alt="Pressurization">
            <h3>Pressurizimi i Kabinës</h3>
            <p>Mbajtja e presionit të qëndrueshëm siguron që pasagjerët të marrin oksigjen të mjaftueshëm gjatë fluturimeve në lartësi të mëdha.</p>
        </div>

        <div class="safety-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/oxygen.jpg')); ?>" alt="Oxygen System">
            <h3>Sistemet e Oksigjenit</h3>
            <p>Maskat e oksigjenit aktivizohen automatikisht në rast të humbjes së presionit, duke siguruar frymëmarrje të sigurt.</p>
        </div>

        <div class="safety-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/blackbox.jpeg')); ?>" alt="Black Box">
            <h3>Black Box</h3>
            <p>Regjistruesit e të dhënave dhe audios ndihmojnë në analizimin e çdo incidenti për të përmirësuar sigurinë globale.</p>
        </div>

        <div class="safety-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/antiice.jpg')); ?>" alt="Anti-Ice System">
            <h3>Sistemet Anti-Icing</h3>
            <p>Mbrojnë avionin nga ngrirja në krahë dhe motorë, duke rritur sigurinë gjatë fluturimit në temperatura të ulëta.</p>
        </div>

        <div class="safety-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/fireextinguisher.jpg')); ?>" alt="Fire Extinguisher">
            <h3>Sistemet e Shuarjes së Zjarrit</h3>
            <p>Avionët kanë sisteme automatike dhe manuale për shuarjen e zjarreve në motorë dhe kabinë.</p>
        </div>

        <div class="safety-box">
            <img src="<?php echo esc_url(get_theme_file_uri('images/emergency_exit.jpg')); ?>" alt="Emergency Exits">
            <h3>Daljet e Emergjencës</h3>
            <p>Janë të shënuara qartë dhe lehtësisht të aksesueshme për evakuim të shpejtë në rast emergjence.</p>
        </div>

    </div>
</section>


    </main>










</body>
</html>






















<?php get_footer(); ?>