@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Теги</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Теги</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <a href="{{ route('admin.tag.create') }}" class="btn btn-block btn-outline-primary w-25 ml-3 mb-3">Создать</a>

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body px-3 py-2  mb-4">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Название</th>
                    <th>Ссылка</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($allTags  as $tag)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}.</td>
                        <td class="align-middle">
                            <a href="{{ route('admin.tag.show', $tag->slug ) }}">{{ $tag->title }}</a>
                        </td>
                        <td class="align-middle">
                            {{ $tag->slug }}
                        </td>
                        <td>
                            <div class="d-flex flex-wrap">
                                <a href="{{ route('admin.tag.show', $tag->slug ) }}"
                                   class="btn btn-block btn-outline-primary w-auto">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.tag.edit', $tag->slug) }}"
                                   class="btn btn-block btn-outline-success mt-0 ml-2 w-auto">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.tag.delete', $tag->slug) }}" method="POST">
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
                <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- /.card-header -->
    </div>

@endsection('content')

