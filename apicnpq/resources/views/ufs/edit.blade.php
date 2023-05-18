<x-layout title="Editando Uf">
<div class="container" >
    <h1>Editando uf</h1>

    <hr>

    <p>Insira os dados abaixos para realizar a atualização!</p>
    
    <form action="/enderecos/ufs/{{$uf->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="sigla">Sigla: </label>
                    <input class="form-control" class="form-control" type="text" id="sigla" name="sigla" value="{{$uf->sigla}}">
                </div>
            </div>  
            <div><br></div> 
            <button class="btn btn-success" type="submit">Salvar</button>                  
        </div>
        

        <div><br></div> 
    </form>
</div>
</x-layout>