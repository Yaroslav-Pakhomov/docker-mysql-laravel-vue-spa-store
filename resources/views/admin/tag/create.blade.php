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
                        <li class="breadcrumb-item active"><a href="{{ route('admin.tag.index') }}">Теги</a></li>
                        <li class="breadcrumb-item active">Создание тега</li>
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
        <form action="{{ route('admin.tag.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Название тега</label>
                    <input type="text" class="form-control" id="inputTitle" name="title"
                           placeholder="Введите название тега"
                           value="{{ old('title') ?? $tag->title ?? '' }}">

                    {{-- Сообщение ошибок валидации --}}
                    @error('title')
                    <div class="alert alert-danger mt-2 opacity-50">
                        <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ссылка</label>
                    <input type="text" class="form-control" id="inputSlug" name="slug" placeholder="Полученная ссылка"
                           value="{{ old('slug') ?? $tag->slug ?? '' }}">

                    {{-- Сообщение ошибок валидации --}}
                    @error('slug')
                    <div class="alert alert-danger mt-2 ">
                        <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>

@endsection('content')

