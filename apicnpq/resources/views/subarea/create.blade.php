<x-layout title="Nova sub área">
<div class="container" >
    <h1>Cadastro de nova sub área</h1>
    <p>Insira os dados abaixos para realizar o cadastro!</p>
    <form action="/subarea/salvar" method="post">
        @csrf
        <div class="form-group">
            <div class="form-group">
            <div class="row">
                <p>Lembre-se de adicionar todos os dados!!</p>
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
                        <select name="opcao_a"class="form-select" id="opcao" >
                            <option selected>Selecione a área</option>
                            @foreach ($areas as $area)
                                <option value="{{$area->id}}">{{$area->nome_area}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="area">Subarea: </label>
                    <input class="form-control" type="text" id="subarea" name="subarea">
                </div>
            </div>                    
        </div>
        <div><br></div> 
        <button class="btn btn-primary" type="submit" >Cadastrar</button>
        <div><br></div> 
    </form>
</div>
</x-layout>