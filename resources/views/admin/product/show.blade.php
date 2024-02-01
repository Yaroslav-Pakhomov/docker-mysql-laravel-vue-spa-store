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
        <p><strong>Название товара:</strong> {{ $product->title }}</p>
        <p><strong>Ссылка:</strong> {{ $product->slug }}</p>

        <p><strong>Описание:</strong> {{ $product->description }}</p>
        <p><strong>Содержание:</strong> {{ $product->content }}</p>

        <p><strong>Анонс изображение:</strong> <img src="{{ $product->prev_img }}" alt="{{ $product->id }}"></p>
        <p><strong>Основное изображение:</strong> <img src="{{ $product->main_img }}" alt="{{ $product->id }}"></p>

        <p><strong>Цена:</strong> {{ $product->price }}</p>
        <p><strong>Старая цена:</strong> {{ $product->old_price }}</p>
        <p><strong>Количество:</strong> {{ $product->count }}</p>

        <p><strong>Опубликовано:</strong> {{ $product->is_published === 1 ? 'Да' : 'Нет' }}</p>
        <p><strong>Категория:</strong>
            <a href="{{ route('admin.category.show', $product->category->slug) }}">{{ $product->category->title }}</a>
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

