@csrf

<div class="card-body">
    <div class="form-group">
        <label for="inputTitle">Название товара</label>
        <input type="text" class="form-control" id="inputTitle" name="title"
               placeholder="Введите название товара"
               value="{{ old('title') ?? $product->title ?? '' }}">

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
               value="{{ old('slug') ?? $product->slug ?? '' }}">

        {{-- Сообщение ошибок валидации --}}
        @error('slug')
        <div class="alert alert-danger mt-2 ">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputDescription">Описание</label>
        <input type="text" class="form-control" id="inputDescription" name="description"
               placeholder="Описание товара"
               value="{{ old('description') ?? $product->description ?? '' }}">

        {{-- Сообщение ошибок валидации --}}
        @error('description')
        <div class="alert alert-danger mt-2 ">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputContent">Содержание</label>
        <input type="text" class="form-control" id="inputContent" name="content"
               placeholder="Содержание товара"
               value="{{ old('content') ?? $product->content ?? '' }}">

        {{-- Сообщение ошибок валидации --}}
        @error('content')
        <div class="alert alert-danger mt-2 ">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputImg">Загрузите изображение</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputImg" name="img">
                <label class="custom-file-label" for="inputImg">Выберете файл (jpeg, jpg, png)</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text">Загрузить</span>
            </div>
        </div>

        {{-- Сообщение ошибок валидации --}}
        @error('img')
        <div class="alert alert-danger mt-2 ">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputPrice">Цены</label>
        <input type="text" class="form-control" id="inputPrice" name="price" placeholder="Стоимость товара"
               value="{{ old('price') ?? $product->price ?? '' }}">

        {{-- Сообщение ошибок валидации --}}
        @error('price')
        <div class="alert alert-danger mt-2 ">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputOldPrice">Старая цена</label>
        <input type="text" class="form-control" id="inputOldPrice" name="old_price"
               placeholder="Старая стоимость товара"
               value="{{ old('old_price') ?? $product->old_price ?? '' }}">

        {{-- Сообщение ошибок валидации --}}
        @error('old_price')
        <div class="alert alert-danger mt-2 ">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="inputCount">Количество</label>
        <input type="text" class="form-control" id="inputCount" name="count" placeholder="Количество товара"
               value="{{ old('count') ?? $product->count ?? '' }}">

        {{-- Сообщение ошибок валидации --}}
        @error('count')
        <div class="alert alert-danger mt-2 ">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-check mb-2">
        @if (old('is_published') === 'on' || (isset($product) && $product->is_published === 1))
            @php $checked = 'checked'; @endphp
        @else
            @php $checked = ''; @endphp
        @endif

        <input type="checkbox" class="form-check-input" id="checkIsPublished"
               name="is_published" {{ $checked }}>
        <label class="form-check-label" for="checkIsPublished">Опубликовать</label>

        {{-- Сообщение ошибок валидации --}}
        @error('is_published')
        <div class="alert alert-danger mt-2 ">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="selectCategory">Выбор категории</label>
        <select class="form-control" id="selectCategory" name="category_id">
            <option value="0">Выберите категорию</option>
            @foreach($categories as $category)
                @php $selected = isset($product) && $category->id === $product->category->id ? 'selected' : ''; @endphp
                <option value="{{ $category->id }}" {{ $selected }}>{{  $category->title}}</option>
            @endforeach
        </select>

        {{-- Сообщение ошибок валидации --}}
        @error('category_id')
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


