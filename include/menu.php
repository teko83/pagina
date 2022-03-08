<?php
    function menu(){?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
            <a classs="navbar-toggler" href="inicio.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="formulario.php">Formulario</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="bdd.php">Base de Datos</a>
                    </li>
                </ul>
            
            </div>
            </div>
        
        </nav>
<?php
    }
    ?>





