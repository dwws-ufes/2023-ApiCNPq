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
                <p class="navbar-brand" href="#">
                <img src="\image\cnpq-logo.png" alt="Logo" width="80" height="60" class="d-inline-block align-text-center">
                API CNPq
                </p>
                
                <div>
                    <a  class="btn btn-primary" href="/usuarios/cadastro">Cadastre um novo usuário</a> 
                    <a  class="btn btn-primary" href="/areas/cadastro">Cadastre um nova área</a>
                </div>
                

            </div>
        </nav>
    {{ $slot }} 
    <!-- componente de cada view -->
</body>
</html>