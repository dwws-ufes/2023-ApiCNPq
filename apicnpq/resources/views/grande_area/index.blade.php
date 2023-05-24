<x-layout title="Áreas">
    <div class="container" >      
        <h1>Lista de grande áreas do sistema</h1>
        <a  class="btn btn-primary" href="/grandearea/cadastro">Cadastre uma nova grande área</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Grande Área</th>
                <th scope="col" style="text-align: center !important;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grandeareas as $grandearea)
                <tr>
                    <th scope="row">{{$grandearea->id}}</th>
                    <td>
                    {{ $grandearea->nome_grandearea}}
                    </td>
                     
                    <td style="text-align: center !important;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: center;">
                        <a type="button" class="btn btn-outline-warning" style="margin-rigth: 3px;" href="/grandearea/{{$grandearea->id}}/edit">Editar</a>
                        
                        <form action="/grandearea/{{$grandearea->id}}" method="post">
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