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
            <p>Lembre-se de selecionar novamente a grande área</p>
            <div class="col">
                    <div class="form-group">
                        <label for="area">Área: </label>
                        <input class="form-control" type="text" id="area" name="area" value="{{$area->nome_area}}">
                    </div>
                </div>
                <div class="col">
                    <label for="area">Grande área: </label>
                    <select name="opcao"class="form-select" id="opcao" required>
                        <option selected>Selecione a grande área</option>
                        @foreach ($grandeareas as $grandearea)
                            <option value="{{$grandearea->id}}" >{{$grandearea->nome_grandearea}}</option>
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