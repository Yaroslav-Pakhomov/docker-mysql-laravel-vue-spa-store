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
                        <li class="breadcrumb-item active">Цвета</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <a href="{{ route('admin.color.create') }}" class="btn btn-block btn-outline-primary w-25 ml-3 mb-3">Создать</a>

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                {{ $allColors->links('pagination.custom') }}
            </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body px-3 py-2  mb-4">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Название</th>
                    <th>Цвет</th>
                    <th>Кол-во товара</th>
                    <th>Ссылка</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($allColors  as $color)
                    <tr>
                        <td class="align-middle">
                            @if($allColors->lastPage() === $allColors->currentPage())
                                {{-- Пагинация для последней страницы --}}
                                @php $first_el = $allColors->lastItem() - $allColors->count(); @endphp
                                {{ $first_el + $loop->iteration}}.
                            @else
                                {{-- Пагинация для остальных страниц --}}
                                {{ $allColors->count() * ($allColors->currentPage() - 1) + $loop->iteration  }}.
                            @endif
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('admin.color.show', $color->slug ) }}">{{ $color->title }}</a>
                        </td>
                        <td class="align-middle">
                            <div style="background: {{ $color->code }}; " class="p-2">{{ $color->code }}</div>
                        </td>
                        <td class="align-middle">
                            {{ count($color->products) }}
                        </td>
                        <td class="align-middle">
                            {{ $color->slug }}
                        </td>
                        <td>
                            <div class="d-flex flex-wrap">
                                <a href="{{ route('admin.color.show', $color->slug ) }}"
                                   class="btn btn-block btn-outline-primary w-auto">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.color.edit', $color->slug) }}"
                                   class="btn btn-block btn-outline-success mt-0 ml-2 w-auto">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.color.delete', $color->slug) }}" method="POST">
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
                {{ $allColors->links('pagination.custom') }}
            </div>
        </div>
        <!-- /.card-header -->
    </div>

@endsection('content')

