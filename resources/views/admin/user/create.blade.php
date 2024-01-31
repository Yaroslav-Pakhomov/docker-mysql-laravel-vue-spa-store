@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Создание тега</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.user.index') }}">Пользователи</a>
                        </li>
                        <li class="breadcrumb-item active">Создание пользователя</li>
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
        <form action="{{ route('admin.user.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Имя</label>
                    <input type="text" class="form-control" id="inputName" name="name"
                           placeholder="Введите Ваше имя"
                           value="{{ old('name') ?? '' }}">

                    {{-- Сообщение ошибок валидации --}}
                    @error('name')
                    <div class="alert alert-danger mt-2 opacity-50">
                        <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPassword">Пароль</label>
                    <input type="text" class="form-control" id="inputPassword" name="password"
                           placeholder="Введите пароль"
                           value="{{ old('password') ?? '' }}">

                    {{-- Сообщение ошибок валидации --}}
                    @error('password')
                    <div class="alert alert-danger mt-2 opacity-50">
                        <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPasswordConfirmation">Подтверждение пароля</label>
                    <input type="text" class="form-control" id="inputPasswordConfirmation" name="password_confirmation"
                           placeholder="Подтвердите Ваш пароль"
                           value="{{ old('password_confirmation') ?? '' }}">

                    {{-- Сообщение ошибок валидации --}}
                    @error('password_confirmation')
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
                           value="{{ old('patronymic') ?? '' }}">

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
                           value="{{ old('surname') ?? '' }}">

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
                           value="{{ old('age') ?? '' }}">

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
                           value="{{ old('address') ?? '' }}">

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
                           value="{{ old('email') ?? '' }}">

                    {{-- Сообщение ошибок валидации --}}
                    @error('email')
                    <div class="alert alert-danger mt-2 ">
                        <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputGender">Пол</label>
                    <select class="custom-select" name="gender" id="inputGender">
                        <option value="0" selected>Укажите Ваш пол</option>
                        <option value="1" {{ old('gender') === 1 ? 'selected' : '' }}>М</option>
                        <option value="2" {{ old('gender') === 2 ? 'selected' : '' }}>Ж</option>
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

