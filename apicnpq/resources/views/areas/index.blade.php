<x-layout title="Áreas">
    <div class="container" >      
        <h1>Lista de Áreas do sistema</h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Grande Área</th>
                <th scope="col">Área</th>
                <th scope="col">Subarea</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                <tr>
                    <th scope="row">#</th>
                    <td>
                    {{ $area->nome_grandearea }}
                    </td>
                    <td>{{ $area->nome_area }}</td>
                    <td>{{ $area->nome_subarea }}</td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>