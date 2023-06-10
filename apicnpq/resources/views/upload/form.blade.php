<x-layout title="UPLOAD">
<div class="container" >
    <form action="/upload/process" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <h4>Esta funcionalidade permite que você popule apenas as tabelas listadas abaixo:</h4>
            <ul>
                <li>UF</li>
                <li>Grande Área</li>
                <!-- <li>Programas CNPq</li> -->
            </ul>
            <p style="color: red;">Lembre-se de realizar a seleção do tipo de upload antes de inserir o arquivo!</p>
            <div class="mb-3">

                    <select name="opcao"class="form-select" id="opcao" >
                        <option selected>Selecione o tipo de upload</option>
                            <option value="uf">uf</option>
                            <option value="ga">Grande Área</option>
                            <!-- <option value="programas">Programas CNPq</option> -->
                    </select>

                <label for="formFile" class="form-label">Envie o csv aqui</label>
                <input class="form-control" type="file" name="file">
            </div>
        </div>
        <button class="btn btn-success" type="submit">Salvar</button>
    </form>
</div>
</x-layout>