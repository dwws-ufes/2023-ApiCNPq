<x-layout title="Editando sub área">
<div class="container" >
    <h1>Editando suba área</h1>

    <hr>

    <p>Insira os dados abaixos para realizar a atualização!</p>
    
    <form action="/subarea/{{$subarea->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
            <div class="row">
            <div class="col">
                    <label for="grandeArea">Grande Área: </label>
                    <select name="opcao_ga"class="form-select" id="opcao_ga" >
                        <option selected>Selecione a grande área</option>
                            @foreach ($grandeareas as $grandearea)
                                <option value="{{$grandearea->id}}">{{$grandearea->nome_grandearea}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="area">Área: </label>
                        <select name="opcao_a"class="form-select" id="opcao_a" >
                            <option selected>Selecione a área</option>
                            @foreach ($areas as $area)
                                <option value="{{$area->id}}">{{$area->nome_area}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="subarea">Subarea: </label>
                    <input class="form-control" type="text" id="subarea" name="subarea" value="{{$subarea->nome_subarea}}">
                </div>
            <div><br></div> 
            <button class="btn btn-success" type="submit">Salvar</button>                  
        </div>
        

        <div><br></div> 
    </form>
</div>
</x-layout>