<x-layout title="Nova Área">
<div class="container" >
    <h1>Cadastro de nova área</h1>
    <p>Insira os dados abaixos para realizar o cadastro!</p>
    <form action="/areas/salvar" method="post">
        @csrf
        <div class="form-group">
            <div class="form-group">
            <div class="row">
            <div class="col">
                    <div class="form-group">
                        <label for="area">Área: </label>
                        <input class="form-control" type="text" id="area" name="area">
                    </div>
                </div>  
                <div class="col">
                    <label for="area">Grande área: </label>
                    <select name="opcao"class="form-select" id="opcao" >
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