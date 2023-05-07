<x-layout title="Usuário">
    <div class="container" >      
        <h1>Lista de Usuários do sistema</h1>
        <a  class="btn btn-primary" href="/usuarios/cadastro">Cadastre um novo usuário</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Usuário</th>
                    <th scope="col"style="text-align: center !important;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>
                    {{$user->nome}}
                    </td>
                    <td style="text-align: center !important;">
                        <form action="/usuarios/{{$user->id}}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>