@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Страница цвета</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">
                            <a href="{{ route('admin.color.index') }}">Цвета</a>
                        </li>
                        <li class="breadcrumb-item active">Страница цвета</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="px-3 pb-3">
        <p><strong>Название цвета:</strong> {{ $color->title }}</p>
        <p><strong>Код:</strong> <span style="background: {{ $color->code }}; " class="ml-2 p-2">{{ $color->code }}</span></p>
        <p><strong>Ссылка:</strong> {{ $color->slug }}</p>
        <p><strong>Дата создания:</strong> {{ $color->created_at }}</p>
        <p><strong>Дата обновления:</strong> {{ $color->updated_at }}</p>
        <p><strong>Дата удаления:</strong> {{ $color->deleted_at ?? 'Активно' }}</p>
        <a href="{{ route('admin.color.edit', $color->slug) }}" class="btn btn-block btn-outline-success mb-3 w-25">Редактировать</a>
        <form action="{{ route('admin.color.delete', $color->slug) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-block btn-outline-danger w-25"> Удалить</button>
        </form>
    </div>

    @php
        $colorProducts = $color->products()->paginate($counter_paginate);
    @endphp
    <div class="card">
        <h3 class="h3 p-2 text-center">Товары цвета</h3>
        <div class="card-header">
            {{ $colorProducts->links('pagination.custom') }}
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
                @foreach ($colorProducts as $product)
                    <tr>
                        <td class="align-middle">
                            @if($colorProducts->lastPage() === $colorProducts->currentPage())
                                {{-- Пагинация для последней страницы --}}
                                @php $first_el = $colorProducts->lastItem() - $colorProducts->count(); @endphp
                                {{ $first_el + $loop->iteration}}.
                            @else
                                {{-- Пагинация для остальных страниц --}}
                                {{ $colorProducts->count() * ($colorProducts->currentPage() - 1) + $loop->iteration  }}.
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
            {{ $colorProducts->links('pagination.custom') }}
        </div>
        <!-- /.card-header -->
    </div>

@endsection('content')

