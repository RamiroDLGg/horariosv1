<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla de Inicio</title>
    @vite(["resources/js/app.js"])
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="{{ route('plantilla1') }}">Practica 2</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="{{ route('acercade') }}">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('contactanos') }}">Contactanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('ayuda') }}">Ayuda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">Registrarme</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav><br>
    <div class="container">
        <!-- Contenedor de bienvenida -->
        <header>
            <h1>Acerca de Nosotros</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum nobis provident quaerat maxime et quis accusamus rem possimus ipsam eos, quas, soluta tenetur non eius quae natus. Rem, deserunt tenetur.</p>
        </header>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- Pie de página con enlaces a tecnologías -->
        <footer>
            <h4>Tecnologías Utilizadas</h4>
            <ul>
                <li><a href="https://laravel.com/" target="_blank">Laravel</a></li>
                <li><a href="https://www.php.net/" target="_blank">PHP</a></li>
                <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">HTML</a></li>
                <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">CSS</a></li>
                <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">JavaScript</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>