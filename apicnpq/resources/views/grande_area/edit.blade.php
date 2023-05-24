<x-layout title="Editando Área">
<div class="container" >
    <h1>Editando área</h1>

    <hr>

    <p>Insira os dados abaixos para realizar a atualização!</p>
    
    <form action="/grandearea/{{$grandearea->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="grandeArea">Grande Área: </label>
                    <input class="form-control" class="form-control" type="text" id="grandeArea" name="grandeArea" value="{{$grandearea->nome_grandearea}}">
                </div>
            </div>  
            <div><br></div> 
            <button class="btn btn-success" type="submit">Salvar</button>                  
        </div>
        

        <div><br></div> 
    </form>
</div>
</x-layout>