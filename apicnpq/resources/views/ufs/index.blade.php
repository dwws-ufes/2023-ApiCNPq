<x-layout title="Uf">
    <div class="container" >      
        <h1>Lista de Ufs do sistema</h1>
        <a  class="btn btn-primary" href="/enderecos/ufs/cadastro">Cadastre um novo Uf</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Uf</th>
                    <th scope="col"style="text-align: center !important;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ufs as $uf)
                <tr>
                    <th scope="row">{{$uf->id}}</th>
                    <td>
                    {{$uf->sigla}}
                    </td>
                    <td style="text-align: center !important;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: center;">
                        <a type="button" class="btn btn-outline-warning" style="margin-rigth: 3px;" href="/enderecos/ufs/{{$uf->id}}/edit">Editar</a>
                        <form action="/enderecos/ufs/{{$uf->id}}" method="post">
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