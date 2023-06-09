<x-layout title="UPLOAD">
<div class="container" >
    <form action="/upload/process" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="mb-3">
                <label for="formFile" class="form-label">Envie o csv aqui</label>
                <input class="form-control" type="file" name="file">
            </div>
        </div>
        <button class="btn btn-success" type="submit">Salvar</button>
    </form>
</div>
</x-layout>