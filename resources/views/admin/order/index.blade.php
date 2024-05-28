@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Цвета</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Заказы</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                {{ $allOrder->links('pagination.custom') }}
            </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body px-3 py-2  mb-4">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>ID</th>
                    <th>Компания факт</th>
                    <th>Адрес факт</th>
                    <th>ФИО факт</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($allOrder as $order)
                    <tr>
                        <td class="align-middle">
                            @if($allOrder->lastPage() === $allOrder->currentPage())
                                {{-- Пагинация для последней страницы --}}
                                @php $first_el = $allOrder->lastItem() - $allOrder->count(); @endphp
                                {{ $first_el + $loop->iteration}}.
                            @else
                                {{-- Пагинация для остальных страниц --}}
                                {{ $allOrder->count() * ($allOrder->currentPage() - 1) + $loop->iteration  }}.
                            @endif
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('admin.order.show', $order->id ) }}">{{ $order->id }}</a>
                        </td>
                        <td class="align-middle">
                            <div style="background: {{ $order->code }}; " class="p-2">{{ $order->company_name_fact }}</div>
                        </td>
                        <td class="align-middle">
                            {{ $order->country_fact }} {{ $order->city_fact }} {{ $order->address_fact }}
                        </td>
                        <td class="align-middle">
                            {{ $order->surname_fact }} {{ $order->name_fact }} {{ $order->patronymic_fact }}
                        </td>
                        <td>
                            <div class="d-flex flex-wrap">
                                <a href="{{ route('admin.order.show', $order->id ) }}"
                                   class="btn btn-block btn-outline-primary w-auto">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.order.edit', $order->id) }}"
                                   class="btn btn-block btn-outline-success mt-0 ml-2 w-auto">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.order.delete', $order->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-block btn-outline-danger ml-2">
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
        <!-- /.card-body -->

        <div class="card-header">
            <div class="card-tools">
                {{ $allOrder->links('pagination.custom') }}
            </div>
        </div>
        <!-- /.card-header -->
    </div>

@endsection('content')

