<?php
    $projects = [
        ["title"=>"Puur Haarle","excerpt"=>"Puur Haarle, een popkoor uit haarle","image"=>"puur.png","website"=>"https://www.puurhaarle.nl"],
        ["title"=>"De Stobbenbroekies", "excerpt"=>"De Stobbenbroekies, een gastouderopvang", "image"=>"stobben.png", "website"=>"https://www.destobbenbroekies.nl"]
    ];
    $count = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Damy Bosch</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="site-branding">
                <a>Damy Bosch</a>
            </div>
            <div class="site-navigation"></div>
        </div>
    </header>
    <div class="teaser">
        <div class="container">
            <div class="teaser__title">
                <h1>Damy Bosch</h1>
                <p>Front-end Developer</p>
            </div>
            <div class="teaser__cta">
                <a href="#" class="btn">Contact</a><br>
                <span class="betweenLines">of</span><br>
                <a href="#" class="not-btn">Resumé</a>
            </div>
        </div>
        <div class="square"></div>
        <div class="square1"></div>

    </div>

    <div class="section__skills">
        <div class="blockInner">
            <div class="container">
                <div class="skillslist">
                    <div class="skillscat">
                        <h3>Front-end</h3>
                        <div class="skills">
                            <div class="skill"><i class="fab fa-html5"></i></div>
                            <div class="skill"><i class="fab fa-css3"></i></div>
                            <div class="skill"><i class="fab fa-sass"></i></div>
                            <div class="skill"><i class="fab fa-js-square"></i></div>
                        </div>
                    </div>
                    <div class="skillscat">
                        <h3>Back-end</h3>
                        <div class="skills">
                            <div class="skill"><i class="fab fa-php"></i></div>
                            <div class="skill"><i class="fab fa-node-js"></i></div>
                        </div>
                    </div>
                    <div class="skillscat">
                        <h3>CMS</h3>
                        <div class="skills">
                            <div class="skill"><i class="fab fa-wordpress-simple"></i></div>
                            <div class="skill"><i class="fab fa-joomla"></i></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="section__projects">
        <div class="container">
            <div class="projects">

                <?php foreach($projects as $project) { 
                    $count++;
                    if($count < 10) {
                        $count = '0'.$count;
                    }    
                    
                ?>
                <div class="project">
                    <div class="project__content">
                    <div class="project__titel">
                        <h2><?php echo $project['title']; ?></h2>
                    </div>
                    <div class="project__excerpt">
                        <p><?php echo $project['excerpt']; ?></p>
                    </div>
                    </div>
                    <div class="project__image">
                        <img src="images/project.jpg" alt="<?php echo $project['title']; ?>">
                        <div class="project__count">
                        <?php echo $count; ?>
                    </div>
                    </div>
                    
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>