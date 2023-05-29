<x-layout title="Editando bolsa">
<div class="container" >
    <h1>Editando bolsa</h1>

    <hr>

    <p>Insira os dados abaixos para realizar a atualização!</p>
    
    <form action="/bolsas/{{$bolsas->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="protocolo">Protocolo: </label>
                <input class="form-control" class="form-control" type="number" id="protocolo" name="protocolo" value="{{$bolsas->protocolo}}">
            </div>
            <br>
            <div class="form-group">
                <select name="programa"class="form-select" id="programa" >
                        <option selected>Selecione o programa</option>
                        @foreach ($programas as $programa)
                            <option value="{{$programa->id}}">{{$programa->nome_programa}}</option>
                        @endforeach
                </select>
            </div>
            <br>
            <label for="datainicio">Data de inicio:</label>
            <input type="date" class="form-control" id="datainicio" name="datainicio" value="{{$bolsas->data_inicio}}">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
            <br>
            <label for="datafim">Data de fim:</label>
            <input type="date" class="form-control" id="datafim" name="datafim" value="{{$bolsas->data_fim}}">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor da Bolsa: </label>
                <input class="form-control" class="form-control" type="number" id="valor" name="valor" value="{{$bolsas->valor_bolsa}}">
            </div>
            <br>
            <div class="form-group">
                <select name="endereco"class="form-select" id="endereco" >
                        <option selected>Selecione o endereço</option>
                        @foreach ($enderecos as $endereco)
                            <option value="{{$endereco->id}}">{{$endereco->pais}}</option>
                        @endforeach
                </select>
            </div>           
            </div>
            <div><br></div> 
            <button class="btn btn-success" type="submit">Salvar</button>                  
        </div>
        

        <div><br></div> 
    </form>
</div>
</x-layout>