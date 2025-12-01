<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <section class="hero">
            <img src="<?php echo esc_url(get_theme_file_uri('images/banner.png')) ?>" alt="site banner">
        </section>

        <section class="features">
            
            <br>

            <h2 id="heading">Why choose us?</h2>
            
            <br>

            <li>
                <img src="<?php echo esc_url(get_theme_file_uri('images/projects.png')) ?>" alt="handson projects">
                <span>Projects based learning</span>
            </li>

            <li>
                <img src="<?php echo esc_url(get_theme_file_uri('images/ins.png')) ?>" alt=" projects">
                <span>Instructors who inspire</span>
            </li>

            <li>
                <img src="<?php echo esc_url(get_theme_file_uri('images/digital.png')) ?>" alt=" projects">
                <span>Feature ready digital skills</span>
            </li>

            <li>
                <img src="<?php echo esc_url(get_theme_file_uri('images/online.png')) ?>" alt=" projects">
                <span>Online or in person</span>
            </li>

        </section>

            <br>

        <section class="section-pad">
            <h2 id="curricula-heading">Curriculum by age</h2>
            <ul class="curricula-grid">

            <!-- 8-11 -->
             <li class="card">
                <h3 class="card-title">
                    <span class="label">Curriculum from the group age</span>
                    <span class="age">8-11</span>
                </h3>
                <ul class="class-points">
                    <li><strong>Content:</strong>Learning the logic</li>
                    <li><strong>Period:</strong>September - July</li>
                    <li><strong>Intensity:</strong>3 times a week</li>
                    <li><strong>Method:</strong>Online or physically</li>
                </ul>

             </li>

            </ul>
        </section>    
    </main>
</body>
</html>