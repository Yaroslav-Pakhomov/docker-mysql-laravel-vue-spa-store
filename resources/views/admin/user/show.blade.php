@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Страница пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">
                            <a href="{{ route('admin.user.index') }}">Пользователи</a>
                        </li>
                        <li class="breadcrumb-item active">Страница пользователя</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="px-3">
        <p><strong>Имя:</strong> {{ $user->name }}</p>
        <p><strong>Отчество:</strong> {{ $user->patronymic }}</p>
        <p><strong>Фамилия:</strong> {{ $user->surname }}</p>
        <p><strong>Почта:</strong> {{ $user->email }}</p>
        <p><strong>Возраст:</strong> {{ $user->age }}</p>
        <p><strong>Адрес:</strong> {{ $user->address }}</p>
        <p><strong>Пол:</strong> {{ $user->gender === 0 ? 'не указан' : ($user->gender === 1 ? 'М' : 'Ж') }}</p>
        <p><strong>Дата создания:</strong> {{ $user->created_at }}</p>
        <p><strong>Дата обновления:</strong> {{ $user->updated_at }}</p>
        <p><strong>Дата удаления:</strong> {{ $user->deleted_at ?? 'Активно' }}</p>
        <a href="{{ route('admin.user.edit', $user->email) }}"
           class="btn btn-block btn-outline-success mb-3 w-25">Редактировать</a>
        <form action="{{ route('admin.user.delete', $user->email) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-block btn-outline-danger w-25"> Удалить</button>
        </form>
    </div>

@endsection('content')

