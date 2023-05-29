<x-layout title="Nova Instituição">
<div class="container" >
    <h1>Cadastro de nova instituição</h1>
    <p>Insira os dados abaixos para realizar o cadastro!</p>
    <form action="/instituicoes/salvar" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome instituição: </label>
                <input class="form-control" class="form-control" type="text" id="nome" name="nome">
            </div>
            <br>
            <div class="form-group">
                <select name="endereco"class="form-select" id="endereco" >
                        <option selected>Selecione o endereco</option>
                        @foreach ($enderecos as $endereco)
                            <option value="{{$endereco->id}}">{{$endereco->pais}}</option>
                        @endforeach
                </select>
            </div>
            
        </div>
        <div><br></div> 
        <button class="btn btn-primary" type="submit" >Cadastrar</button>
        <div><br></div> 
    </form>
</div>
</x-layout>