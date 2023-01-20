@include('CRM.includes.alerts')

<div class="form-group">
    <label>Categoria:</label>
    <input type="text" name="category" class="form-control" placeholder="Categoria:"
        value="{{ $category->category ?? old('category') }}">
</div>
<div class="form-group">
    <label>Descrição:</label>
    <input type="text" name="description" class="form-control" placeholder="Descrição:"
        value="{{ $category->description ?? old('description') }}">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
