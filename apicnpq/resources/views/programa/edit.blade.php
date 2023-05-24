<x-layout title="Editando Programa">
<div class="container" >
    <h1>Editando</h1>

    <hr>

    <p>Insira os dados abaixos para realizar a atualização!</p>
    
    <form action="/programa/{{$programa->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="programa">Programa: </label>
                    <input class="form-control" class="form-control" type="text" id="programa" name="programa" value="{{$programa->nome_programa}}">
                </div>
                <div class="col">
                    <label for="grandeArea">Grande Área: </label>
                    <select name="opcao_ga"class="form-select" id="opcao_ga" >
                        <option selected>Selecione a grande área</option>
                            @foreach ($grandearea as $grandearea)
                                <option value="{{$grandearea->id}}">{{$grandearea->nome_grandearea}}</option>
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