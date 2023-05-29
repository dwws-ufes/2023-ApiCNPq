<x-layout title="Editando instituição">
<div class="container" >
    <h1>Editando instituição</h1>

    <hr>

    <p>Insira os dados abaixos para realizar a atualização!</p>
    
    <form action="/instituicoes/{{$instituicaos->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
            <div class="col">
                <div class="col">
                    <label for="pais">Pais: </label>
                    <input class="form-control" class="form-control" type="text" id="nome" name="nome" value="{{$instituicaos->nome_instituuicao}}">
                </div>
                <div class="col">
                    <div class="form-group">
                    <select name="endereco"class="form-select" id="endereco" >
                            <option selected>Selecione o endereço</option>
                            @foreach ($enderecos as $endereco)
                                <option value="{{$endereco->id}}">{{$endereco->pais}}</option>
                            @endforeach
                    </select>
            </div>
                </div>
            </div>  
            <div><br></div> 
            <button class="btn btn-success" type="submit">Salvar</button>                  
        </div>
        

        <div><br></div> 
    </form>
</div>
</x-layout>