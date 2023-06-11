<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  
  <title>API CNPq</title>
 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@500;700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
  <style>
    body{
        background-color:  hsl(0, 0%, 98%);
    }
    nav{
        width: 100%;
        height: 100px;
        background-color: blue;
    }
    #colText{
        padding: 10px;
        margin-top: 20px;
        text-align: left;
    }
    .imageBKG{
        width: 80%;
        margin: 20px;
    }
    .button-aling{
        margin: 0;
        padding: 0;
    }
    footer{
        text-align: center;
        font-size: 13px;
    }
    a{
        text-decoration: none;
        color: 
    }
    
  </style>
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
            </div>
        </div>
    </nav>

    <div class="container">     
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div><img class="imageBKG" src="\image\3297225-removebg-preview.png"></div>
                </div>
                <div class="col" id="colText">
                    <h1>Encontre aqui todos os bolsistas CNPq</h1>
                    <hr>
                    <p>A nível organizacional, a execução dos pontos do programa pode nos levar a considerar a reestruturação do orçamento setorial.</p>
                    <div class="button-aling">
                       <a href="/beneficiarios" class="btn btn-outline-secondary">Veja todos os bolsistas</a>
                       <a href="/upload" class="btn btn-outline-secondary">Insira dados usando CSV</a> 
                       <a href="/gerar-relatorio" class="btn btn-outline-secondary" style="margin-top: 10px;">Relatório do sistema</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>

<footer>
    <p>&copy; API CNPq - Todos os direitos reservados</p>
    <p>by Antonio Lucio Braga Secchin, Júlia de Souza Borges and Vilker Zucolotto Pessin</p>
</footer>

</html>    