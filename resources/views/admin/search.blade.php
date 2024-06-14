@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Поиск</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Поиск</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $countOrders }}</h3>
                            <p>Заказы</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('admin.order.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
{{--                            <h3>53<sup style="font-size: 20px">%</sup></h3>--}}
                            <h3>{{ $countProducts }}</h3>
                            <p>Товары</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('admin.product.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $countUsers }}</h3>
                            <p>Пользователи</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('admin.user.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $countCategories }}</h3>

                            <p>Категории</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{ route('admin.category.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="card-header">
        Товары <small>({{ $result_search->total() }})</small>
    </div>

{{--    @dump($validated)--}}
{{--    @dump($result_search)--}}

    <div class="album py-3 bg-light">
        <div class="container">
            <div class="card-header">
                {{-- Пагинация с учётом поиска--}}
                {{ $result_search->appends($validated)->links('pagination.custom') }}
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($result_search as $product)
                    <div class="col">
                        <div class="card shadow-sm">
                            <a href="{{ route('admin.product.show', $product->slug ) }}">
                                @if($product->prev_img)
                                    <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ $product->prev_img }}" alt="{{ $product->id }}">
                                @else
                                    Изображения нет
                                @endif
                            </a>
                            <div class="card-body">
                                <p class="card-text">{{ $product->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.product.show', $product->slug ) }}" class="btn btn-sm btn-outline-secondary">Посмотреть</a>
                                        <a href="{{ route('admin.product.edit', $product->slug) }}" class="btn btn-sm btn-outline-secondary">Редактировать</a>
                                    </div>
                                    <small class="text-muted"> {{ $product->updated_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="card-header">
                {{-- Пагинация с учётом поиска--}}
                {{ $result_search->appends($validated)->links('pagination.custom') }}
            </div>
        </div>
    </div>
{{--    {{ $validated["search_value"] }}--}}

@endsection('content')

