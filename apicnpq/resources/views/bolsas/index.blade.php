<x-layout title="Endereço">
    <div class="container" >      
        <h1>Lista de bolsas do sistema</h1>
        <a  class="btn btn-primary" href="/bolsas/cadastro">Cadastre uma nova bolsa</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Bolsa</th>
                    <th scope="col">Programa</th>
                    <th scope="col">Data de Inicio</th>
                    <th scope="col">Data de Fim</th>
                    <th scope="col">Valor da Bolsa</th>
                    <th scope="col">País</th>
                    <th scope="col"style="text-align: center !important;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bolsas as $bolsa)
                <tr>
                    <th scope="row">{{$bolsa->id}}</th>
                    <td>
                        {{$bolsa->protocolo}}
                    </td>
                    <td>
                        {{$bolsa->nome_programa}}
                    </td>
                    <td>
                        {{$bolsa->data_inicio}}
                    </td>
                    <td>
                        {{$bolsa->data_fim}}
                    </td>
                    <td>
                        {{$bolsa->valor_bolsa}}
                    </td>
                    <td>
                        {{$bolsa->pais}}
                    </td>
                    <td style="text-align: center !important;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: center;">
                        <a type="button" class="btn btn-outline-warning" style="margin-rigth: 3px;" href="/bolsas/{{$bolsa->id}}/edit">Editar</a>
                        <form action="/bolsas/{{$bolsa->id}}" method="post">
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