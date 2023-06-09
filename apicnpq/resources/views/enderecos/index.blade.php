<x-layout title="Bolsa">
    <div class="container" >      
        <h1>Lista de endereços do sistema</h1>
        <a  class="btn btn-primary" href="/enderecos/cadastro">Cadastre um novo endereço</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">UF</th>
                    <th scope="col"style="text-align: center !important;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enderecos as $endereco)
                <tr>
                    <th scope="row">{{$endereco->id}}</th>
                    <td>
                        {{$endereco->pais}}
                    </td>
                    <td>
                        {{$endereco->sigla}}
                    </td>
                    <td style="text-align: center !important;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: center;">
                        <a type="button" class="btn btn-outline-warning" style="margin-rigth: 3px;" href="/enderecos/{{$endereco->id}}/edit">Editar</a>
                        <form action="/enderecos/{{$endereco->id}}" method="post">
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