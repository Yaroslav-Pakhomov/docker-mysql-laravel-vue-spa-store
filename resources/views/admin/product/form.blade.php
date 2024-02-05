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
        <label for="textareaDescription">Описание</label>
        <textarea class="form-control" id="textareaDescription" name="description" rows="3"
                  placeholder="Описание товара">{{ old('description') ?? $product->description ?? '' }}</textarea>

        {{-- Сообщение ошибок валидации --}}
        @error('description')
        <div class="alert alert-danger mt-2 ">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="textareaContent">Содержание</label>

        <textarea class="form-control" id="textareaContent" name="content" rows="7"
                  placeholder="Содержание товара">{{ old('content') ?? $product->content ?? '' }}</textarea>

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
        <label for="inputPrice">Цена</label>
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
    <div class="form-group mb-2">
        @if (old('is_published') === 'on' || (isset($product) && $product->is_published === 1))
            @php $checked = 'checked'; @endphp
        @else
            @php $checked = ''; @endphp
        @endif

        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
            <input type="checkbox" class="custom-control-input" id="checkIsPublished"
                   name="is_published" {{ $checked }}>
            <label class="custom-control-label" for="checkIsPublished">Опубликовать</label>
        </div>

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
                @php
                    $selected = '';
                    if (isset($product->category)) {
                        $selected = isset($product) && $category->id === $product->category->id ? 'selected' : '';
                    }
                @endphp
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
    <div class="form-group">
        <label>Теги товара</label>
        <select class="select2" name="tags[]" multiple="multiple" data-placeholder="Список тегов" style="width: 100%;">
            @foreach($tags as $tag)
                @if(isset($productTagIds))
                    @php $selected = in_array($tag->id, $productTagIds, true) ? 'selected' : ''; @endphp
                @endif
                <option value="{{ $tag->id }}" {{ $selected }}>{{ $tag->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Цвета товара</label>
        <select class="select2 bg-gradient-cyan" name="colors[]" multiple="multiple" data-placeholder="Список тегов"
                style="width: 100%;">
            @foreach($colors as $color)
                @if(isset($productColorIds))
                    @php $selected = in_array($color->id, $productColorIds, true) ? 'selected' : ''; @endphp
                @endif
                <option value="{{ $color->id }}" {{ $selected }}>{{ $color->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>В избранном у пользователей</label>
        <div class="select2-purple">
            <select class="select2" name="users[]" multiple="multiple" data-placeholder="Список пользователей"
                    data-dropdown-css-class="select2-purple" style="width: 100%;">
                @foreach($users as $user)
                    @if(isset($productUserIds))
                        @php $selected = in_array($user->id, $productUserIds, true) ? 'selected' : ''; @endphp
                    @endif
                    <option class="bg-success" value="{{ $user->id }}" {{ $selected }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>


