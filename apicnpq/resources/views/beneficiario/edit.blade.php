<x-layout title="Editando beneficiario">
<div class="container" >
    <h1>Editando beneficiario</h1>

    <hr>

    <p>Insira os dados abaixos para realizar a atualização!</p>
    
    <form action="/beneficiarios/{{$beneficiarios->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="protocolo">Nome beneficiario: </label>
                <input class="form-control" class="form-control" type="text" id="nome_beneficiario" name="nome_beneficiario" value="{{$beneficiarios->nome_beneficiario}}">
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
            <div class="form-group">
                <select name="bolsa"class="form-select" id="bolsa" >
                        <option selected>Selecione a bolsa</option>
                        @foreach ($bolsas as $bolsa)
                            <option value="{{$bolsa->id}}">{{$bolsa->protocolo}}</option>
                        @endforeach
                </select>
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
            <br>
            <div class="form-group">
                <select name="instituicao"class="form-select" id="instituicao" >
                        <option selected>Selecione a instituição</option>
                        @foreach ($instituicaos as $instituicao)
                            <option value="{{$instituicao->id}}">{{$instituicao->nome_instituuicao}}</option>
                        @endforeach
                </select>
            </div>
            <div>            
            <div><br></div> 
            <button class="btn btn-success" type="submit">Salvar</button>
            </div>                  
        </div>
        <div><br></div> 
    </form>
</div>
</x-layout>