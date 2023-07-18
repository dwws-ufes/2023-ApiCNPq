// script.js
$(document).ready(function () {
    // Evento de clique no botão com o id "btnObterResumo"
    $('#btnObterResumo').on('click', function () {
        var uf = $('#sigla').val(); // Obter a UF informada pelo usuário (por exemplo, através de um campo de entrada)

        // Fazer a requisição Ajax para o endpoint do Laravel
        $.ajax({
            url: '/enderecos/ufs/{uf}/resumo', //endpoint
            type: 'GET',
            data: { sigla: uf }, // Passar a UF como parâmetro
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
