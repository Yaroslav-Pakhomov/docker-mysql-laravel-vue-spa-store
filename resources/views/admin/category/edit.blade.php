@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование категории</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">
                            <a href="{{ route('admin.category.index') }}">Категории</a>
                        </li>
                        <li class="breadcrumb-item active">Редактирование категории</li>
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
        <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Название категории</label>
                    <input type="text" class="form-control" id="inputTitle" name="title"
                           placeholder="Введите название категории"
                           value="{{ old('title') ?? $category->title ?? '' }}">

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
                           value="{{ old('slug') ?? $category->slug ?? '' }}">

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
                <button type="submit" class="btn btn-primary">Редактировать</button>
            </div>
        </form>
    </div>

@endsection('content')

