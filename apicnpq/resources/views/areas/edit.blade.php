<x-layout title="Editando Área">
<div class="container" >
    <h1>Editando área</h1>

    <hr>

    <p>Insira os dados abaixos para realizar a atualização!</p>
    
    <form action="/areas/{{$area->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="grandeArea">Grande Área: </label>
                    <input class="form-control" class="form-control" type="text" id="grandeArea" name="grandeArea" value="{{$area->nome_grandearea}}">
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="area">Área: </label>
                        <input class="form-control" type="text" id="area" name="area" value="{{$area->nome_area}}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="area">Subarea: </label>
                    <input class="form-control" type="text" id="subarea" name="subarea" value="{{$area->nome_subarea}}">
                </div>
            </div>  
            <div><br></div> 
            <button class="btn btn-success" type="submit">Salvar</button>                  
        </div>
        

        <div><br></div> 
    </form>
</div>
</x-layout>