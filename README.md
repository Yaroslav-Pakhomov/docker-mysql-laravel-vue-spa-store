<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Сайт состоит из интернет-магазина и админ-панели. Интернет-магазина реализован по методологии SPA (бэкенд Laravel +
фроненд Vue). Админ-панель реализована на бэкенде Laravel и встроенного шаблонизатора blade за основу взята AdminLTE.

1. Подготовка проекта:
    * Создание проекта Laravel в текущей директории - composer create-project laravel/laravel ./;
    * Установка Docker для Laravel с помощью пакета Laravel Sail (по умолчанию mysql, redis, meilisearch, mailpit и
      selenium) – composer require laravel/sail –dev, php artisan sail:install:
        * Mysql (Postgresql) - БД для проекта;
        * Redis - БД кэширование данных;
        * Meilisearch - поисковый движок и не рекомендуется использовать как отдельную БД. Поиск осуществляется только по
          началу слова (prefix search);
        * Mailpit - инструмент для локального тестирования электронной почты. Предоставляет веб-интерфейс, с помощью
          которого можно просматривать, искать и отлаживать сообщения электронной почты без отправки их на живой
          почтовый сервер;
        * Selenium - позволяет выбирать браузер, в котором будут открываться страницы, и тестировать сценарии, на
          которые влияют побочные эффекты сторонних компонентов, например JavaScript в разных версиях Chrome, IE,
          Firefox и других.
    * Поменять порт в файле docker-compose.yml у laravel.test на – '8080:80';
    * Изменить доступ к файлам рекурсивно – sudo chmod 755 –R ./;
    * Поднять контейнер напр.: sudo docker compose up –d;
    * Накатить миграцию: подключаемся к контейнеру – sudo docker compose exec –it laravel.test bash, миграция – php
      artisan migrate;
    * Создание алиаса для sail в ~/.bashrc – не обязательно;
    * Установка функционала аутентификации с помощью пакета Laravel Breeze, включая вход в систему, регистрацию, сброс
      пароля, подтверждение электронной почты и подтверждение пароля – composer require laravel/breeze –dev;
    * Установка пакетов Vue и Inertia («адаптер» м/у Vue и Laravel) внутри контейнера – php artisan breeze:install vue;
    * Установка панели debugbar для Laravel - composer require barryvdh/laravel-debugbar --dev.

<h3 align="center">Основа Админ-панели</h3>

2. CRUD по категориям, тегам и цвета:
    * Создание миграций(Migration), фабрик(Factory), наполнителей(Seeder);
    * Создание маршрутов CRUD;
    * Создание ресурсных контроллеров (Controllers), валидации (Request);
    * Создание flash-сообщений;
    * Создание моделей (Models);
    * Создание шаблонов blade для CRUD;
    * <b>Определение цвета по RGB-коду</b> при вводе в поле input (JS):
        * Подключение библиотеки и вызов в JS;
        * Подбор по RGB-коду ближайшего цвета при создании/редактировании цвета.


3. CRUD по пользователям:
    * Доработка миграций(Migration), фабрик(Factory) – добавление полей;
    * Создание маршрутов CRUD;
    * Создание ресурсных контроллера (Controllers), валидации (Request);
    * Создание класса Resource и подключение в методах контроллера (index, show) для преобразования данных;
    * Создание flash-сообщений;
    * Редактирование модели (Models);
    * Создание шаблонов blade для CRUD.


4. CRUD по товарам:
    * Создание миграций(Migration), фабрик(Factory), наполнителей(Seeder) – для товара;
    * Создание миграций(Migration), фабрик(Factory), наполнителей(Seeder) – для pivot таблиц отношения «многие ко
      многим» с цветами, тегами, пользователями;
    * Создание маршрутов CRUD;
    * Создание ресурсных контроллера (Controllers), валидации (Request);
    * Создание flash-сообщений;
    * Создание модели (Models), реализация отношений: «один ко многим» с категорией; «многие ко многим» с цветами,
      тегами, пользователями;
    * Создание шаблонов blade для CRUD.


5. Пагинация:
    * Создание компонента шаблона пагинации;
    * Редактирование запросов в моделях Категория, Цвет, Товар, Тег, Пользователь;
    * Подключение компонента Пагинации в шаблонах категории, цвета, товара, тега, пользователя.


6. Загрузка изображений для товара:
    * Создаёт символьную ссылку из public/storage на storage/app/public - php artisan storage:link;
    * Устанавливаем пакет для работы с изображением - composer require intervention/image;
    * Из изначального изображения создаём два: основное – 1200х600 px; анонс – 600х300 px;
    * Загрузка, редактирование, удаление изображения при создании и удалении товара.


7. Вывод товаров на страницах категории, тега, цвета:
    * Установка отношений «один-ко-многим» для категории и «многие-ко-многим» для тега и цвета в соответствующих
      моделях (Category, Tag, Color);
    * Добавление представления в соответствующие шаблоны blade страниц с пользовательской пагинацией.


8. Раздел с заказами:
    * Ресурсный (CRUD) маршрутизатор (роутинг) и контроллер (Admin/OrderController.php);
    * Страницы шаблоны blade: всех заказов, заказа со списком товаров, редактирование заказа, удаление;
    * Валидация данных при редактировании, обновление записей в БД.

<h3 align="center">Основа Интернет-магазина</h3>

9. Создание основы для SPA:
    * Подключение фавиконки, необходимых библиотек js, css (bootstrap) в шаблоне app.blade.php;
    * Соединение blade, inertia, VUE;
    * Создание директории public/site/assets (файлы фронтэнд вёрстки) и подключение файлов js, css в
      app.blade.php-шаблоне;
    * Создание маршрута, контроллера на Laravel;
    * Создание класса Resource для товара, категории, цвета, тега;
    * Создание VUE layout, главной страницы и подключение layout;
    * Перенос шаблона готовой вёрстки в layout и на главную страницу;


10. Страница "Магазин" фронт и бэк (Laravel и Vue):
    * Создание маршрута, контроллера на Laravel;
    * Создание компонента Pagination на Vue и его подключение;
    * Создание шаблона магазина для постраничного вывода товаров.


11. Модальное окно товара фронтенд и бэкенд (Laravel и Vue), вкладки Главная и Магазин:
    * Создание метода в контроллере Laravel для асинхронного получения данных с бэкенда;
    * Создание класса Resource для полного преобразования данных у категории и товара, вместе с изображениями, тегами,
      цветами;
    * Создание vue-компонента для модального окна;
    * Создание обработчика события и асинхронного запроса (axios) в компонентах страниц «Главная» и «Магазин»;
    * Создание Галереи в модальном окне.


12. Создание Галереи в модальном окне:
    * Создание миграций(Migration), фабрик(Factory), наполнителей(Seeder);
    * Создание модели (Models) CRUD в модели для галереи изображений товара;
    * Доработка Админ-панели: доработка форм товара; доработка валидации.;
    * Добавление и подключение библиотеки swiper.


13. Фильтрация товаров:
    * Создание маршрутизатора и контроллера фильтра;
    * Создание абстрактного класса фильтрации для расширения функционала для тегов, категорий, пользователей и т.д.;
    * Создание интерфейса с методами: метод проверки существования фильтра, метод выбора фильтра по его названию;
    * Создание самого класса фильтра товаров по категории, цветам, тегам, диапазону цены;
    * Создание трейта со scopeFilters для подключения в разные модели и вызова с соответствующей моделью и фильтрами;
    * Валидация данных из формы фильтра, создание сообщений ошибки, определение атрибута поля;
    * Вызов в контроллере метода фильтрации товара;
    * Создание формы фильтрации, стилизация vue;
    * Создание методов переключения параметров фильтра и отправки данных формы на бэкенд vue;
    * Создание компонентов фильтрации для мобильного и широкоэкранных разрешений (Filter.vue и FilterSidebar.vue) и их
      подключение в компоненте «Магазин»;
    * Доработка компонента пагинации с учётом фильтрации.


14. Сортировка товаров:
    * Добавление параметра и метода сортировки (sort, sortBy) в класс фильтрации товара (ProductFilter.php);
    * Валидация параметра из форм, создание сообщений ошибки, определение атрибута поля;
    * Добавление параметра сортировки для мобильного и широкоэкранных разрешений (Filter.vue и FilterSidebar.vue) и их
      подключение в компоненте «Магазин».


15. Страница товара Фронтенд и Бэкенд:
    * Создание маршрута и контроллера(ProductController.php);
    * Создание страницы товара (DetailProduct.vue);
    * Галерея товара;
    * Подключение роутинга на странице «Магазин».


16. Функционал корзина с товарами:
    * Создание страницы корзины: маршрут, контроллер (Laravel), шаблон (фроненд VUE);
    * Навешивание событий на кнопки "В корзину" в модальном окне, на странице с товарами и на странице товара;
    * Запись в хранилище браузера (localStorage) в браузере;
    * Вывод товара в выпадающем справа окне корзины;
    * Создание пользовательского события для localStorage и его отслеживания для изменений товаров в корзине, подсчёт
      количества и общей суммы;
    * Создание кастомного файла с js функциями (Custom/site.js) для написания общих функций подключение в модальном
      окне, в сплывающей корзине справа, на странице товара, корзины и т.д.;
    * Оптимизация кода: вынос общих методов в отдельный компонент с его подключением и вызовом нужных методов


17. Функционал оформление заказа:
    * Создание страницы оформления заказа: маршрут, контроллер (Laravel), шаблон (фроненд VUE);
    * Создание формы для регистрации заказа;
    * Подключение маршрута в компоненты;
    * Создание миграций, моделей Заказа, состава товаров Заказа;
    * Создание контроллера, валидатора данных для записи в БД;
    * Запись в таблицы БД: 'users', 'orders', 'order_items'.


18. Поиск товара на Сайте и в Админ-панели для товаров:
    * В админ-панели поиск товара осуществляется по полям «название», «описание», «содержание»;
    * В админ-панели поиск товара осуществляется по полям «название», «описание», «содержание» и категории;
    * Админ-панель Роутер, Контроллер, Валидатор, Шаблон;
    * Сайт настройка формы в слое, Роутер, метод Контроллера, Валидатор, Шаблон (VUEjs), Пагинация.

<h3 align="center">Технические работы</h3>

19. Обновление пакетов composer(php) и npm(js):
    * «composer update --with-dependencies –o» при загрузки обновлений произвести «composer install»;
    * «npx npm-check-updates -u && npm i» при загрузки обновлений произвести « npm install».


20. Обновление ядра Laravel с 10 на 11 версию:
    * Прописывание в «composer.json» необходимых зависимостей для корректной работы приложения;
    * Вызов «composer install».


21. Переход 8.2 -> 8.3 версии php:
    * Прописывание в «composer.json»;
    * Изменение версии в сервисе laravel.test файла docker-compose.yml;
    * Вызов «composer install».

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and
creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in
many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache)
  storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all
modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a
modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video
tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging
into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in
becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in
the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by
the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell
via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
