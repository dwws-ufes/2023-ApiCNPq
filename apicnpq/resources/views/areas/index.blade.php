<x-layout title="Áreas">
    <div class="container" >      
        <h1>Lista de Áreas do sistema</h1>
        <a  class="btn btn-primary" href="/areas/cadastro">Cadastre uma nova área</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Grande Área</th>
                <th scope="col">Área</th>
                <th scope="col">Subarea</th>
                <th scope="col" style="text-align: center !important;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                <tr>
                    <th scope="row">{{$area->id}}</th>
                    <td>
                    {{ $area->nome_grandearea }}
                    </td>
                    <td>{{ $area->nome_area }}</td>
                    <td>{{ $area->nome_subarea }}</td>  
                    <td style="text-align: center !important;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: center;">
                        <a type="button" class="btn btn-outline-warning" style="margin-rigth: 3px;" href="/areas/{{$area->id}}/edit">Editar</a>
                        
                        <form action="/areas/{{$area->id}}" method="post">
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