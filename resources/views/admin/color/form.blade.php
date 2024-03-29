@csrf
<div class="card-body">
    <div class="form-group">
        <label for="inputTitle">Название цвета</label>
        <input type="text" class="form-control" id="inputTitle" name="title"
               placeholder="Введите название цвета"
               value="{{ old('title') ?? $color->title ?? '' }}">

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
               value="{{ old('slug') ?? $color->slug ?? '' }}">

        {{-- Сообщение ошибок валидации --}}
        @error('slug')
        <div class="alert alert-danger mt-2 ">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <div class="d-flex flex-wrap">
                        <span style="background: {{ old('code') ?? $color->code ?? '' }}; width: 20px; height: 20px;"
                              class="d-block px-2"></span>
            <label for="inputCode" class="px-2">
                Код цвета
            </label>
        </div>
        <input type="text" class="form-control" id="inputCode" name="code" placeholder="Введите код цвета"
               value="{{ old('code') ?? $color->code ?? '' }}">
        <div class="near__color">

        </div>

        {{-- Сообщение ошибок валидации --}}
        @error('code')
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


