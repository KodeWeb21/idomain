<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDomain</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>
    <header class="header">
        <img src="{{asset('assets/logo.svg')}}" alt="">
        <span class="header__text">IDomain</span>
    </header>
    <main class="main">
        <h1 class="title">Privacy</h1>
        <div class="box">
            <p>
                En IDoamin, valoramos profundamente tu privacidad y nos comprometemos a protegerla en todo momento. Esta política de privacidad explica cómo recopilamos, utilizamos y protegemos la información personal que puedas proporcionarnos a través de nuestro sitio web.
            </p>
            <h2>Recopilación de Información</h2>
            <p>
                Cuando utilizas nuestro servicio para generar nombres de dominio, es posible que recopilemos cierta información personal, como tu dirección de correo electrónico o datos de contacto. Sin embargo, esta información se recopila únicamente con tu consentimiento y se utiliza exclusivamente para mejorar tu experiencia en nuestro sitio web y proporcionarte un mejor servicio.
            </p>
            <h2>Cookies y Tecnologías Similares</h2>
            <p>
                Podemos utilizar cookies y otras tecnologías similares para recopilar cierta información sobre tu actividad en nuestro sitio web. Estas tecnologías nos ayudan a mejorar nuestro servicio y a proporcionarte una experiencia más personalizada. Puedes gestionar tus preferencias de cookies a través de la configuración de tu navegador.
            </p>
            <h2>Cambios en la Política de Privacidad</h2>
            <p>
                Nos reservamos el derecho de actualizar o modificar esta política de privacidad en cualquier momento y sin previo aviso. Te recomendamos que revises periódicamente esta página para estar al tanto de cualquier cambio. El uso continuado de nuestro sitio web después de la publicación de cambios en esta política se considerará como tu aceptación de dichos cambios.
            </p>
        </div>
        @include('footer')
    </main>
    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>