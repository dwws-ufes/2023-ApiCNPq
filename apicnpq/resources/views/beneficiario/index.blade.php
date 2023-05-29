<x-layout title="Beneficiario">
    <div class="container" >      
        <h1>Lista de beneficiarios do sistema</h1>
        <a  class="btn btn-primary" href="/beneficiarios/cadastro">Cadastre um novo beneficiario</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome do beneficiario</th>
                    <th scope="col">Programa</th>
                    <th scope="col">Bolsa</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">instituição</th>
                    <th scope="col"style="text-align: center !important;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beneficiarios as $beneficiario)
                <tr>
                    <th scope="row">{{$beneficiario->id}}</th>
                    <td>
                        {{$beneficiario->nome_beneficiario}}
                    </td>
                    <td>
                        {{$beneficiario->nome_programa}}
                    </td>
                    <td>
                        {{$beneficiario->protocolo}}
                    </td>
                    <td>
                        {{$beneficiario->pais}}
                    </td>
                    <td>
                        {{$beneficiario->nome_instituuicao}}
                    </td>
                    <td style="text-align: center !important;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: center;">
                        <a type="button" class="btn btn-outline-warning" style="margin-rigth: 3px;" href="/beneficiarios/{{$beneficiario->id}}/edit">Editar</a>
                        <form action="/beneficiarios/{{$beneficiario->id}}" method="post">
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