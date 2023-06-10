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
            <a href="/"  >
                <p class="navbar-brand">
                    <img src="\image\cnpq-logo.png" alt="Logo" width="80" height="60" class="d-inline-block align-text-center">
                </p>
            </a>
                
                <div>
                    <a  class="btn btn-primary" href="/usuarios">Usuários</a> 
                    <a  class="btn btn-primary" href="/programa">Programas CNPq</a>
                    <a  class="btn btn-primary" href="/areas">Áreas</a>
                    <a  class="btn btn-primary" href="/grandearea">Grande áreas</a>
                    <a  class="btn btn-primary" href="/subarea">Sub áreas</a>
                    <a  class="btn btn-primary" href="/enderecos">Endereços</a>
                    <a  class="btn btn-primary" href="/enderecos/ufs">Ufs</a>
                    <a  class="btn btn-primary" href="/instituicoes">Instituições</a>
                    <a  class="btn btn-primary" href="/bolsas">Bolsas</a>
                    <a  class="btn btn-primary" href="/beneficiarios">Beneficiarios</a>
                    <a  class="btn btn-primary" href="/upload">Upload de CSV</a>
                </div>
            </div>
        </nav>
    {{ $slot }} 
    <!-- componente de cada view -->
</body>
</html>