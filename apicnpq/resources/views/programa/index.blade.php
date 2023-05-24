<x-layout title="PROGRAMAS">
    <div class="container" >      
        <h1>Lista de grande PROGRAMAS CNPq do sistema</h1>
        <a  class="btn btn-primary" href="http://127.0.0.1:8000/programa/cadastro">Cadastre</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Programa CNPq</th>
                <th scope="col">Grande Área</th>
                <th scope="col" style="text-align: center !important;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($programas as $programa)
                <tr>
                    <th scope="row">{{$programa->id}}</th>
                    <td>
                    {{ $programa->nome_programa}}
                    </td>
                    <td>
                    {{ $programa->nome_grandearea}}
                    </td>
                     
                    <td style="text-align: center !important;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: center;">
                        <a type="button" class="btn btn-outline-warning" style="margin-rigth: 3px;" href="/programa/{{$programa->id}}/edit">Editar</a>
                        
                        <form action="/programa/{{$programa->id}}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="margin-left: 3px;">Excluir</button>
                        </form>
                    </td>                  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>