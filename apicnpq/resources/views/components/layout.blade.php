<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title }} | API CNPq</title>
</head>
<body>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <p class="navbar-brand" href="/">
                <img src="\image\cnpq-logo.png" alt="Logo" width="80" height="60" class="d-inline-block align-text-center">
                </p>
                
                <div>
                    <a  class="btn btn-primary" href="/usuarios">Usuários</a> 
                    <a  class="btn btn-primary" href="/areas">Áreas</a>
                    <a  class="btn btn-primary" href="/grandearea">Grande áreas</a>
                    <a  class="btn btn-primary" href="/subarea">Sub áreas</a>
                    <a  class="btn btn-primary" href="/enderecos">Endereços</a>
                    <a  class="btn btn-primary" href="/enderecos/ufs">Ufs</a>
                </div>
            </div>
        </nav>
    {{ $slot }} 
    <!-- componente de cada view -->
</body>
</html>