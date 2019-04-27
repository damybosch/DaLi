<?php
    $projects = [
        ["title"=>"Puur Haarle","excerpt"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione nulla exercitationem ipsa facere eum iusto in dignissimos quia incidunt ullam?","image"=>"puur.png","website"=>"https://www.puurhaarle.nl"],
        ["title"=>"De Stobbenbroekies", "excerpt"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum inventore exercitationem, laboriosam odio nulla minus doloribus, aliquid suscipit cupiditate nisi, rerum eius facilis at tenetur aperiam corrupti ipsam dicta dolor.", "image"=>"stobben.png", "website"=>"https://www.destobbenbroekies.nl"]
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
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="site-branding">
                <a>Damy Bosch</a>
            </div>
            <div class="site-navigation">
                <div class="darklight">
                    <label  class="switch">
                        <input id="themeSwitch" type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
    </header>
    <div class="teaser">
        <div class="container">
            <div class="teaser__content">
            <div class="teaser__title">
                <h1>Damy Bosch</h1>
                <h3>Front-end Developer</h3>
            </div>
            <div class="teaser__cta">
                <a href="mailto:info@damybosch.nl" class="btn">Contact</a>
                <span class=""> of  </span>
                <a href="#" class="not-btn">Resumé</a>
            </div>
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
                        <a class="btn" href="<?php echo $project['website']; ?>">Website</a>
                    </div>
                    <div class="project__count">
                        <?php echo $count; ?>
                    </div>
                    </div>
                    <div class="project__image">
                        <img src="images/<?php echo $project['image']; ?>" target="_blank" alt="<?php echo $project['title']; ?>">
                        
                    </div>
                    
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <footer>
        &copy; Damy Bosch 2019
    </footer>


    <script src="js/function.js"></script>
</body>

</html>