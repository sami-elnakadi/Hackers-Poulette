
<header>
<div id="nav" class="zero">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="row justify-content-start">
                    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <div class="col-md-4">
                    <img class="logo" alt="logo" src="./assets/img/hackerslogo.png">
                    </div>

                            <?php

                        $menu = array('Accueil','Produits','Contact');
                        $icon = array('<i class="fas fa-home"></i>','<i class="fas fa-shopping-cart"></i>','<i class="fas fa-question-circle"></i>');
                        echo '<ul>'
                        ?>

                        <?php
                        foreach (array_combine($menu, $icon) as $val => $key    ){
                        echo '<li>'.$key.'<a class="nav-item nav-link" href="http://localhost/PHP/Challenge/Hackers-Poulette/index.php?page='.$val.'">'.$val.'</a></li>';
                        }
                        ?>
                        <?php
                        echo '</ul>';
                        
                        ?>
                </div>
            </div> 
        </div>
    </div>
</nav>
</div>
</header>
