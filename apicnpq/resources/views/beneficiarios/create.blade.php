<x-layout title="Novo Beneficiário">
<div class="container" >
    <h1>Cadastro de novo beneficiário</h1>
    <p>Insira os dados abaixos para realizar o cadastro!</p>
    <form action="/beneficiario/salvar" method="post">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="beneficiario">Nome do beneficário: </label>
                <input class="form-control" class="form-control" type="text" id="beneficiario" name="beneficiario">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="processo">N° do processo: </label>
                            <input class="form-control" type="text" id="processo" name="processo">
                        </div> 
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="valor_pago">Valor da bolsa: </label>
                            <input class="form-control" type="text" id="valor_pago" name="valor_pago">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="instituicao">Nome da instituição: </label>
                        <input class="form-control" type="text" id="instituicao" name="instituicao">
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="sigla_instituicao">Sigla da instituição: </label>
                            <input class="form-control" type="text" id="sigla_instituicao" name="sigla_instituicao">
                        </div>
                    </div>
                </div>
            </div>

           

            <div class="form-group">
                <label for="programaCNPq">Programa CNPq: </label>
                <input class="form-control" type="text" id="programaCNPq" name="programaCNPq">
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="data_inicio">Data Início: </label>
                            <input class="form-control" type="date" id="data_inicio" name="data_inicio">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="data_termino">Data Término: </label>
                            <input class="form-control" type="date" id="data_termino" name="data_termino">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="ano_referencia">Ano de referência: </label>
                            <input class="form-control" type="number" id="ano_referencia" name="ano_referencia" minlength = 4 maxlength = 4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="grande_area">Grande Área: </label>
                <input class="form-control" type="text" id="grande_area" name="grande_area">
            </div>

            <div class="form-group">
                <label for="area">Área: </label>
                <input class="form-control" type="text" id="area" name="area">
            </div>

            <div class="form-group">
                <label for="subarea">Subarea: </label>
                <input class="form-control" type="text" id="subarea" name="subarea">
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="pais">País de origem: </label>
                            <input class="form-control" type="text" id="pais" name="pais">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="uf">UF: </label>
                            <input class="form-control" type="text" id="uf" name="uf" maxlength = 4>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
        <div><br></div> 
        <button class="btn btn-primary" type="submit" >Cadastrar</button>
        <div><br></div> 
    </form>
</div>
</x-layout>