@csrf
<div class="card-body">
    <div class="px-3 pb-3">
{{--        <input type="hidden" name="id" value="{{ $order->id }}">--}}
        <p><strong>ID заказа:</strong> {{ $order->id }}</p>
    </div>
    <div class="form-group mb-4">
        <label for="inputEmail" class="d-block border-bottom border-info">Почта</label>
        <input type="text" class="form-control" id="inputEmail" name="email"
               placeholder="Введите название категории"
               value="{{ old('email') ?? $order->user->email ?? '' }}">

        {{-- Сообщение ошибок валидации --}}
        @error('email')
        <div class="alert alert-danger mt-2 opacity-50">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="d-flex flex-wrap my-2">
        <div class="w-50 p-2 border border-5 border-primary">
            <div class="form-group">
                <label for="inputSurname" class="d-block border-bottom border-success">Фамилия юр.</label>
                <input type="text" class="form-control" id="inputSurname" name="surname" placeholder="Полученная ссылка"
                       value="{{ old('surname') ?? $order->user->surname ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('surname')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputName" class="d-block border-bottom border-success">Имя юр.</label>
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Полученная ссылка"
                       value="{{ old('name') ?? $order->user->name ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('name')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputPatronymic" class="d-block border-bottom border-success">Отчество юр.</label>
                <input type="text" class="form-control" id="inputPatronymic" name="patronymic"
                       placeholder="Полученная ссылка"
                       value="{{ old('patronymic') ?? $order->user->patronymic ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('patronymic')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputCompanyName" class="d-block border-bottom border-success">Название компании юр.</label>
                <input type="text" class="form-control" id="inputCompanyName" name="company_name"
                       placeholder="Полученная ссылка"
                       value="{{ old('company_name') ?? $order->company_name ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('company_name')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputAddress" class="d-block border-bottom border-success">Адрес юр.</label>
                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Полученная ссылка"
                       value="{{ old('address') ?? $order->address ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('address')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputCity" class="d-block border-bottom border-success">Город юр.</label>
                <input type="text" class="form-control" id="inputCity" name="city" placeholder="Полученная ссылка"
                       value="{{ old('city') ?? $order->city ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('city')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputCountry" class="d-block border-bottom border-success">Страна юр.</label>
                <input type="text" class="form-control" id="inputCountry" name="country" placeholder="Полученная ссылка"
                       value="{{ old('country') ?? $order->country ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('country')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputPostCode" class="d-block border-bottom border-success">Индекс юр.</label>
                <input type="text" class="form-control" id="inputPostCode" name="post_code"
                       placeholder="Полученная ссылка"
                       value="{{ old('post_code') ?? $order->post_code ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('post_code')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="w-50 p-2 border border-5 border-danger">

            <div class="form-group">
                <label for="inputSurnameFact" class="d-block border-bottom border-warning">Фамилия
                    факт</label>
                <input type="text" class="form-control" id="inputSurnameFact" name="surname_fact"
                       placeholder="Полученная ссылка"
                       value="{{ old('surname_fact') ?? $order->surname_fact ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('surname_fact')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputNameFact" class="d-block border-bottom border-warning">Имя
                    факт</label>
                <input type="text" class="form-control" id="inputNameFact" name="name_fact"
                       placeholder="Полученная ссылка"
                       value="{{ old('name_fact') ?? $order->name_fact ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('name_fact')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputPatronymicFact" class="d-block border-bottom border-warning">Отчество факт</label>
                <input type="text" class="form-control" id="inputPatronymicFact" name="patronymic_fact"
                       placeholder="Полученная ссылка"
                       value="{{ old('patronymic_fact') ?? $order->patronymic_fact ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('patronymic_fact')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputCompanyNameFact" class="d-block border-bottom border-warning">Название компании
                    факт</label>
                <input type="text" class="form-control" id="inputCompanyNameFact" name="company_name_fact"
                       placeholder="Полученная ссылка"
                       value="{{ old('company_name_fact') ?? $order->company_name_fact ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('company_name_fact')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputAddressFact" class="d-block border-bottom border-warning">Адрес факт</label>
                <input type="text" class="form-control" id="inputAddressFact" name="address_fact"
                       placeholder="Полученная ссылка"
                       value="{{ old('address_fact') ?? $order->address_fact ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('address_fact')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputCityFact" class="d-block border-bottom border-warning">Город факт</label>
                <input type="text" class="form-control" id="inputCityFact" name="city_fact"
                       placeholder="Полученная ссылка"
                       value="{{ old('city_fact') ?? $order->city_fact ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('city_fact')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputCountryFact" class="d-block border-bottom border-warning">Страна факт</label>
                <input type="text" class="form-control" id="inputCountryFact" name="country_fact"
                       placeholder="Полученная ссылка"
                       value="{{ old('country_fact') ?? $order->country_fact ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('country_fact')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="inputPostCodeFact" class="d-block border-bottom border-warning">Индекс факт</label>
                <input type="text" class="form-control" id="inputPostCodeFact" name="post_code_fact"
                       placeholder="Полученная ссылка"
                       value="{{ old('post_code_fact') ?? $order->post_code_fact ?? '' }}">

                {{-- Сообщение ошибок валидации --}}
                @error('post_code_fact')
                <div class="alert alert-danger mt-2 ">
                    <button type="button" class="close btn-close" data-dismiss="alert">×</button>
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group mt-4">
        <label for="inputNotes" class="d-block border-bottom border-info">Примечание</label>
        <input type="text" class="form-control" id="inputNotes" name="notes"
               placeholder="Полученная ссылка"
               value="{{ old('notes') ?? $order->notes ?? '' }}">

        {{-- Сообщение ошибок валидации --}}
        @error('notes')
        <div class="alert alert-danger mt-2 ">
            <button type="button" class="close btn-close" data-dismiss="alert">×</button>
            {{ $message }}
        </div>
        @enderror
    </div>

    @php
        $orderProducts = $order->orderItems()->paginate(10);
    @endphp
    <div class="card">
        <h3 class="h3 p-2 text-center">Товары заказа</h3>
        <div class="card-header">
            {{ $orderProducts->links('pagination.custom') }}
        </div>
        <!-- /.card-header -->

{{--        <div class="form-group">--}}
            <div class="card-body px-3 py-2  mb-4">
                <table class="table table-striped">
                    <thead>
                    <tr class="text-center">
                        <th style="width: 10px">#</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Цена</th>
                        <th>Кол-во</th>
                        <th>Стоимость</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orderProducts as $product)
                        <tr>
                            <td class="align-middle">
                                @if($orderProducts->lastPage() === $orderProducts->currentPage())
                                    {{-- Пагинация для последней страницы --}}
                                    @php $first_el = $orderProducts->lastItem() - $orderProducts->count(); @endphp
                                    {{ $first_el + $loop->iteration}}.
                                @else
                                    {{-- Пагинация для остальных страниц --}}
                                    {{ $orderProducts->count() * ($orderProducts->currentPage() - 1) + $loop->iteration  }}
                                    .
                                @endif
                            </td>
                            <td class="align-middle">
                                <div class="form-group">
                                    <input type="hidden" name="cart_products[{{ $product->id }}][id]" value="{{ $product->id }}">
                                    <a href="{{ route('admin.product.show', $product->slug ) }}">{{ $product->title }}</a>
                                </div>
                            </td>
                            <td class="align-middle">
                                {{ $product->description }}
                            </td>
                            <td class="align-middle">
                                <div class="form-group">
                                    <input class="border-0 bg-transparent text-light" type="hidden" name="cart_products[{{ $product->id }}][price]" value="{{ $product->price }}">
                                </div>
                                {{ $product->price }}
                            </td>
                            <td class="align-middle">
                                <div class="quantity__box">
                                    <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                    <label>
                                        <input type="number" class="quantity__number quickview__value--number" name="cart_products[{{ $product->id }}][quantity]" value="{{ $product->pivot->quantity }}" data-counter />
                                    </label>
                                    <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                </div>
                            </td>
                            <td class="align-middle">
                                {{ $product->pivot->cost }}
                            </td>
                            <td class="align-middle">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <a href="{{ route('admin.product.show', $product->slug ) }}"
                                       class="btn btn-block btn-outline-primary w-auto ml-2 mt-2">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <div class="form-check ml-2 mt-2 p-0">
                                        <input class="form-check-input d-none" type="checkbox" name="cart_products[{{ $product->id }}][delete]" value="1" id="flexCheckDefault{{ $product->id }}">
                                        <label class="form-check-label" for="flexCheckDefault{{ $product->id }}">
                                            <span class="btn btn-block btn-outline-danger"><i class="fas fa-trash-alt"></i></span>
                                        </label>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--        </div>--}}

        <div class="card-header">
            {{ $orderProducts->links('pagination.custom') }}
        </div>
        <!-- /.card-header -->
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>




