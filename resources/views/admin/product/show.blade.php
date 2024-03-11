@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Страница тега</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">
                            <a href="{{ route('admin.product.index') }}">Товары</a>
                        </li>
                        <li class="breadcrumb-item active">Страница товара</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="px-3 mb-1">
        <p><strong>ID:</strong> {{ $product->id }}</p>
        <p><strong>Название товара:</strong> {{ $product->title }}</p>
        <p><strong>Ссылка:</strong> {{ $product->slug }}</p>

        <p><strong>Описание:</strong> {{ $product->description }}</p>
        <p><strong>Содержание:</strong> {{ $product->content }}</p>

        <p><strong>Анонс изображение:</strong>
            @if($product->prev_img)
                <img src="{{ $product->prev_img }}" alt="{{ $product->id }}">
            @else
                Нет
            @endif
        </p>
        <p><strong>Основное изображение:</strong>
            @if($product->prev_img)
                <img src="{{ $product->main_img }}" alt="{{ $product->id }}">
            @else
                Нет
            @endif
        </p>

        <p><strong>Цена:</strong> {{ $product->price }}</p>
        <p><strong>Старая цена:</strong> {{ $product->old_price }}</p>
        <p><strong>Количество:</strong> {{ $product->count }}</p>

        <p><strong>Опубликовано:</strong> {{ $product->is_published === 1 ? 'Да' : 'Нет' }}</p>
        <p><strong>Категория:</strong>
            @if($product->category)
                <a href="{{ route('admin.category.show', $product->category->slug) }}">{{ $product->category->title }}</a>
            @else
                Не указана
            @endif
        </p>

        <p><strong>Теги: </strong>
            @foreach($product->tags as $tag)
                <a class="ml-1 px-3 py-1 border border-primary rounded"
                   href="{{ route('admin.tag.show', $tag->slug) }}">{{ $tag->title }}</a>
            @endforeach
        </p>

        <p><strong>Цвета: </strong>
            @foreach($product->colors as $color)
                <a style="background: {{ $color->code }};" class="ml-2 px-3 py-1 rounded"
                   href="{{ route('admin.color.show', $color->slug) }}">{{ $color->title }}</a>
            @endforeach
        </p>

        <p><strong>В избранном у пользователей: </strong>
            @foreach($product->users as $user)
                <a class="ml-1 px-3 py-1 border border-primary rounded"
                   href="{{ route('admin.user.show', $user->email) }}">{{ $user->name }}</a>
            @endforeach
        </p>

        <p>
            <strong>Галерея: </strong>

            @if(count($product->productImages) > 0)
                <div class="d-flex flex-wrap">
                    @foreach($product->productImages as $productImage)
                        <img class="d-inline-block w-25 my-5 mx-auto" src="{{ $productImage->main_gallery }}"
                             alt="{{ $productImage->id }}">
                    @endforeach
                </div>
            @else
                Нет изображений
            @endif

        </p>

        <p><strong>Дата создания:</strong> {{ $product->created_at }}</p>
        <p><strong>Дата обновления:</strong> {{ $product->updated_at }}</p>
        <p><strong>Дата удаления:</strong> {{ $product->deleted_at ?? 'Активно' }}</p>
        <a href="{{ route('admin.product.edit', $product->slug) }}"
           class="btn btn-block btn-outline-success mb-3 w-25">Редактировать</a>
        <form action="{{ route('admin.product.delete', $product->slug) }}" method="POST" class="pb-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-block btn-outline-danger w-25"> Удалить</button>
        </form>
    </div>

@endsection('content')

