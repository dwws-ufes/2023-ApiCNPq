<x-layout title="Editando endereço">
<div class="container" >
    <h1>Editando endereço</h1>

    <hr>

    <p>Insira os dados abaixos para realizar a atualização!</p>
    
    <form action="/enderecos/{{$enderecos->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
            <div class="col">
                <div class="col">
                    <label for="pais">Pais: </label>
                    <input class="form-control" class="form-control" type="text" id="pais" name="pais" value="{{$enderecos->pais}}">
                </div>
                <div class="col">
                    <div class="form-group">
                    <select name="opcao"class="form-select" id="opcao" >
                            <option selected>Selecione o uf</option>
                            @foreach ($ufs as $uf)
                                <option value="{{$uf->id}}">{{$uf->sigla}}</option>
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