@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование тега</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">
                            <a href="{{ route('admin.user.index') }}">Пользователи</a>
                        </li>
                        <li class="breadcrumb-item active">Редактирование пользователя</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card card-primary mx-3">
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Имя</label>
                    <input type="text" class="form-control" id="inputName" name="name"
                           placeholder="Введите Ваше имя"
                           value="{{ old('name') ?? $user->name ?? '' }}">

                    {{-- Сообщение ошибок валидации --}}
                    @error('name')
                    <div class="alert alert-danger mt-2 opacity-50">
                        <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPatronymic">Отчество</label>
                    <input type="text" class="form-control" id="inputPatronymic" name="patronymic"
                           placeholder="Введите Ваше отчество"
                           value="{{ old('patronymic') ?? $user->patronymic ?? '' }}">

                    {{-- Сообщение ошибок валидации --}}
                    @error('patronymic')
                    <div class="alert alert-danger mt-2 ">
                        <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputSurname">Фамилия</label>
                    <input type="text" class="form-control" id="inputSurname" name="surname"
                           placeholder="Введите Вашу фамилию"
                           value="{{ old('surname') ?? $user->surname ?? '' }}">

                    {{-- Сообщение ошибок валидации --}}
                    @error('surname')
                    <div class="alert alert-danger mt-2 ">
                        <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputAge">Возраст</label>
                    <input type="text" class="form-control" id="inputAge" name="age" placeholder="Вашу возраст"
                           value="{{ old('age') ?? $user->age ?? '' }}">

                    {{-- Сообщение ошибок валидации --}}
                    @error('age')
                    <div class="alert alert-danger mt-2 ">
                        <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputAddress">Адрес</label>
                    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Вашу возраст"
                           value="{{ old('address') ?? $user->address ?? '' }}">

                    {{-- Сообщение ошибок валидации --}}
                    @error('address')
                    <div class="alert alert-danger mt-2 ">
                        <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputEmail">Почта</label>
                    <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Вашу почта"
                           value="{{ old('email') ?? $user->email ?? '' }}">

                    {{-- Сообщение ошибок валидации --}}
                    @error('email')
                    <div class="alert alert-danger mt-2 ">
                        <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    {{ $user->gender }}
                    <label for="inputGender">Пол</label>
                    <select class="custom-select" name="gender" id="inputGender">
                        <option selected>Укажите Ваш пол</option>
                        <option value="1" {{ $user->gender === 1 ? 'selected' : '' }}>М</option>
                        <option value="2" {{ $user->gender === 2 ? 'selected' : '' }}>Ж</option>
                    </select>
                </div>




            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Редактировать</button>
            </div>
        </form>
    </div>

@endsection('content')

