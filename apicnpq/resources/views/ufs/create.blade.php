<x-layout title="Novo Uf">
    <div class="container">
        <h1>Cadastro de novo Uf</h1>
        <p>Insira os dados abaixo para realizar o cadastro!</p>
        <form action="/enderecos/ufs/salvar" method="post">
            @csrf
            <div class="form-group">
                <label for="sigla">Uf: </label>
                <input class="form-control" type="text" id="sigla" name="sigla">
            </div>
            <div><br></div>
            <button class="btn btn-primary" type="submit">Cadastrar</button>
            <!-- <button class="btn btn-primary" type="button" onclick="consultarResumo()">Consultar Resumo</button> -->
            <div><br></div>
        </form>
        <form action="/enderecos/ufs/{uf}/resumo" method="post"> 
            @csrf
            <div class="form-group">
            <div class="form-group">
                <label for="sigla" id="sigla">Uf: </label>
                <input class="form-control" type="text" id="sigla" name="sigla">
            </div>
                <label for="resumo">Resumo: </label>
                <div id="resumo"></div>
                <br>
                <!-- <button id="btnObterResumo">Consultar Resumo</button> -->
                <button class="btn btn-primary" type="submit" >Consultar Resumo</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="../../../public/js/scripts.js"></script> -->
    <script> 
// script.js
$(document).ready(function () {
    // Evento de clique no botão com o id "btnObterResumo"
    $('#btnObterResumo').on('click', function () {
        
        var sigla = $('#sigla').val();
        var url = '/enderecos/ufs/' + sigla + '/resumo';
        console.log('Valor de sigla:', sigla); 

        $.ajax({
            url: url, //endpoint
            type: 'GET',
            data: { sigla: sigla }, // Passar a UF como parâmetro
            dataType: 'json',
            success: function (data) {
                // Manipular os dados recebidos do Laravel
                if (data.resumo) {
                    // Se o resumo existir, exibir dentro do label "resumo"
                    $('#resumo').text('Resumo: ' + data.resumo);
                } else {
                    // Caso contrário, exibir mensagem de erro
                    $('#resumo').text('Resumo não encontrado');
                }
            },
            error: function (xhr, status, error) {
                // Tratar erros de requisição, se necessário
                console.log('Erro na requisição:', error);
            }
        });
    });
});

    </script>
</x-layout>
