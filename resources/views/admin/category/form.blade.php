@csrf
<div class="card-body">
    <div class="form-group">
        <label for="inputTitle">Название категории</label>
        <input type="text" class="form-control" id="inputTitle" name="title"
               placeholder="Введите название категории"
               value="{{ old('title') ?? $category->title ?? '' }}">

        {{-- Сообщение ошибок валидации --}}
        @error('title')
        <div class="alert alert-danger mt-2 opacity-50">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputSlug">Ссылка</label>
        <input type="text" class="form-control" id="inputSlug" name="slug" placeholder="Полученная ссылка"
               value="{{ old('slug') ?? $category->slug ?? '' }}">

        {{-- Сообщение ошибок валидации --}}
        @error('slug')
        <div class="alert alert-danger mt-2 ">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>

