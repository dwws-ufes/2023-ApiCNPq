<!-- Tem erro em todos os indexs que possuem FK de levar pro id errado ou salvar no id errado  -->
<x-layout title="Instituição">
    <div class="container" >      
        <h1>Lista de instituições do sistema</h1>
        <a  class="btn btn-primary" href="/instituicoes/cadastro">Cadastre uma nova instituição</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Instituição</th>
                    <th scope="col">Endereço</th>
                    <th scope="col"style="text-align: center !important;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($instituicaos as $instituicao)
                <tr>
                    <th scope="row">{{$instituicao->id}}</th>
                    <td>
                        {{$instituicao->nome_instituuicao}}
                    </td>
                    <td>
                        {{$instituicao->pais}}
                    </td>
                    <td style="text-align: center !important;display: flex;flex-direction: row;flex-wrap: nowrap;justify-content: center;">
                        <a type="button" class="btn btn-outline-warning" style="margin-rigth: 3px;" href="/instituicoes/{{$instituicao->id}}/edit">Editar</a>
                        <form action="/instituicoes/{{$instituicao->id}}" method="post">
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