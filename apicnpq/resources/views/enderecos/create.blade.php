<x-layout title="Novo Endereço">
<div class="container" >
    <h1>Cadastro de novo endereco</h1>
    <p>Insira os dados abaixos para realizar o cadastro!</p>
    <form action="/enderecos/salvar" method="post">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="pais">pais: </label>
                <input class="form-control" class="form-control" type="text" id="pais" name="pais">
            </div>
            <br>
            <div class="form-group">
            <select form="form-group" class="form-select" aria-label="sigla" id="sigla">
                    <option selected>Selecione o uf</option>
                    @foreach ($ufs as $uf)
                        <option value="{{$uf->id}}">{{$uf->sigla}}</option>
                    @endforeach
            </div>
            
        </div>
        <div><br></div> 
        <button class="btn btn-primary" type="submit" >Cadastrar</button>
        <div><br></div> 
    </form>
</div>
</x-layout>