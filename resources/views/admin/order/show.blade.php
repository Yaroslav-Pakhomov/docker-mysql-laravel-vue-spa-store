@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Страница заказа</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">
                            <a href="{{ route('admin.order.index') }}">Заказы</a>
                        </li>
                        <li class="breadcrumb-item active">Страница заказа</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{--    @dd($order->user)--}}
    <div class="px-3 pb-3">
        <p><strong>ID заказа:</strong> {{ $order->id }}</p>
        <p><strong>Почта:</strong> {{ $order->user->email }}</p>

        <p><strong>Дата создания:</strong> {{ $order->created_at }}</p>
        <p><strong>Дата обновления:</strong> {{ $order->updated_at }}</p>
        <p><strong>Дата удаления:</strong> {{ $order->deleted_at ?? 'Активно' }}</p>

        <div class="d-flex flex-wrap my-2">
            <div class="mr-1 p-2 border border-5 border-primary">
                <p class="d-block border-bottom border-success"><strong>Фамилия
                        юр.:</strong> {{ $order->user->surname }}</p>
                <p class="d-block border-bottom border-success"><strong>Имя юр.:</strong> {{ $order->user->name }}</p>
                <p class="d-block border-bottom border-success"><strong>Отчество
                        юр.:</strong> {{ $order->user->patronymic }}</p>
                <p class="d-block border-bottom border-success"><strong>Название компании
                        юр.:</strong> {{ $order->company_name }}</p>
                <p class="d-block border-bottom border-success"><strong>Адрес юр.:</strong> {{ $order->address }}</p>
                <p class="d-block border-bottom border-success"><strong>Город юр.:</strong> {{ $order->city }}</p>
                <p class="d-block border-bottom border-success"><strong>Страна юр.:</strong> {{ $order->country }}</p>
                <p class="d-block border-bottom border-success"><strong>Индекс юр.:</strong> {{ $order->post_code }}</p>
            </div>
            <div class="ml-1 p-2 border border-5 border-danger">
                <p class="d-block border-bottom border-warning"><strong>Фамилия
                        факт:</strong> {{ $order->surname_fact }}</p>
                <p class="d-block border-bottom border-warning"><strong>Имя факт:</strong> {{ $order->name_fact }}</p>
                <p class="d-block border-bottom border-warning"><strong>Отчество
                        факт:</strong> {{ $order->patronymic_fact }}</p>
                <p class="d-block border-bottom border-warning"><strong>Название компании
                        факт:</strong> {{ $order->company_name_fact }}</p>
                <p class="d-block border-bottom border-warning"><strong>Город факт:</strong> {{ $order->city_fact }}</p>
                <p class="d-block border-bottom border-warning"><strong>Адрес факт:</strong> {{ $order->address_fact }}
                </p>
                <p class="d-block border-bottom border-warning"><strong>Страна факт:</strong> {{ $order->country_fact }}
                </p>
                <p class="d-block border-bottom border-warning"><strong>Индекс
                        факт:</strong> {{ $order->post_code_fact }}</p>
            </div>
        </div>
    </div>

    {{--    @dd($order->orderItems)--}}
    @php
        $orderProducts = $order->orderItems()->paginate($counter_paginate);
    @endphp
    <div class="card">
        <h3 class="h3 p-2 text-center">Товары заказа</h3>
        <div class="card-header">
            {{ $orderProducts->links('pagination.custom') }}
        </div>
        <!-- /.card-header -->

        <div class="card-body px-3 py-2  mb-4">
            <table class="table table-striped">
                <thead>
                <tr class="text-center">
                    <th style="width: 10px">#</th>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Цена</th>
                    <th>Кол-во</th>
                    <th>Стоимость</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orderProducts as $product)
                    @php
                        // Товар удалён из корзины
                        if ($product->pivot->deleted_at !== NULL) {
                            continue;
                        }
                    @endphp
                    <tr>
                        <td class="align-middle">
                            @if($orderProducts->lastPage() === $orderProducts->currentPage())
                                {{-- Пагинация для последней страницы --}}
                                @php $first_el = $orderProducts->lastItem() - $orderProducts->count(); @endphp
                                {{ $first_el + $loop->iteration}}.
                            @else
                                {{-- Пагинация для остальных страниц --}}
                                {{ $orderProducts->count() * ($orderProducts->currentPage() - 1) + $loop->iteration  }}.
                            @endif
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
                            {{ $product->pivot->quantity }}
                        </td>
                        <td class="align-middle">
                            {{ $product->pivot->cost }}
                        </td>
                        <td class="align-middle">
                            <div class="d-flex flex-wrap justify-content-center">
                                <a href="{{ route('admin.product.show', $product->slug ) }}"
                                   class="btn btn-block btn-outline-primary w-auto mt-2">
                                    <i class="fas fa-eye"></i>
                                </a>
{{--                                <a href="#"--}}
{{--                                   class="btn btn-block btn-outline-success ml-2 w-auto mt-2">--}}
{{--                                    <i class="fas fa-pencil-alt"></i>--}}
{{--                                </a>--}}
{{--                                <form action="#" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <button type="submit" class="btn btn-block btn-outline-danger ml-2 mt-2">--}}
{{--                                        <i class="fas fa-trash-alt"></i>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-header">
            {{ $orderProducts->links('pagination.custom') }}
        </div>
        <!-- /.card-header -->
    </div>

    <div class="pl-3 pb-3">
        <a href="{{ route('admin.order.edit', $order->id) }}" class="btn btn-block btn-outline-success mb-3 w-25">Редактировать</a>
        <form action="{{ route('admin.order.delete', $order->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-block btn-outline-danger w-25"> Удалить</button>
        </form>
    </div>


@endsection('content')

