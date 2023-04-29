<x-layout title="Novo Usuário">
<div class="container" >
    <h1>Cadastro de novo usuário</h1>
    <p>Insira os dados abaixos para realizar o cadastro!</p>
    <form action="/usuarios/salvar" method="post">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="user">User: </label>
                <input class="form-control" class="form-control" type="text" id="user" name="user">
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input class="form-control" class="form-control" type="password" id="password" name="password">
            </div>
            

            
        </div>
        <div><br></div> 
        <button class="btn btn-primary" type="submit" >Cadastrar</button>
        <div><br></div> 
    </form>
</div>
</x-layout>