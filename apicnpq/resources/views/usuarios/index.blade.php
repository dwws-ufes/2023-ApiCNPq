<x-layout title="Usuário">
    <div class="container" >      
        <h1>Lista de Usuários do sistema</h1>
        <ul> 
            @foreach ($users as $user)
            <li>{{$user->nome}}</li>
            @endforeach
        </ul>
    </div>
</x-layout>