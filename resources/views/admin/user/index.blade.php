@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователи</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Пользователи</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <a href="{{ route('admin.user.create') }}" class="btn btn-block btn-outline-primary w-25 ml-3 mb-3">Создать</a>

    <div class="card">
        <div class="card-header">
            <div class="card-tools">
                {{ $allUsers->links('pagination.custom') }}
            </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body px-3 py-2  mb-4">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Фамилия</th>
                    <th>Возраст</th>
                    <th>Адрес</th>
                    <th>Пол</th>
                    <th>Почта</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($allUsers  as $user)
                    <tr>
                        <td class="align-middle">
                            @if($allUsers->lastPage() === $allUsers->currentPage())
                                {{-- Пагинация для последней страницы --}}
                                @php $first_el = $allUsers->lastItem() - $allUsers->count(); @endphp
                                {{ $first_el + $loop->iteration}}.
                            @else
                                {{-- Пагинация для остальных страниц --}}
                                {{ $allUsers->count() * ($allUsers->currentPage() - 1) + $loop->iteration  }}.
                            @endif
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('admin.user.show', $user->email ) }}">{{ $user->name }}</a>
                        </td>
                        <td class="align-middle">
                            {{ $user->patronymic }}
                        </td>
                        <td class="align-middle">
                            {{ $user->surname }}
                        </td>
                        <td class="align-middle">
                            {{ $user->age }}
                        </td>
                        <td class="align-middle">
                            {{ $user->address }}
                        </td>
                        <td class="align-middle">
                            {{ $user->gender === 0 ? 'не указан' : ($user->gender === 1 ? 'М' : 'Ж') }}
                        </td>
                        <td class="align-middle">
                            {{ $user->email }}
                        </td>
                        <td>
                            <div class="d-flex flex-wrap">
                                <a href="{{ route('admin.user.show', $user->email ) }}"
                                   class="btn btn-block btn-outline-primary w-auto">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.user.edit', $user->email) }}"
                                   class="btn btn-block btn-outline-success mt-0 ml-2 w-auto">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.user.delete', $user->email) }}" method="POST">
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
                {{ $allUsers->links('pagination.custom') }}
            </div>
        </div>
        <!-- /.card-header -->
    </div>

@endsection('content')

