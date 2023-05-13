<x-layout title="Novo Uf">
<div class="container" >
    <h1>Cadastro de novo Uf</h1>
    <p>Insira os dados abaixos para realizar o cadastro!</p>
    <form action="/enderecos/ufs/salvar" method="post">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="sigla">Uf: </label>
                <input class="form-control" class="form-control" type="text" id="sigla" name="sigla">
            </div>

            
        </div>
        <div><br></div> 
        <button class="btn btn-primary" type="submit" >Cadastrar</button>
        <div><br></div> 
    </form>
</div>
</x-layout>