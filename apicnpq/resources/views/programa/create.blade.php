<x-layout title="Nova grande área">
<div class="container" >
    <h1>Cadastro de nova grande área</h1>
    <p>Insira os dados abaixos para realizar o cadastro!</p>
    <form action="/programa/salvar" method="post">
        @csrf
        <div class="form-group">
            <div class="form-group">
            <div class="row">
                <div class="row">
                    <div class="form-group">
                        <label for="programa">Nome do Programa: </label>
                        <input class="form-control" type="text" id="programa" name="programa">
                    </div>
                </div>
                <div class="col">
                    <label for="grandeArea">Grande Área: </label>
                    <select name="opcao_ga"class="form-select" id="opcao_ga" >
                        <option selected>Selecione a grande área</option>
                            @foreach ($grandeareas as $grandearea)
                                <option value="{{$grandearea->id}}">{{$grandearea->nome_grandearea}}</option>
                            @endforeach
                    </select>
                </div>
            </div>                    
        </div>
        <div><br></div> 
        <button class="btn btn-primary" type="submit" >Cadastrar</button>
        <div><br></div> 
    </form>
</div>
</x-layout>