<x-layout title="Relatório">
    <div class="container">
        <h1>Relatório</h1>

        <table class="table" style="text-align: center;">
            <thead>
                <tr>
                <th scope="col">Quantidade de beneficiários cadastrados no sistema</th>
                <th scope="col">Valor total cadastrado em bolsas</th>
                <th scope="col">Valor total pago em bolsas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>{{ $quantidadeBeneficiarios }}</td>
                <td>R${{ $valorTotalBolsasCadastradas }}</td>
                <td>R${{$valorTotalBolsas}}</td>
                </tr>
            
            </tbody>
        </table>
    </div>
</x-layout>