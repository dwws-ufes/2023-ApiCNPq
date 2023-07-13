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
            <div class="form-group">
                <label for="resumo">Resumo: </label>
                <textarea class="form-control" id="resumo" name="resumo" readonly></textarea>
            </div>
            <div><br></div>
            <button class="btn btn-primary" type="submit">Cadastrar</button>
            <button class="btn btn-primary" type="button" onclick="consultarResumo()">Consultar Resumo</button>
            <div><br></div>
        </form>
    </div>
</x-layout>

<script>
    function consultarResumo() {
        var uf = document.getElementById('sigla').value;
        if (uf !== '') {
            // Fazer a requisição AJAX para a rota no servidor
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var resumo = JSON.parse(this.responseText).resumo;
                    document.getElementById('resumo').value = resumo;
                }
            };
            xhttp.open('GET', '/enderecos/ufs/' + encodeURIComponent(uf) + '/resumo', true);
            xhttp.send();
        }
    }
</script>

