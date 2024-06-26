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
                            <a href="{{ route('admin.tag.index') }}">Теги</a>
                        </li>
                        <li class="breadcrumb-item active">Страница тега</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="px-3 pb-3">
        <p><strong>Название тега:</strong> {{ $tag->title }}</p>
        <p><strong>Ссылка:</strong> {{ $tag->slug }}</p>
        <p><strong>Дата создания:</strong> {{ $tag->created_at }}</p>
        <p><strong>Дата обновления:</strong> {{ $tag->updated_at }}</p>
        <p><strong>Дата удаления:</strong> {{ $tag->deleted_at ?? 'Активно' }}</p>
        <a href="{{ route('admin.tag.edit', $tag->slug) }}"
           class="btn btn-block btn-outline-success mb-3 w-25">Редактировать</a>
        <form action="{{ route('admin.tag.delete', $tag->slug) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-block btn-outline-danger w-25"> Удалить</button>
        </form>
    </div>

    @php
        $tagProducts = $tag->products()->paginate($counter_paginate);
    @endphp
    <div class="card">
        <h3 class="h3 p-2 text-center">Товары тега</h3>
        <div class="card-header">
            {{ $tagProducts->links('pagination.custom') }}
        </div>
        <!-- /.card-header -->

        <div class="card-body px-3 py-2  mb-4">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Анонс изображения</th>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Цена</th>
                    <th>Старая цена</th>
                    <th>Кол-во</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tagProducts as $product)
                    <tr>
                        <td class="align-middle">
                            @if($tagProducts->lastPage() === $tagProducts->currentPage())
                                {{-- Пагинация для последней страницы --}}
                                @php $first_el = $tagProducts->lastItem() - $tagProducts->count(); @endphp
                                {{ $first_el + $loop->iteration}}.
                            @else
                                {{-- Пагинация для остальных страниц --}}
                                {{ $tagProducts->count() * ($tagProducts->currentPage() - 1) + $loop->iteration  }}.
                            @endif
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('admin.product.show', $product->slug ) }}">
                                @if($product->prev_img)
                                    <img style="max-width: 150px" src="{{ $product->prev_img }}"
                                         alt="{{ $product->id }}">
                                @else
                                    Изображения нет
                                @endif
                            </a>
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('admin.product.show', $product->slug ) }}">{{ $product->title }}</a>
                        </td>
                        <td class="align-middle">
                            {{ $product->description }}
                        </td>
                        <td class="align-middle">
                            {{ $product->price }}
                        </td>
                        <td class="align-middle">
                            {{ $product->old_price }}
                        </td>
                        <td class="align-middle">
                            {{ $product->count }}
                        </td>
                        <td class="align-middle">
                            <div class="d-flex flex-wrap justify-content-center">
                                <a href="{{ route('admin.product.show', $product->slug ) }}"
                                   class="btn btn-block btn-outline-primary w-auto mt-2">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.product.edit', $product->slug) }}"
                                   class="btn btn-block btn-outline-success mt-0 ml-2 w-auto mt-2">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.product.delete', $product->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-block btn-outline-danger ml-2 mt-2">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-header">
            {{ $tagProducts->links('pagination.custom') }}
        </div>
        <!-- /.card-header -->
    </div>

@endsection('content')

