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

    </main>










</body>
</html>






















<?php get_footer(); ?>