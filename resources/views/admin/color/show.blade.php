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

    <div class="px-3">
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

@endsection('content')

