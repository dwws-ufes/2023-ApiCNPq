<x-layout title="Sub áreas">
    <div class="container" >      
        <h1>Lista de Sub áreas do sistema</h1>
        <a  class="btn btn-primary" href="/subarea/cadastro">Cadastre uma nova área</a>
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
                @foreach ($subareas as $subarea)
                <tr>
                    <th scope="row">{{$subarea->id}}</th>
                    <td>
                    {{ $subarea->nome_grandearea }}
                    </td>
                    <td>{{ $subarea->nome_area }}</td>
                    <td>{{ $subarea->nome_subarea }}</td>  
                    <td style="text-align: center !important;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: center;">
                        <a type="button" class="btn btn-outline-warning" style="margin-rigth: 3px;" href="/subarea/{{$subarea->id}}/edit">Editar</a>
                        
                        <form action="/subarea/{{$subarea->id}}" method="post">
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