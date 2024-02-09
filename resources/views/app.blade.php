<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('laravel_icon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/plugins/glightbox.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&display=swap"
        rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/vendor/bootstrap.min.css') }}">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>
<body class="font-sans antialiased">

<!-- Start preloader -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                        <span data-text-preloader="L" class="letters-loading">
                            L
                        </span>

                <span data-text-preloader="O" class="letters-loading">
                            O
                        </span>

                <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>

                <span data-text-preloader="D" class="letters-loading">
                            D
                        </span>

                <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>

                <span data-text-preloader="N" class="letters-loading">
                            N
                        </span>

                <span data-text-preloader="G" class="letters-loading">
                            G
                        </span>
            </div>
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
</div>
<!-- End preloader -->

<!-- Start header area -->
<header class="header__section mb-20">
    <div class="header__topbar border-bottom">
        <div class="container">
            <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                <ul class="header__topbar--info d-none d-lg-flex">
                    <li class="header__info--list">
                        <a class="header__info--link" href="shop.html">STORES</a>
                    </li>
                    <li class="header__info--list">
                        <a class="header__info--link" href="shop.html">DELIVERY</a>
                    </li>
                    <li class="header__info--list">
                        <a class="header__info--link" href="privacy-policy.html">GUARANTEE</a>
                    </li>
                    <li class="header__info--list">
                        <a class="header__info--link" href="mailto:info@example.com">
                            <svg width="15" height="13" viewBox="0 0 15 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.368 9.104C7.26133 9.17867 7.13867 9.216 7 9.216C6.86133 9.216 6.744 9.17867 6.648 9.104L0.36 4.624C0.264 4.56 0.178667 4.54933 0.104 4.592C0.04 4.624 0.00800002 4.69867 0.00800002 4.816V11.984C0.00800002 12.112 0.0506667 12.2187 0.136 12.304C0.221333 12.3893 0.322667 12.432 0.44 12.432H13.56C13.6773 12.432 13.7787 12.3893 13.864 12.304C13.96 12.2187 14.008 12.112 14.008 11.984V4.816C14.008 4.69867 13.9707 4.624 13.896 4.592C13.8213 4.54933 13.736 4.56 13.64 4.624L7.368 9.104ZM6.76 8.32C6.84533 8.37333 6.92533 8.4 7 8.4C7.08533 8.4 7.16533 8.37333 7.24 8.32L12.52 4.56C12.6373 4.464 12.696 4.352 12.696 4.224V0.783999C12.696 0.666666 12.6533 0.570666 12.568 0.495999C12.4933 0.410666 12.3973 0.367999 12.28 0.367999H1.72C1.60267 0.367999 1.50667 0.410666 1.432 0.495999C1.35733 0.570666 1.32 0.666666 1.32 0.783999V4.224C1.32 4.37333 1.37333 4.48533 1.48 4.56L6.76 8.32ZM3.784 2.064H9.96C10.088 2.064 10.1947 2.112 10.28 2.208C10.3653 2.29333 10.408 2.4 10.408 2.528C10.408 2.64533 10.3653 2.74667 10.28 2.832C10.1947 2.91733 10.088 2.96 9.96 2.96H3.784C3.656 2.96 3.54933 2.91733 3.464 2.832C3.37867 2.74667 3.336 2.64533 3.336 2.528C3.336 2.4 3.37867 2.29333 3.464 2.208C3.54933 2.112 3.656 2.064 3.784 2.064ZM3.784 3.632H9.96C10.088 3.632 10.1947 3.68 10.28 3.776C10.3653 3.86133 10.408 3.96267 10.408 4.08C10.408 4.19733 10.3653 4.304 10.28 4.4C10.1947 4.48533 10.088 4.528 9.96 4.528H3.784C3.656 4.528 3.54933 4.48533 3.464 4.4C3.37867 4.31467 3.336 4.21333 3.336 4.096C3.336 3.968 3.37867 3.86133 3.464 3.776C3.54933 3.68 3.656 3.632 3.784 3.632Z"
                                    fill="#FF2D37"/>
                            </svg>
                            info@example.com</a>
                    </li>
                </ul>
                <div class="header__top--right d-flex align-items-center">
                    <ul class="header__top--link d-flex align-items-center">
                        <li class="header__link--menu"><a class="header__link--menu__text" href="wishlist.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class=" -heart">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                                Wishlist</a>
                        </li>
                        <li class="header__link--menu"><a class="header__link--menu__text" href="compare.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512 512">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="32"
                                          d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/>
                                    <path
                                        d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32"/>
                                </svg>
                                Compare</a>
                        </li>
                    </ul>
                    <ul class="social__share d-flex">
                        <li class="social__share--list">
                            <a class="social__share--icon" target="_blank" href="https://www.facebook.com">
                                <svg width="9" height="15" viewBox="0 0 9 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                        fill="currentColor"/>
                                </svg>
                                <span class="visually-hidden">Facebook</span>
                            </a>
                        </li>
                        <li class="social__share--list">
                            <a class="social__share--icon" target="_blank" href="https://twitter.com">
                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                        fill="currentColor"/>
                                </svg>
                                <span class="visually-hidden">Twitter</span>
                            </a>
                        </li>
                        <li class="social__share--list">
                            <a class="social__share--icon" target="_blank" href="https://www.instagram.com">
                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                        fill="currentColor"/>
                                </svg>
                                <span class="visually-hidden">Instagram</span>
                            </a>
                        </li>
                        <li class="social__share--list">
                            <a class="social__share--icon" target="_blank" href="https://www.youtube.com">
                                <svg width="16" height="11" viewBox="0 0 16 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z"
                                        fill="currentColor"/>
                                </svg>
                                <span class="visually-hidden">Youtube</span>
                            </a>
                        </li>
                        <li class="social__share--list">
                            <a class="social__share--icon" target="_blank" href="https://www.pinterest.com">
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.5625 7.75C13.5625 4.00391 10.5273 0.96875 6.78125 0.96875C3.03516 0.96875 0 4.00391 0 7.75C0 10.6484 1.77734 13.082 4.29297 14.0664C4.23828 13.5469 4.18359 12.7266 4.32031 12.125C4.45703 11.6055 5.11328 8.76172 5.11328 8.76172C5.11328 8.76172 4.92188 8.35156 4.92188 7.75C4.92188 6.82031 5.46875 6.10938 6.15234 6.10938C6.72656 6.10938 7 6.54688 7 7.06641C7 7.64062 6.61719 8.51562 6.42578 9.33594C6.28906 9.99219 6.78125 10.5391 7.4375 10.5391C8.64062 10.5391 9.57031 9.28125 9.57031 7.44922C9.57031 5.80859 8.39453 4.6875 6.75391 4.6875C4.8125 4.6875 3.69141 6.13672 3.69141 7.61328C3.69141 8.21484 3.91016 8.84375 4.18359 9.17188C4.23828 9.22656 4.23828 9.30859 4.23828 9.36328C4.18359 9.58203 4.04688 10.0469 4.04688 10.1289C4.01953 10.2656 3.9375 10.293 3.80078 10.2383C2.95312 9.82812 2.43359 8.59766 2.43359 7.58594C2.43359 5.45312 3.99219 3.48438 6.91797 3.48438C9.26953 3.48438 11.1016 5.17969 11.1016 7.42188C11.1016 9.74609 9.625 11.6328 7.57422 11.6328C6.89062 11.6328 6.23438 11.2773 6.01562 10.8398C6.01562 10.8398 5.6875 12.1523 5.60547 12.4531C5.44141 13.0547 5.03125 13.793 4.75781 14.2305C5.38672 14.4492 6.07031 14.5312 6.78125 14.5312C10.5273 14.5312 13.5625 11.4961 13.5625 7.75Z"
                                        fill="currentColor"/>
                                </svg>
                                <span class="visually-hidden">Pinterest</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main__header header__sticky">
        <div class="container">
            <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                <div class="offcanvas__header--menu__open ">
                    <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                             viewBox="0 0 512 512">
                            <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                  stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/>
                        </svg>
                        <span class="visually-hidden">Offcanvas Menu Open</span>
                    </a>
                </div>
                <div class="main__logo">
                    <h1 class="main__logo--title"><a class="main__logo--link" href="index.html"><img
                                class="main__logo--img" src="{{ asset('site/assets/img/logo/nav-log.webp') }}"
                                alt="logo-img"></a></h1>
                </div>
                <div class="header__search--widget d-none d-lg-block header__sticky--none">
                    <form class="d-flex header__search--form border-radius-5" action="#">
                        <div class="header__select--categories select">
                            <select class="header__select--inner">
                                <option selected value="1"> All categories</option>
                                <option value="2">Accessories</option>
                                <option value="3">Accessories & More</option>
                                <option value="4">Camera & Video</option>
                                <option value="5">Butters & Eggs</option>
                            </select>
                        </div>
                        <div class="header__search--box">
                            <label>
                                <input class="header__search--input" placeholder="Search For Products..." type="text">
                            </label>
                            <button class="header__search--button bg__primary text-white" aria-label="search button"
                                    type="submit">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z"
                                        fill="currentColor"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="header__menu d-none d-lg-block header__sticky--block">
                    <nav class="header__menu--navigation">
                        <ul class="header__menu--wrapper d-flex">
                            <li class="header__menu--items">
                                <a class="header__menu--link active" href="index.html">Home
                                    <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                         height="7.41" viewBox="0 0 12 7.41">
                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                              transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                </a>
                                <ul class="header__sub--menu">
                                    <li class="header__sub--menu__items"><a href="index.html"
                                                                            class="header__sub--menu__link">Home One</a>
                                    </li>
                                    <li class="header__sub--menu__items"><a href="index-2.html"
                                                                            class="header__sub--menu__link">Home Two</a>
                                    </li>
                                    <li class="header__sub--menu__items"><a href="index-3.html"
                                                                            class="header__sub--menu__link">Home
                                            Three</a></li>
                                    <li class="header__sub--menu__items"><a href="index-4.html"
                                                                            class="header__sub--menu__link">Home
                                            Four</a></li>
                                    <li class="header__sub--menu__items"><a href="index-5.html"
                                                                            class="header__sub--menu__link">Home
                                            Five</a></li>
                                </ul>
                            </li>
                            <li class="header__menu--items mega__menu--items">
                                <a class="header__menu--link" href="shop.html">Shop
                                    <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                         height="7.41" viewBox="0 0 12 7.41">
                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                              transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                </a>
                                <ul class="header__mega--menu d-flex">
                                    <li class="header__mega--menu__li">
                                        <ul class="header__mega--sub__menu">
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="shop.html">Shop Left
                                                    Sidebar</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title"
                                                    href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="shop-grid.html">Shop
                                                    Grid</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="shop-grid-list.html">Shop
                                                    Grid List</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="shop-list.html">Shop
                                                    List</a></li>
                                        </ul>
                                    </li>
                                    <li class="header__mega--menu__li">
                                        <ul class="header__mega--sub__menu">
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="product-details.html">Product
                                                    Details</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="product-video.html">Video
                                                    Product</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="product-details.html">Variable
                                                    Product</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title"
                                                    href="product-left-sidebar.html">Product Left Sidebar</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="product-gallery.html">Product
                                                    Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="header__mega--menu__li">
                                        <ul class="header__mega--sub__menu">
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="my-account.html">My
                                                    Account</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="my-account-2.html">My
                                                    Account 2</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="404.html">404 Page</a>
                                            </li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="login.html">Login
                                                    Page</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="faq.html">Faq Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header__mega--menu__li">
                                        <ul class="header__mega--sub__menu">
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="about.html">About
                                                    Us</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="contact.html">Contact
                                                    Us</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title" href="portfolio.html">Portfolio</a>
                                            </li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title"
                                                    href="compare.html">Compare</a></li>
                                            <li class="header__mega--sub__menu_li"><a
                                                    class="header__mega--sub__menu--title"
                                                    href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="header__mega--menu__li fullscreen__style d-flex">
                                        <a class="header__mega--menu__banner display-block" href="shop.html"><img
                                                class="header__mega--menu__banner--img"
                                                src="{{ asset('site/assets/img/banner/banner1.webp') }}"
                                                alt="banner-menu">
                                            <div class="banner__content">
                                                <span
                                                    class="banner__content--subtitle text__secondary mb-10">20% off</span>
                                                <h2 class="banner__content--title"><span
                                                        class="banner__content--title__inner">New</span> COLLECTION</h2>
                                                <span class="banner__content--price">$22.99</span>
                                            </div>
                                        </a>
                                        <a class="header__mega--menu__banner display-block" href="shop.html"><img
                                                class="header__mega--menu__banner--img"
                                                src="{{ asset('site/assets/img/banner/banner2.webp') }}"
                                                alt="banner-menu">
                                            <div class="banner__content right">
                                                <span class="banner__badge--style2">20% Off</span>
                                                <h2 class="banner__content--title"><span
                                                        class="banner__content--title__inner"> ON </span> SALE <br>
                                                    PRODUCT</h2>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="shop.html">Accesories </a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="blog.html">Blog
                                    <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                         height="7.41" viewBox="0 0 12 7.41">
                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                              transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                </a>
                                <ul class="header__sub--menu">
                                    <li class="header__sub--menu__items"><a href="blog.html"
                                                                            class="header__sub--menu__link">Blog
                                            Grid</a></li>
                                    <li class="header__sub--menu__items"><a href="blog-details.html"
                                                                            class="header__sub--menu__link">Blog
                                            Details</a></li>
                                    <li class="header__sub--menu__items"><a href="blog-left-sidebar.html"
                                                                            class="header__sub--menu__link">Blog Left
                                            Sidebar</a></li>
                                    <li class="header__sub--menu__items"><a href="blog-right-sidebar.html"
                                                                            class="header__sub--menu__link">Blog Right
                                            Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="#">Pages
                                    <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                         height="7.41" viewBox="0 0 12 7.41">
                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                              transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                </a>
                                <ul class="header__sub--menu">
                                    <li class="header__sub--menu__items"><a href="about.html"
                                                                            class="header__sub--menu__link">About Us</a>
                                    </li>
                                    <li class="header__sub--menu__items"><a href="contact.html"
                                                                            class="header__sub--menu__link">Contact
                                            Us</a></li>
                                    <li class="header__sub--menu__items"><a href="cart.html"
                                                                            class="header__sub--menu__link">Cart
                                            Page</a></li>
                                    <li class="header__sub--menu__items"><a href="portfolio.html"
                                                                            class="header__sub--menu__link">Portfolio
                                            Page</a></li>
                                    <li class="header__sub--menu__items"><a href="wishlist.html"
                                                                            class="header__sub--menu__link">Wishlist
                                            Page</a></li>
                                    <li class="header__sub--menu__items"><a href="privacy-policy.html"
                                                                            class="header__sub--menu__link">Privacy
                                            Policy</a></li>
                                    <li class="header__sub--menu__items"><a href="login.html"
                                                                            class="header__sub--menu__link">Login
                                            Page</a></li>
                                    <li class="header__sub--menu__items"><a href="404.html"
                                                                            class="header__sub--menu__link">Error
                                            Page</a></li>
                                </ul>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="contact.html">Contact </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header__account header__sticky--none">
                    <ul class="header__account--wrapper d-flex align-items-center">
                        <li class="header__account--items d-none d-lg-block">
                            <a class="header__account--btn" href="my-account.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class=" -user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="visually-hidden">My account</span>
                            </a>
                        </li>
                        <li class="header__account--items  header__account--search__items mobile__d--block d-sm-2-none">
                            <a class="header__account--btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                     width="22.51" height="20.443" viewBox="0 0 512 512">
                                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                          fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/>
                                </svg>
                                <span class="visually-hidden">Search</span>
                            </a>
                        </li>
                        <li class="header__account--items d-none d-lg-block">
                            <a class="header__account--btn" href="wishlist.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class=" -heart">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                                <span class="items__count">3</span>
                            </a>
                        </li>
                        <li class="header__account--items header__minicart--items">
                            <a class="header__account--btn minicart__open--btn" href="javascript:void(0)"
                               data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22.706" height="22.534"
                                     viewBox="0 0 14.706 13.534">
                                    <g transform="translate(0 0)">
                                        <g>
                                            <path data-name="Path 16787"
                                                  d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                  transform="translate(0 -463.248)" fill="currentColor"/>
                                            <path data-name="Path 16788"
                                                  d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                  transform="translate(-1.191 -466.622)" fill="currentColor"/>
                                            <path data-name="Path 16789"
                                                  d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                  transform="translate(-2.875 -466.622)" fill="currentColor"/>
                                        </g>
                                    </g>
                                </svg>
                                <span class="items__count">2</span>
                                <span class="minicart__btn--text">My Cart <br> <span class="minicart__btn--text__price">$0.00</span></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header__account header__sticky--block">
                    <ul class="header__account--wrapper d-flex align-items-center">
                        <li class="header__account--items  header__account--search__items d-sm-2-none">
                            <a class="header__account--btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                     width="22.51" height="20.443" viewBox="0 0 512 512">
                                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                          fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/>
                                </svg>
                                <span class="visually-hidden">Search</span>
                            </a>
                        </li>
                        <li class="header__account--items d-none d-lg-block">
                            <a class="header__account--btn" href="my-account.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class=" -user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="visually-hidden">My account</span>
                            </a>
                        </li>
                        <li class="header__account--items d-none d-lg-block">
                            <a class="header__account--btn" href="wishlist.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class=" -heart">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                                <span class="items__count">3</span>
                            </a>
                        </li>
                        <li class="header__account--items header__minicart--items">
                            <a class="header__account--btn minicart__open--btn" href="javascript:void(0)"
                               data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22.706" height="22.534"
                                     viewBox="0 0 14.706 13.534">
                                    <g transform="translate(0 0)">
                                        <g>
                                            <path data-name="Path 16787"
                                                  d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                  transform="translate(0 -463.248)" fill="currentColor"/>
                                            <path data-name="Path 16788"
                                                  d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                  transform="translate(-1.191 -466.622)" fill="currentColor"/>
                                            <path data-name="Path 16789"
                                                  d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                  transform="translate(-2.875 -466.622)" fill="currentColor"/>
                                        </g>
                                    </g>
                                </svg>
                                <span class="items__count">2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom bg__primary">
        <div class="container">
            <div class="header__bottom--inner position__relative d-flex align-items-center">
                <div class="categories__menu mobile-v-none">
                    <div class="categories__menu--header bg__secondary text-white d-flex align-items-center"
                         data-bs-toggle="collapse" data-bs-target="#categoriesAccordion">
                        <svg class="categories__list--icon" width="18" height="15" viewBox="0 0 18 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="13" height="1.5" fill="currentColor"/>
                            <rect y="4.44434" width="18" height="1.5" fill="currentColor"/>
                            <rect y="8.88892" width="15" height="1.5" fill="currentColor"/>
                            <rect y="13.3333" width="17" height="1.5" fill="currentColor"/>
                        </svg>

                        <span class="categories__menu--title">Select categories</span>
                        <svg class="categories__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355"
                             height="8.394" viewBox="0 0 10.355 6.394">
                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                  transform="translate(-6 -8.59)" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="dropdown__categories--menu border-radius-5 active collapse show"
                         id="categoriesAccordion">
                        <ul class="d-none d-lg-block">
                            <li class="categories__menu--items">
                                <a class="categories__menu--link" href="shop.html">
                                    <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                        <line x1="8" y1="21" x2="16" y2="21"></line>
                                        <line x1="12" y1="17" x2="12" y2="21"></line>
                                    </svg>
                                    Lighting
                                </a>
                            </li>
                            <li class="categories__menu--items">
                                <a class="categories__menu--link" href="shop.html">
                                    <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                        <path
                                            d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                        <rect x="6" y="14" width="12" height="8"></rect>
                                    </svg>
                                    Smart Devices

                                    <svg class="categories__menu--right__arrow--icon" xmlns="http://www.w3.org/2000/svg"
                                         width="17.007" height="16.831" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/>
                                    </svg>
                                </a>
                                <ul class="categories__submenu border-radius-10 d-flex justify-content-between">
                                    <li class="categories__submenu--items"><a class="categories__submenu--items__text"
                                                                              href="shop.html"><strong>Body
                                                Parts</strong></a>
                                        <ul class="categories__submenu--child">
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Brake
                                                    Calipers </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Engine
                                                    Oil </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Motor
                                                    Oil </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Oil
                                                    Filters </a></li>
                                        </ul>
                                    </li>
                                    <li class="categories__submenu--items"><a class="categories__submenu--items__text"
                                                                              href="shop.html"><strong>Interior
                                                Parts</strong></a>
                                        <ul class="categories__submenu--child">
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Air
                                                    Boxes </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Tail
                                                    Lights </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Mobile
                                                    Electronics </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Car
                                                    Covers </a></li>
                                        </ul>
                                    </li>
                                    <li class="categories__submenu--items"><a class="categories__submenu--items__text"
                                                                              href="shop.html"><strong>Engine &
                                                Drivetrain</strong></a>
                                        <ul class="categories__submenu--child">
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Bumpers </a>
                                            </li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Hoods </a>
                                            </li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">care
                                                    kits </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Fog
                                                    Lights </a></li>
                                        </ul>
                                    </li>
                                    <li class="categories__submenu--items"><a class="categories__submenu--items__text"
                                                                              href="shop.html"><strong>Fluids &
                                                Chemicals</strong></a>
                                        <ul class="categories__submenu--child">
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Cabin
                                                    Air Filters </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Pistons
                                                    liners </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Oil
                                                    & lubricants </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">
                                                    Paintworks
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="categories__submenu--items"><a class="categories__submenu--items__text"
                                                                              href="shop.html"><strong>Cargo
                                                Accessories</strong></a>
                                        <ul class="categories__submenu--child">
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Body
                                                    Parts </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Engine
                                                    Parts </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Tires
                                                    & Wheels </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Repair
                                                    Parts </a></li>
                                        </ul>
                                    </li>
                                    <li class="categories__submenu--items">
                                        <a class="categories__submenu--thumbnail" href="shop.html">
                                            <img src="{{ asset('site/assets/img/product/main-product/product1.webp') }}"
                                                 alt="categories-img">
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            <li class="categories__menu--items">
                                <a class="categories__menu--link" href="shop.html">
                                    <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                        <polyline points="17 2 12 7 7 2"></polyline>
                                    </svg>
                                    Paintworks
                                </a>
                            </li>
                            <li class="categories__menu--items">
                                <a class="categories__menu--link" href="shop.html">
                                    <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                        <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                        <line x1="6" y1="1" x2="6" y2="4"></line>
                                        <line x1="10" y1="1" x2="10" y2="4"></line>
                                        <line x1="14" y1="1" x2="14" y2="4"></line>
                                    </svg>
                                    Replacement Parts
                                    <svg class="categories__menu--right__arrow--icon" xmlns="http://www.w3.org/2000/svg"
                                         width="17.007" height="16.831" viewBox="0 0 512 512">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"/>
                                    </svg>
                                </a>
                                <ul class="categories__submenu style2 border-radius-10 d-flex justify-content-between">
                                    <li class="categories__submenu--items"><a class="categories__submenu--items__text"
                                                                              href="shop.html"><strong>Fluids &
                                                Chemicals</strong></a>
                                        <ul class="categories__submenu--child">
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Cabin
                                                    Air Filters </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Pistons
                                                    liners </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Oil
                                                    & lubricants </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">
                                                    Paintworks
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="categories__submenu--items"><a class="categories__submenu--items__text"
                                                                              href="shop.html"><strong>Interior
                                                Parts</strong></a>
                                        <ul class="categories__submenu--child">
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Air
                                                    Boxes </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Tail
                                                    Lights </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Mobile
                                                    Electronics </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Car
                                                    Covers </a></li>
                                        </ul>
                                    </li>
                                    <li class="categories__submenu--items"><a class="categories__submenu--items__text"
                                                                              href="shop.html"><strong>Engine &
                                                Drivetrain</strong></a>
                                        <ul class="categories__submenu--child">
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Bumpers </a>
                                            </li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Hoods </a>
                                            </li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Fog
                                                    Lights </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">
                                                    Engine Partses </a></li>
                                        </ul>
                                    </li>
                                    <li class="categories__submenu--items"><a class="categories__submenu--items__text"
                                                                              href="shop.html"><strong>Body
                                                Parts</strong></a>
                                        <ul class="categories__submenu--child">
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Brake
                                                    Calipers </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Engine
                                                    Oil </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Motor
                                                    Oil </a></li>
                                            <li class="categories__submenu--child__items"><a
                                                    class="categories__submenu--child__items--link" href="shop.html">Oil
                                                    Filters </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="categories__menu--items">
                                <a class="categories__menu--link" href="shop.html">
                                    <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                        <rect x="9" y="9" width="6" height="6"></rect>
                                        <line x1="9" y1="1" x2="9" y2="4"></line>
                                        <line x1="15" y1="1" x2="15" y2="4"></line>
                                        <line x1="9" y1="20" x2="9" y2="23"></line>
                                        <line x1="15" y1="20" x2="15" y2="23"></line>
                                        <line x1="20" y1="9" x2="23" y2="9"></line>
                                        <line x1="20" y1="14" x2="23" y2="14"></line>
                                        <line x1="1" y1="9" x2="4" y2="9"></line>
                                        <line x1="1" y1="14" x2="4" y2="14"></line>
                                    </svg>
                                    Car Parts
                                </a>
                            </li>
                            <li class="categories__menu--items">
                                <a class="categories__menu--link" href="shop.html">
                                    <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="22" y1="12" x2="2" y2="12"></line>
                                        <path
                                            d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                        <line x1="6" y1="16" x2="6.01" y2="16"></line>
                                        <line x1="10" y1="16" x2="10.01" y2="16"></line>
                                    </svg>
                                    Gaming Toiys
                                </a>
                            </li>
                            <li class="categories__menu--items">
                                <a class="categories__menu--link" href="shop.html">
                                    <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                        <polyline points="2 17 12 22 22 17"></polyline>
                                        <polyline points="2 12 12 17 22 12"></polyline>
                                    </svg>
                                    Oil Fluids
                                </a>
                            </li>
                            <li class="categories__menu--items">
                                <a class="categories__menu--link" href="shop.html">
                                    <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 11a9 9 0 0 1 9 9"></path>
                                        <path d="M4 4a16 16 0 0 1 16 16"></path>
                                        <circle cx="5" cy="19" r="1"></circle>
                                    </svg>
                                    Baby Car Seat
                                </a>
                            </li>
                            <li class="categories__menu--items">
                                <a class="categories__menu--link" href="shop.html">
                                    <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 512 512">
                                        <path
                                            d="M322 416c0 35.35-20.65 64-56 64H134c-35.35 0-56-28.65-56-64M336 336c17.67 0 32 17.91 32 40h0c0 22.09-14.33 40-32 40H64c-17.67 0-32-17.91-32-40h0c0-22.09 14.33-40 32-40"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="32"/>
                                        <path
                                            d="M344 336H179.31a8 8 0 00-5.65 2.34l-26.83 26.83a4 4 0 01-5.66 0l-26.83-26.83a8 8 0 00-5.65-2.34H56a24 24 0 01-24-24h0a24 24 0 0124-24h288a24 24 0 0124 24h0a24 24 0 01-24 24zM64 276v-.22c0-55 45-83.78 100-83.78h72c55 0 100 29 100 84v-.22M241 112l7.44 63.97"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-miterlimit="10" stroke-width="32"/>
                                        <path d="M256 480h139.31a32 32 0 0031.91-29.61L463 112" fill="none"
                                              stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                              stroke-width="32"/>
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="32" d="M368 112l16-64 47-16"/>
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                              stroke-miterlimit="10" stroke-width="32" d="M224 112h256"/>
                                    </svg>
                                    Bread & Bakery
                                </a>
                            </li>
                            <li class="categories__menu--items">
                                <a class="categories__menu--link" href="shop.html">
                                    <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg>
                                    Engine Parts
                                </a>
                            </li>
                            <li class="categories__menu--items">
                                <a class="categories__menu--link" href="shop.html">
                                    <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 3l7.07 16.97 2.51-7.39 7.39-2.51L3 3z"></path>
                                        <path d="M13 13l6 6"></path>
                                    </svg>
                                    Car & Motorbike Care
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="categories__menu mobile-v-block">
                    <div class="categories__menu--header bg__secondary text-white d-flex align-items-center"
                         data-bs-toggle="collapse" data-bs-target="#categoriesAccordion2">
                        <svg class="categories__list--icon" width="18" height="15" viewBox="0 0 18 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="13" height="1.5" fill="currentColor"/>
                            <rect y="4.44434" width="18" height="1.5" fill="currentColor"/>
                            <rect y="8.88892" width="15" height="1.5" fill="currentColor"/>
                            <rect y="13.3333" width="17" height="1.5" fill="currentColor"/>
                        </svg>

                        <span class="categories__menu--title">Select categories</span>
                        <svg class="categories__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355"
                             height="8.394" viewBox="0 0 10.355 6.394">
                            <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                  transform="translate(-6 -8.59)" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="dropdown__categories--menu border-radius-5 active collapse" id="categoriesAccordion2">
                        <nav class="category__mobile--menu">
                            <ul class="category__mobile--menu_ul">
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                            <line x1="8" y1="21" x2="16" y2="21"></line>
                                            <line x1="12" y1="17" x2="12" y2="21"></line>
                                        </svg>
                                        Lighting
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                            <path
                                                d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                            <rect x="6" y="14" width="12" height="8"></rect>
                                        </svg>
                                        Smart Devices
                                    </a>
                                    <ul class="category__sub--menu">
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text" href="shop.html">Body Parts</a>
                                            <ul class="category__sub--menu">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Brake Calipers </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Oil and Vinegar </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Engine Oil </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Oil Filters </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text" href="shop.html">Interior
                                                Parts</a>
                                            <ul class="category__sub--menu">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Air Boxes </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Tail Lights </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Mobile Electronic </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Car Covers </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text" href="shop.html">Engine &
                                                Drivetrain</a>
                                            <ul class="category__sub--menu">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Cabin Air Filters </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Pistons liners </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Bread and Juice </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Paintworks </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text" href="shop.html">Cargo
                                                Accessories</a>
                                            <ul class="category__sub--menu">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Body Parts </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Engine Parts</a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Tires & Wheels </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Repair Parts </a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                            <polyline points="17 2 12 7 7 2"></polyline>
                                        </svg>
                                        Paintworks
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                            <line x1="6" y1="1" x2="6" y2="4"></line>
                                            <line x1="10" y1="1" x2="10" y2="4"></line>
                                            <line x1="14" y1="1" x2="14" y2="4"></line>
                                        </svg>
                                        Replacement Parts
                                    </a>
                                    <ul class="category__sub--menu">
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text" href="shop.html">Body Parts</a>
                                            <ul class="category__sub--menu">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Brake Calipers </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Oil and Vinegar </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Engine Oil </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Oil Filters </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text" href="shop.html">Interior
                                                Parts</a>
                                            <ul class="category__sub--menu">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Air Boxes </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Tail Lights </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Mobile Electronic </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Car Covers </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text" href="shop.html">Engine &
                                                Drivetrain</a>
                                            <ul class="category__sub--menu">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Cabin Air Filters </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Pistons liners </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Bread and Juice </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Paintworks </a></li>
                                            </ul>
                                        </li>
                                        <li class="categories__submenu--items"><a
                                                class="categories__submenu--items__text" href="shop.html">Cargo
                                                Accessories</a>
                                            <ul class="category__sub--menu">
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Body Parts </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Engine Parts</a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Tires & Wheels </a></li>
                                                <li class="categories__submenu--child__items"><a
                                                        class="categories__submenu--child__items--link"
                                                        href="shop.html">Repair Parts </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 512 512">
                                            <circle cx="256" cy="184" r="120" fill="none" stroke="currentColor"
                                                    stroke-linejoin="round" stroke-width="32"/>
                                            <circle cx="344" cy="328" r="120" fill="none" stroke="currentColor"
                                                    stroke-linejoin="round" stroke-width="32"/>
                                            <circle cx="168" cy="328" r="120" fill="none" stroke="currentColor"
                                                    stroke-linejoin="round" stroke-width="32"/>
                                        </svg>
                                        Beauty & Care
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                            <rect x="9" y="9" width="6" height="6"></rect>
                                            <line x1="9" y1="1" x2="9" y2="4"></line>
                                            <line x1="15" y1="1" x2="15" y2="4"></line>
                                            <line x1="9" y1="20" x2="9" y2="23"></line>
                                            <line x1="15" y1="20" x2="15" y2="23"></line>
                                            <line x1="20" y1="9" x2="23" y2="9"></line>
                                            <line x1="20" y1="14" x2="23" y2="14"></line>
                                            <line x1="1" y1="9" x2="4" y2="9"></line>
                                            <line x1="1" y1="14" x2="4" y2="14"></line>
                                        </svg>
                                        Car Parts
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <line x1="22" y1="12" x2="2" y2="12"></line>
                                            <path
                                                d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                            <line x1="6" y1="16" x2="6.01" y2="16"></line>
                                            <line x1="10" y1="16" x2="10.01" y2="16"></line>
                                        </svg>
                                        Gaming Toiys
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                            <polyline points="2 17 12 22 22 17"></polyline>
                                            <polyline points="2 12 12 17 22 12"></polyline>
                                        </svg>
                                        Oil Fluids
                                    </a>
                                </li>
                                <li class="categories__menu--items">
                                    <a class="categories__menu--link" href="shop.html">
                                        <svg class="categories__menu--svgicon" xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path d="M4 11a9 9 0 0 1 9 9"></path>
                                            <path d="M4 4a16 16 0 0 1 16 16"></path>
                                            <circle cx="5" cy="19" r="1"></circle>
                                        </svg>
                                        Baby Car Seat
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header__right--area d-flex justify-content-between align-items-center">
                    <div class="header__menu">
                        <nav class="header__menu--navigation">
                            <ul class="header__menu--wrapper d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link text-white active" href="index.html">Home
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                             height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                  transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="index.html"
                                                                                class="header__sub--menu__link">Home
                                                One</a></li>
                                        <li class="header__sub--menu__items"><a href="index-2.html"
                                                                                class="header__sub--menu__link">Home
                                                Two</a></li>
                                        <li class="header__sub--menu__items"><a href="index-3.html"
                                                                                class="header__sub--menu__link">Home
                                                Three</a></li>
                                        <li class="header__sub--menu__items"><a href="index-4.html"
                                                                                class="header__sub--menu__link">Home
                                                Four</a></li>
                                        <li class="header__sub--menu__items"><a href="index-5.html"
                                                                                class="header__sub--menu__link">Home
                                                Five</a></li>
                                    </ul>
                                </li>
                                <li class="header__menu--items mega__menu--items">
                                    <a class="header__menu--link text-white" href="shop.html">Shop
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                             height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                  transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__mega--menu d-flex">
                                        <li class="header__mega--menu__li">
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="shop.html">Shop
                                                        Left Sidebar</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="shop-grid.html">Shop
                                                        Grid</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="shop-grid-list.html">Shop Grid List</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="shop-list.html">Shop
                                                        List</a></li>
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li">
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="product-details.html">Product Details</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="product-video.html">Video Product</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="product-details.html">Variable Product</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="product-left-sidebar.html">Product Left Sidebar</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title"
                                                        href="product-gallery.html">Product Gallery</a></li>
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li">
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="my-account.html">My
                                                        Account</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="my-account-2.html">My
                                                        Account 2</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="404.html">404
                                                        Page</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="login.html">Login
                                                        Page</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="faq.html">Faq
                                                        Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li">
                                            <ul class="header__mega--sub__menu">
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="about.html">About
                                                        Us</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="contact.html">Contact
                                                        Us</a></li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="portfolio.html">Portfolio</a>
                                                </li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="compare.html">Compare</a>
                                                </li>
                                                <li class="header__mega--sub__menu_li"><a
                                                        class="header__mega--sub__menu--title" href="checkout.html">Checkout</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="header__mega--menu__li fullscreen__style d-flex">
                                            <a class="header__mega--menu__banner display-block" href="shop.html"><img
                                                    class="header__mega--menu__banner--img"
                                                    src="{{ asset('site/assets/img/banner/banner1.webp') }}"
                                                    alt="banner-menu">
                                                <div class="banner__content">
                                                    <span class="banner__content--subtitle text__secondary mb-10">20% off</span>
                                                    <h2 class="banner__content--title"><span
                                                            class="banner__content--title__inner">New</span> COLLECTION
                                                    </h2>
                                                    <span class="banner__content--price">$22.99</span>
                                                </div>
                                            </a>
                                            <a class="header__mega--menu__banner display-block" href="shop.html"><img
                                                    class="header__mega--menu__banner--img"
                                                    src="{{ asset('site/assets/img/banner/banner2.webp') }}"
                                                    alt="banner-menu">
                                                <div class="banner__content right">
                                                    <span class="banner__badge--style2">20% Off</span>
                                                    <h2 class="banner__content--title"><span
                                                            class="banner__content--title__inner"> ON </span> SALE <br>
                                                        PRODUCT</h2>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link text-white" href="shop.html">Accesories </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link text-white" href="blog.html">Blog
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                             height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                  transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="blog.html"
                                                                                class="header__sub--menu__link">Blog
                                                Grid</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-details.html"
                                                                                class="header__sub--menu__link">Blog
                                                Details</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-left-sidebar.html"
                                                                                class="header__sub--menu__link">Blog
                                                Left Sidebar</a></li>
                                        <li class="header__sub--menu__items"><a href="blog-right-sidebar.html"
                                                                                class="header__sub--menu__link">Blog
                                                Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link text-white" href="#">Pages
                                        <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                             height="7.41" viewBox="0 0 12 7.41">
                                            <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                  transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a>
                                    <ul class="header__sub--menu">
                                        <li class="header__sub--menu__items"><a href="about.html"
                                                                                class="header__sub--menu__link">About
                                                Us</a></li>
                                        <li class="header__sub--menu__items"><a href="contact.html"
                                                                                class="header__sub--menu__link">Contact
                                                Us</a></li>
                                        <li class="header__sub--menu__items"><a href="cart.html"
                                                                                class="header__sub--menu__link">Cart
                                                Page</a></li>
                                        <li class="header__sub--menu__items"><a href="portfolio.html"
                                                                                class="header__sub--menu__link">Portfolio
                                                Page</a></li>
                                        <li class="header__sub--menu__items"><a href="wishlist.html"
                                                                                class="header__sub--menu__link">Wishlist
                                                Page</a></li>
                                        <li class="header__sub--menu__items"><a href="privacy-policy.html"
                                                                                class="header__sub--menu__link">Privacy
                                                Policy</a></li>
                                        <li class="header__sub--menu__items"><a href="login.html"
                                                                                class="header__sub--menu__link">Login
                                                Page</a></li>
                                        <li class="header__sub--menu__items"><a href="404.html"
                                                                                class="header__sub--menu__link">Error
                                                Page</a></li>
                                    </ul>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link text-white" href="contact.html">Contact </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="language__currency d-none d-lg-block">
                        <ul class="d-flex align-items-center">
                            <li class="language__currency--list">
                                <a class="account__currency--link" href="javascript:void(0)">
                                    <img class="currency__link--icon"
                                         src="{{ asset('site/assets/img/icon/language-icon.webp') }}" alt="currency">
                                    <span>USD</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9.797" height="6.05"
                                         viewBox="0 0 9.797 6.05">
                                        <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                              transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                </a>
                                <div class="dropdown__currency">
                                    <ul>
                                        <li class="currency__items"><a class="currency__text" href="#">CAD</a></li>
                                        <li class="currency__items"><a class="currency__text" href="#">CNY</a></li>
                                        <li class="currency__items"><a class="currency__text" href="#">EUR</a></li>
                                        <li class="currency__items"><a class="currency__text" href="#">GBP</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="language__currency--list">
                                <a class="language__switcher" href="javascript:void(0)">
                                    <span>English</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9.797" height="6.05"
                                         viewBox="0 0 9.797 6.05">
                                        <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                              transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                </a>
                                <div class="dropdown__language">
                                    <ul>
                                        <li class="language__items"><a class="language__text" href="#">France</a></li>
                                        <li class="language__items"><a class="language__text" href="#">Russia</a></li>
                                        <li class="language__items"><a class="language__text" href="#">Spanish</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Offcanvas header menu -->
    <div class="offcanvas__header">
        <div class="offcanvas__inner">
            <div class="offcanvas__logo">
                <a class="offcanvas__logo_link" href="index.html">
                    <img src="{{ asset('site/assets/img/logo/nav-log.webp') }}" alt="Grocee Logo" width="158"
                         height="36">
                </a>
                <button class="offcanvas__close--btn" data-offcanvas>close</button>
            </div>
            <nav class="offcanvas__menu">
                <ul class="offcanvas__menu_ul">
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="index.html">Home</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="index.html" class="offcanvas__sub_menu_item">Home
                                    One</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="index-2.html" class="offcanvas__sub_menu_item">Home
                                    Two</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="index-3.html" class="offcanvas__sub_menu_item">Home
                                    Three</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="index-4.html" class="offcanvas__sub_menu_item">Home
                                    Four</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="index-5.html" class="offcanvas__sub_menu_item">Home
                                    Five</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="shop.html">Shop</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li">
                                <a href="#" class="offcanvas__sub_menu_item">Column One</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="shop.html">Shop Left Sidebar</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="shop-right-sidebar.html">Shop Right
                                            Sidebar</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="shop-grid.html">Shop Grid</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="shop-grid-list.html">Shop Grid List</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="shop-list.html">Shop List</a></li>
                                </ul>
                            </li>
                            <li class="offcanvas__sub_menu_li">
                                <a href="#" class="offcanvas__sub_menu_item">Column Two</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="product-details.html">Product
                                            Details</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="product-video.html">Video Product</a>
                                    </li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="product-details.html">Variable
                                            Product</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="product-left-sidebar.html">Product Left
                                            Sidebar</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="product-gallery.html">Product
                                            Gallery</a></li>
                                </ul>
                            </li>
                            <li class="offcanvas__sub_menu_li">
                                <a href="#" class="offcanvas__sub_menu_item">Column Three</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="my-account.html">My Account</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="my-account-2.html">My Account 2</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="404.html">404 Page</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="login.html">Login Page</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="faq.html">Faq Page</a></li>
                                </ul>
                            </li>
                            <li class="offcanvas__sub_menu_li">
                                <a href="#" class="offcanvas__sub_menu_item">Column Three</a>
                                <ul class="offcanvas__sub_menu">
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="about.html">About Us</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="contact.html">Contact Us</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="portfolio.html">Portfolio</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="compare.html">Compare Pages</a></li>
                                    <li class="offcanvas__sub_menu_li"><a class="offcanvas__sub_menu_item"
                                                                          href="checkout.html">Checkout page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="blog.html">Blog</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="blog.html" class="offcanvas__sub_menu_item">Blog
                                    Grid</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="blog-details.html"
                                                                  class="offcanvas__sub_menu_item">Blog Details</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="blog-left-sidebar.html"
                                                                  class="offcanvas__sub_menu_item">Blog Left Sidebar</a>
                            </li>
                            <li class="offcanvas__sub_menu_li"><a href="blog-right-sidebar.html"
                                                                  class="offcanvas__sub_menu_item">Blog Right
                                    Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="#">Pages</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="about.html" class="offcanvas__sub_menu_item">About
                                    Us</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="contact.html" class="offcanvas__sub_menu_item">Contact
                                    Us</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="cart.html" class="offcanvas__sub_menu_item">Cart
                                    Page</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="portfolio.html"
                                                                  class="offcanvas__sub_menu_item">Portfolio Page</a>
                            </li>
                            <li class="offcanvas__sub_menu_li"><a href="wishlist.html" class="offcanvas__sub_menu_item">Wishlist
                                    Page</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="login.html" class="offcanvas__sub_menu_item">Login
                                    Page</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="404.html" class="offcanvas__sub_menu_item">Error
                                    Page</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="about.html">About</a></li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="contact.html">Contact</a></li>
                </ul>
                <div class="offcanvas__account--items">
                    <a class="offcanvas__account--items__btn d-flex align-items-center" href="login.html">
                            <span class="offcanvas__account--items__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443"
                                     viewBox="0 0 512 512"><path
                                        d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32"/><path
                                        d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                        stroke-width="32"/></svg>
                            </span>
                        <span class="offcanvas__account--items__label">Login / Register</span>
                    </a>
                </div>
                <div class="offcanvas__account--wrapper d-flex">
                    <div class="offcanvas__account--currency">
                        <a class="offcanvas__account--currency__menu d-flex align-items-center text-black"
                           href="javascript:void(0)">
                            <img src="{{ asset('site/assets/img/icon/usd-icon.webp') }}" alt="currency">
                            <span>USD</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="9.797" height="6.05"
                                 viewBox="0 0 9.797 6.05">
                                <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                      transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                            </svg>
                        </a>
                        <div class="offcanvas__account--currency__submenu">
                            <ul>
                                <li class="currency__items"><a class="currency__text" href="#">CAD</a></li>
                                <li class="currency__items"><a class="currency__text" href="#">CNY</a></li>
                                <li class="currency__items"><a class="currency__text" href="#">EUR</a></li>
                                <li class="currency__items"><a class="currency__text" href="#">GBP</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="language__currency--list">
                        <a class="offcanvas__language--switcher" href="javascript:void(0)">
                            <span>English</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="9.797" height="6.05"
                                 viewBox="0 0 9.797 6.05">
                                <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                      transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                            </svg>
                        </a>
                        <div class="offcanvas__dropdown--language">
                            <ul>
                                <li class="language__items"><a class="language__text" href="#">France</a></li>
                                <li class="language__items"><a class="language__text" href="#">Russia</a></li>
                                <li class="language__items"><a class="language__text" href="#">Spanish</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Offcanvas header menu -->

    <!-- Start Offcanvas stikcy toolbar -->
    <div class="offcanvas__stikcy--toolbar">
        <ul class="d-flex justify-content-between">
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn" href="index.html">
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21.51" height="21.443"
                             viewBox="0 0 22 17"><path fill="currentColor"
                                                       d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z"></path></svg>
                        </span>
                    <span class="offcanvas__stikcy--toolbar__label">Home</span>
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn" href="shop.html">
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18.51" height="17.443"
                             viewBox="0 0 448 512"><path
                                d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z"></path></svg>
                        </span>
                    <span class="offcanvas__stikcy--toolbar__label">Shop</span>
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list ">
                <a class="offcanvas__stikcy--toolbar__btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path
                                    d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                    fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path
                                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                        </span>
                    <span class="offcanvas__stikcy--toolbar__label">Search</span>
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.706" height="22.534"
                                 viewBox="0 0 14.706 13.534">
                                <g transform="translate(0 0)">
                                  <g>
                                    <path data-name="Path 16787"
                                          d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                          transform="translate(0 -463.248)" fill="currentColor"/>
                                    <path data-name="Path 16788"
                                          d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                          transform="translate(-1.191 -466.622)" fill="currentColor"/>
                                    <path data-name="Path 16789"
                                          d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                          transform="translate(-2.875 -466.622)" fill="currentColor"/>
                                  </g>
                                </g>
                            </svg>
                        </span>
                    <span class="offcanvas__stikcy--toolbar__label">Cart</span>
                    <span class="items__count">3</span>
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn" href="wishlist.html">
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class=" -heart"><path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        </span>
                    <span class="offcanvas__stikcy--toolbar__label">Wishlist</span>
                    <span class="items__count">3</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- End Offcanvas stikcy toolbar -->

    <!-- Start offCanvas minicart -->
    <div class="offCanvas__minicart">
        <div class="minicart__header ">
            <div class="minicart__header--top d-flex justify-content-between align-items-center">
                <h3 class="minicart__title"> Shopping Cart</h3>
                <button class="minicart__close--btn" aria-label="minicart close btn" data-offcanvas>
                    <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="32" d="M368 368L144 144M368 144L144 368"/>
                    </svg>
                </button>
            </div>
            <p class="minicart__header--desc">The organic foods products are limited</p>
        </div>
        <div class="minicart__product">
            <div class="minicart__product--items d-flex">
                <div class="minicart__thumb">
                    <a href="product-details.html"><img
                            src="{{ asset('site/assets/img/product/small-product/product1.webp') }}"
                            alt="prduct-img"></a>
                </div>
                <div class="minicart__text">
                    <h4 class="minicart__subtitle"><a href="product-details.html">Car & Motorbike Care.</a></h4>
                    <span class="color__variant"><b>Color:</b> Beige</span>
                    <div class="minicart__price">
                        <span class="minicart__current--price">$125.00</span>
                        <span class="minicart__old--price">$140.00</span>
                    </div>
                    <div class="minicart__text--footer d-flex align-items-center">
                        <div class="quantity__box minicart__quantity">
                            <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                    value="Decrease Value">-
                            </button>
                            <label>
                                <input type="number" class="quantity__number" value="1" data-counter/>
                            </label>
                            <button type="button" class="quantity__value increase" aria-label="quantity value"
                                    value="Increase Value">+
                            </button>
                        </div>
                        <button class="minicart__product--remove" type="button">Remove</button>
                    </div>
                </div>
            </div>
            <div class="minicart__product--items d-flex">
                <div class="minicart__thumb">
                    <a href="product-details.html"><img
                            src="{{ asset('site/assets/img/product/small-product/product2.webp') }}"
                            alt="prduct-img"></a>
                </div>
                <div class="minicart__text">
                    <h4 class="minicart__subtitle"><a href="product-details.html">Engine And Drivetrain.</a></h4>
                    <span class="color__variant"><b>Color:</b> Green</span>
                    <div class="minicart__price">
                        <span class="minicart__current--price">$115.00</span>
                        <span class="minicart__old--price">$130.00</span>
                    </div>
                    <div class="minicart__text--footer d-flex align-items-center">
                        <div class="quantity__box minicart__quantity">
                            <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                    value="Decrease Value">-
                            </button>
                            <label>
                                <input type="number" class="quantity__number" value="1" data-counter/>
                            </label>
                            <button type="button" class="quantity__value increase" aria-label="quantity value"
                                    value="Increase Value">+
                            </button>
                        </div>
                        <button class="minicart__product--remove" type="button">Remove</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="minicart__amount">
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>Sub Total:</span>
                <span><b>$240.00</b></span>
            </div>
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>Total:</span>
                <span><b>$240.00</b></span>
            </div>
        </div>
        <div class="minicart__conditions text-center">
            <input class="minicart__conditions--input" id="accept" type="checkbox">
            <label class="minicart__conditions--label" for="accept">I agree with the <a
                    class="minicart__conditions--link" href="privacy-policy.html">Privacy Policy</a></label>
        </div>
        <div class="minicart__button d-flex justify-content-center">
            <a class="primary__btn minicart__button--link" href="cart.html">View cart</a>
            <a class="primary__btn minicart__button--link" href="checkout.html">Checkout</a>
        </div>
    </div>
    <!-- End offCanvas minicart -->

    <!-- Start serch box area -->
    <div class="predictive__search--box ">
        <div class="predictive__search--box__inner">
            <h2 class="predictive__search--title">Search Products</h2>
            <form class="predictive__search--form" action="#">
                <label>
                    <input class="predictive__search--input" placeholder="Search Here" type="text">
                </label>
                <button class="predictive__search--button text-white" aria-label="search button">
                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="30.51"
                         height="25.443" viewBox="0 0 512 512">
                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                              stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/>
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                              stroke-width="32" d="M338.29 338.29L448 448"/>
                    </svg>
                </button>
            </form>
        </div>
        <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas>
            <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                 height="30.443" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="32" d="M368 368L144 144M368 144L144 368"/>
            </svg>
        </button>
    </div>
    <!-- End serch box area -->

</header>
<!-- End header area -->


<main class="main__content_wrapper">
    <!-- Start slider section -->
    <section class="hero__slider--section">
        <div class="container">
            <div class="hero__slider--inner hero__slider--ml hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="hero__slider--items home1-slider1-bg">
                            <div class="slider__content">
                                <span class="slider__subtitle text__secondary">2022 Collections</span>
                                <h2 class="slider__maintitle h1">Wheelss <br> <span
                                        class="slider__maintitle--inner__text">Body Part</span></h2>
                                <span class="slider__price--text text__secondary">415.00/$</span>
                                <a class="primary__btn slider__btn" href="shop.html">
                                    Shop now
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58745 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178V3.6178Z"
                                            fill="currentColor"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="hero__slider--layer">
                                <img class="slider__layer--img "
                                     src="{{ asset('site/assets/img/slider/home1-slider1-layer.webp') }}"
                                     alt="slider-img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items home1-slider1-bg">
                            <div class="slider__content">
                                <span class="slider__subtitle text__secondary">2022 Collections</span>
                                <h2 class="slider__maintitle h1">Wheelss <br> <span
                                        class="slider__maintitle--inner__text">Body Part</span></h2>
                                <span class="slider__price--text text__secondary">415.00/$</span>
                                <a class="primary__btn slider__btn" href="shop.html">
                                    Shop now
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58745 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178V3.6178Z"
                                            fill="currentColor"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="hero__slider--layer">
                                <img class="slider__layer--img "
                                     src="{{ asset('site/assets/img/slider/home1-slider2-layer.webp') }}"
                                     alt="slider-img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items home1-slider1-bg">
                            <div class="slider__content">
                                <span class="slider__subtitle text__secondary">2022 Collections</span>
                                <h2 class="slider__maintitle h1">Wheelss <br> <span
                                        class="slider__maintitle--inner__text">Body Part</span></h2>
                                <span class="slider__price--text text__secondary">415.00/$</span>
                                <a class="primary__btn slider__btn" href="shop.html">
                                    Shop now
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58745 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178V3.6178Z"
                                            fill="currentColor"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="hero__slider--layer">
                                <img class="slider__layer--img "
                                     src="{{ asset('site/assets/img/slider/home1-slider3-layer.webp') }}"
                                     alt="slider-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper__nav--btn swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class=" -chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
                <div class="swiper__nav--btn swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class=" -chevron-left">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- End slider section -->

    <!-- Start categories section -->
    <section class="categories__section section--padding">
        <div class="container">
            <div class="row mb--n25">
                <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                    <div class="categories__card text-center">
                        <a class="categories__card--link" href="shop.html">
                                <span class="categories__icon">
                                    <svg width="36" height="47" viewBox="0 0 36 47" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.2306 18.4436V1.54826H29.5883L29.5878 0H6.86128V1.54826H17.219V18.4565C12.9606 18.6703 8.9929 20.0458 5.94709 22.391C2.62389 24.9489 0.793964 28.3492 0.794922 31.9656C0.794922 32.3929 1.24528 32.7396 1.80038 32.7396H10.8977C11.392 35.5153 14.4851 37.6633 18.2254 37.6633C21.9657 37.6633 25.0584 35.5153 25.5532 32.7396H34.9775C35.5326 32.7396 35.9829 32.3929 35.9829 31.9656C35.9829 29.3595 35.0186 26.8292 33.1947 24.6474C30.0894 20.9339 24.9149 18.651 19.2305 18.444L19.2306 18.4436ZM18.2246 36.1139C15.5959 36.1139 13.4035 34.6574 12.9294 32.7384H23.5205C23.0458 34.6578 20.8534 36.1139 18.2247 36.1139H18.2246ZM24.6493 31.1902C24.6404 31.1902 24.6325 31.188 24.6231 31.188C24.6138 31.188 24.6058 31.1902 24.5969 31.1902H11.8515C11.8426 31.1902 11.8346 31.188 11.8253 31.188C11.8159 31.188 11.808 31.1902 11.7991 31.1902H2.83695C3.07639 28.2787 4.66412 25.5664 7.36861 23.4839C10.3121 21.2178 14.2245 19.9702 18.3853 19.9702C23.7124 19.9702 28.6167 22.0314 31.5031 25.4839C32.937 27.1988 33.7703 29.157 33.9396 31.1905L24.6493 31.1902Z"
                                            fill="currentColor"/>
                                        <path
                                            d="M18.3848 21.5085V23.0568C22.3426 23.0568 25.987 24.5888 28.1331 27.1544C28.648 27.7707 29.0624 28.4341 29.364 29.1266L31.2716 28.6349C30.9171 27.8207 30.4303 27.041 29.8247 26.3167C27.3063 23.3059 23.0296 21.5086 18.3848 21.5086V21.5085Z"
                                            fill="currentColor"/>
                                        <path d="M17.2188 43.8998V46.4452H19.2302V39.9722H17.2188V43.8998Z"
                                              fill="currentColor"/>
                                        <path
                                            d="M5.53544 42.7204L4.11328 41.6257L10.0914 37.0242L11.5136 38.1189L5.53544 42.7204Z"
                                            fill="currentColor"/>
                                        <path
                                            d="M30.9098 42.7204L24.9316 38.1189L26.3538 37.0242L32.3319 41.6257L30.9098 42.7204Z"
                                            fill="currentColor"/>
                                    </svg>
                                </span>
                            <h2 class="categories__title">Break disc Parts</h2>
                            <span class="categories__subtitle">(9 items)</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                    <div class="categories__card text-center">
                        <a class="categories__card--link" href="shop.html">
                                <span class="categories__icon">
                                    <svg width="43" height="36" viewBox="0 0 43 36" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.8447 1.68434e-05H15.0585C11.2225 1.68434e-05 8.08431 2.67027 8.08431 5.93421V11.0278H5.75975C2.85379 11.0278 0.529236 13.0057 0.529236 15.4783V27.8414C0.529236 28.9294 1.57517 29.8193 2.85379 29.8193H5.23679V33.2809C5.23679 34.3689 6.28272 35.2588 7.56134 35.2588H12.0946C13.3733 35.2588 14.4192 34.3689 14.4192 33.2809V29.8193H28.484V33.2809C28.484 34.3689 29.53 35.2588 30.8086 35.2588H35.3419C36.6205 35.2588 37.6665 34.3689 37.6665 33.2809V29.8193L40.0499 29.82C41.3285 29.82 42.3744 28.9301 42.3744 27.8421V15.479C42.3744 13.0064 40.0499 11.0285 37.1439 11.0285H34.8193V5.93454C34.8193 2.6706 31.6807 0 27.8451 0L27.8447 1.68434e-05ZM10.409 16.3687H32.4943V20.7206L10.409 20.7203V16.3687ZM15.0582 1.97811H27.8444C30.4018 1.97811 32.4941 3.75839 32.4941 5.93438V14.3412H10.4088V5.93438C10.4088 3.75839 12.5011 1.97811 15.058 1.97811H15.0582ZM12.0942 33.3309H7.56093V29.8693H12.0942V33.3309ZM35.3419 33.3309H30.8086V29.8693H35.3419V33.3309ZM37.1435 13.0554C38.7708 13.0554 40.0494 14.1434 40.0494 15.528V27.8911H2.85317V15.528C2.85317 14.1434 4.13179 13.0554 5.75913 13.0554H8.08369V22.7481H34.8185V13.0554H37.1435Z"
                                        fill="currentColor"/>
                                    </svg>
                                </span>
                            <h2 class="categories__title">Service Kits</h2>
                            <span class="categories__subtitle">(1 items)</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                    <div class="categories__card text-center">
                        <a class="categories__card--link" href="shop.html">
                                <span class="categories__icon">
                                    <svg width="51" height="40" viewBox="0 0 51 40" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M48.191 20.4054C44.325 15.3408 39.312 10.9673 33.4379 7.53367C33.2059 6.18034 32.92 4.79676 32.5269 3.36824C32.9184 2.9799 33.1333 2.48681 33.1333 1.97727C33.1333 1.46809 32.9184 0.975026 32.5269 0.586297C32.0652 0.270115 31.4879 0.0975926 30.8927 0.0975926C30.2974 0.0975926 29.7202 0.270115 29.2584 0.586297C21.3733 -0.195432 13.4061 -0.195432 5.52173 0.586297C5.05966 0.270115 4.48273 0.0975926 3.88709 0.0975926C3.29186 0.0975926 2.71501 0.270115 2.25287 0.586297C1.86136 0.974975 1.64647 1.46807 1.64647 1.97727C1.64647 2.48678 1.86136 2.97985 2.25287 3.36824C0.543316 9.29713 0.543316 15.4838 2.25287 21.4127C1.85658 21.8024 1.6389 22.2985 1.6389 22.8113C1.6389 23.3241 1.85658 23.8199 2.25287 24.2096C2.71175 24.5315 3.29023 24.7074 3.88709 24.7074C4.48432 24.7074 5.06285 24.5315 5.52173 24.2096C8.05819 24.4654 10.5941 24.6157 13.1486 24.7057L13.1482 24.706C16.9923 29.7726 22.1684 34.0273 28.2769 37.1412C28.3176 37.6474 28.5723 38.1243 28.9949 38.4858C29.4179 38.8473 29.9805 39.0692 30.5809 39.1111C31.1721 39.0715 31.7279 38.8587 32.1522 38.51C32.5763 38.1609 32.8423 37.698 32.9029 37.2013C39.6179 34.5534 45.0208 30.0101 48.1735 24.3597C48.7671 24.307 49.3194 24.0787 49.7316 23.7152C50.1438 23.3517 50.389 22.8764 50.4241 22.3749C50.379 21.8799 50.1323 21.4136 49.7252 21.0545C49.3181 20.6954 48.7763 20.4661 48.1915 20.405L48.191 20.4054ZM5.32473 22.8113H5.23542C5.0309 22.8127 4.83395 22.8768 4.68165 22.9916C4.16376 23.3373 3.62796 23.3826 3.46731 23.2473C3.30664 23.1121 3.36006 22.6459 3.80659 22.2099C3.99716 22.0357 4.07689 21.7953 4.02068 21.5631C2.24857 15.6104 2.24857 9.38134 4.02068 3.42839C4.08607 3.18672 4.00593 2.93364 3.80659 2.75172C3.36006 2.33082 3.30664 1.8495 3.46731 1.71425C3.62798 1.57898 4.16381 1.62396 4.68165 1.98478C4.87222 2.11434 5.11701 2.17408 5.3602 2.15025C13.3259 1.32288 21.382 1.32288 29.348 2.15025C29.5912 2.17408 29.836 2.11434 30.0265 1.98478C30.5444 1.62396 31.0802 1.59375 31.2409 1.72901C31.4016 1.86427 31.3481 2.33049 30.9016 2.75136V2.75169C30.7023 2.93362 30.6221 3.18669 30.6875 3.42836C32.5454 9.34145 32.5454 15.5594 30.6875 21.4728C30.5962 21.7162 30.672 21.982 30.8841 22.1643C31.3306 22.6003 31.384 23.0665 31.2054 23.2017C31.0268 23.337 30.5268 23.292 30.0085 22.946V22.9463C29.8223 22.8097 29.574 22.7493 29.33 22.7808C21.3707 23.6018 13.3225 23.6119 5.36054 22.811L5.32473 22.8113ZM47.495 22.9167V22.9164C47.178 22.9345 46.8978 23.0956 46.7626 23.3376C43.7099 28.9772 38.3544 33.5078 31.6696 36.1036C31.3965 36.2282 31.2155 36.4598 31.1872 36.7202C31.1872 37.2915 30.7941 37.6527 30.562 37.6527C30.33 37.6527 30.0083 37.3218 29.9369 36.7505V36.7501C29.911 36.5051 29.7443 36.2859 29.4904 36.1638C23.8167 33.3678 18.9728 29.5213 15.3271 24.9161H17.3452C21.3205 24.9164 25.2925 24.7207 29.2406 24.3297C29.8482 24.7606 30.6731 24.905 31.4346 24.7137C32.196 24.5223 32.7917 24.0209 33.0189 23.3798C33.2461 22.7387 33.0747 22.0443 32.5628 21.5328C33.7576 17.6328 34.1443 13.5886 33.7058 9.57874C38.9421 12.8439 43.422 16.8909 46.9229 21.5182C47.0704 21.7014 47.3048 21.8219 47.566 21.8491C48.2445 21.8491 48.6376 22.1948 48.6376 22.3905C48.6376 22.5859 48.2266 22.8866 47.5301 22.9165L47.495 22.9167ZM6.18205 3.39862C7.06195 4.33642 7.67309 5.43266 7.96815 6.60134C7.99327 6.80105 7.9223 7.00076 7.7712 7.15617C7.6201 7.31157 7.40162 7.40958 7.16441 7.42838C6.71111 7.42267 6.33475 7.13167 6.2893 6.75171C5.99547 5.85791 5.47798 5.02718 4.77112 4.31588C4.60886 4.15981 4.53031 3.95406 4.55424 3.74763C4.57816 3.5412 4.70215 3.35223 4.89711 3.22536C5.09207 3.09849 5.34084 3.04545 5.58404 3.07801C5.82763 3.11091 6.04372 3.22671 6.18206 3.39856L6.18205 3.39862ZM12.4693 5.50381C12.3585 5.8163 12.0172 6.03044 11.6297 6.03011H11.3797C10.0801 5.73843 8.86438 5.2269 7.80752 4.5264C7.46505 4.22902 7.46505 3.75609 7.80752 3.45868C7.97537 3.31637 8.20342 3.23649 8.44143 3.23649C8.67983 3.23649 8.90788 3.31637 9.07572 3.45868C9.93529 3.95008 10.8905 4.31157 11.8976 4.5264C12.1344 4.5838 12.3309 4.72276 12.4398 4.9087C12.5486 5.09499 12.5594 5.31081 12.4693 5.50381H12.4693ZM45.7622 22.0446C45.7526 22.4541 45.3555 22.7813 44.8691 22.7813C43.0579 22.6957 41.4074 21.8777 40.4398 20.5858C40.2919 20.4163 40.2349 20.2022 40.2831 19.9957C40.3313 19.7893 40.4801 19.6094 40.6934 19.4997C40.9066 19.3899 41.1646 19.3604 41.405 19.4181C41.6454 19.4758 41.8459 19.6158 41.958 19.8041C42.6126 20.6607 43.6998 21.2152 44.905 21.3078C45.3396 21.3316 45.696 21.6069 45.7622 21.9694L45.7622 22.0446ZM43.9761 23.6386C43.9761 23.838 43.882 24.0293 43.7145 24.1702C43.5471 24.3112 43.3198 24.3904 43.083 24.3904C42.3945 24.3995 41.7629 24.714 41.4221 25.2175C41.2842 25.4867 40.9665 25.6592 40.6184 25.6535C40.4944 25.675 40.3668 25.675 40.2432 25.6535C39.8027 25.4769 39.6058 25.0392 39.7967 24.6609C40.1081 24.1511 40.5781 23.7218 41.1574 23.4201C41.7363 23.118 42.4021 22.9545 43.083 22.9468C43.4969 22.9676 43.8421 23.221 43.9227 23.5634L43.9761 23.6386Z"
                                            fill="currentColor"/>
                                        </svg>
                                </span>
                            <h2 class="categories__title">Engine Parts</h2>
                            <span class="categories__subtitle">(4 items)</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                    <div class="categories__card text-center">
                        <a class="categories__card--link" href="shop.html">
                                <span class="categories__icon">
                                    <svg width="50" height="31" viewBox="0 0 50 31" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.502 0.000340479C8.68925 0.000340479 7.19522 1.19935 7.19522 2.65444V11.5838C3.46132 12.0149 0.581808 14.5788 0.581808 17.6936V25.5864V25.5861C0.580655 25.6092 0.580655 25.6324 0.581808 25.6552C0.579501 25.6876 0.579501 25.7197 0.581808 25.7521V30.0784C0.581808 30.5671 1.07507 30.963 1.68403 30.963H10.502C11.1106 30.963 11.6042 30.5671 11.6042 30.0784V26.5397H38.0588V30.0784C38.0592 30.5671 38.5524 30.963 39.161 30.963H47.9794C48.588 30.963 49.0816 30.5671 49.0816 30.0784V25.7243C49.0827 25.7014 49.0827 25.6783 49.0816 25.6552C49.0827 25.6323 49.0827 25.6092 49.0816 25.586V17.6933C49.0816 14.5788 46.202 12.0149 42.4682 11.5835V2.6541C42.4682 1.19901 40.9741 0 39.1614 0H10.5032L10.502 0.000340479ZM10.502 1.76948H39.1602C39.79 1.76948 40.2625 2.14867 40.2625 2.65404V11.5005H37.8685C37.9911 11.2247 38.058 10.9235 38.058 10.6159V7.96185C38.058 6.50676 36.564 5.30775 34.7512 5.30775H29.2401C27.4273 5.30775 25.9333 6.50676 25.9333 7.96185V10.6159C25.9333 10.9236 26.0002 11.2247 26.1228 11.5005H23.5393C23.6619 11.2247 23.7288 10.9235 23.7288 10.6159V7.96185C23.7288 6.50676 22.2348 5.30775 20.4221 5.30775H14.9109C13.0982 5.30775 11.6041 6.50676 11.6041 7.96185V10.6159C11.6041 10.9236 11.671 11.2247 11.7937 11.5005H9.39967V2.65404C9.39967 2.14866 9.87217 1.76948 10.5019 1.76948H10.502ZM14.9109 7.07728H20.4221C21.0519 7.07728 21.5244 7.45648 21.5244 7.96185V10.6159C21.5244 11.1213 21.0519 11.5005 20.4221 11.5005H14.9109C14.2812 11.5005 13.8087 11.1213 13.8087 10.6159V7.96185C13.8087 7.45646 14.2812 7.07728 14.9109 7.07728ZM29.2401 7.07728H34.7513C35.381 7.07728 35.8535 7.45648 35.8535 7.96185V10.6159C35.8535 11.1213 35.381 11.5005 34.7513 11.5005H29.2401C28.6103 11.5005 28.1379 11.1213 28.1379 10.6159V7.96185C28.1379 7.45646 28.6104 7.07728 29.2401 7.07728ZM8.29704 13.2697H41.3646C44.4368 13.2697 46.8758 15.227 46.8758 17.6929V19.0199H2.78506V17.6929C2.78506 15.227 5.22404 13.2697 8.29626 13.2697H8.29704ZM2.78585 20.7891H46.8766V24.7698H2.78585V20.7891ZM2.78585 26.5394H9.39926V29.1935H2.78585V26.5394ZM40.2627 26.5394H46.8761V29.1935H40.2627V26.5394Z"
                                            fill="currentColor"/>
                                    </svg>
                                </span>
                            <h2 class="categories__title">Oil & Lubricants</h2>
                            <span class="categories__subtitle">(8 items)</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                    <div class="categories__card text-center">
                        <a class="categories__card--link" href="shop.html">
                                <span class="categories__icon">
                                    <svg width="53" height="36" viewBox="0 0 53 36" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M49.5589 10.8582H48.9099V3.81298C48.9099 1.71031 46.9741 0 44.5951 0C42.2162 0 40.2804 1.71068 40.2804 3.81298V4.52163C40.2804 4.94724 40.6704 5.29189 41.1521 5.29189C41.6337 5.29189 42.0237 4.94724 42.0237 4.52163V3.81298C42.0237 2.56015 43.1774 1.54091 44.5947 1.54091C46.0124 1.54091 47.1657 2.56051 47.1657 3.81298V10.8582H3.12302C1.50462 10.8582 0.1875 12.0222 0.1875 13.4524C0.1875 14.851 1.44868 15.9871 3.01799 16.0369V16.7914C3.01799 23.7389 8.04746 29.6664 15.0569 31.8832L13.8536 34.4394C13.6688 34.8324 13.8792 35.2831 14.3239 35.4464C14.4334 35.4869 14.5473 35.5059 14.6588 35.5059C15.0005 35.5059 15.3249 35.3271 15.4639 35.0312L16.7332 32.3339C18.1485 32.6481 19.6285 32.8172 21.1525 32.8172H37.3781C37.8402 32.8172 38.2947 32.7899 38.7439 32.7459L39.7574 35.0201C39.8924 35.3232 40.2212 35.5084 40.5686 35.5084C40.6748 35.5084 40.783 35.4909 40.8876 35.4544C41.3356 35.2989 41.5553 34.8514 41.3794 34.4555L40.4863 32.452C45.7578 31.2308 49.6639 26.9964 49.6639 21.9598L49.6635 16.0363C51.2328 15.9861 52.494 14.8504 52.494 13.4517C52.494 12.0215 51.1769 10.8575 49.5584 10.8575L49.5589 10.8582ZM49.5589 14.5057H39.8543C39.3727 14.5057 38.9827 14.8504 38.9827 15.276C38.9827 15.7016 39.3727 16.0463 39.8543 16.0463L47.9207 16.0466V21.9601C47.9207 27.0973 43.1917 31.2775 37.3773 31.2775H21.1517C12.1136 31.2775 4.76012 24.7793 4.76012 16.792V16.0471H36.9466C37.4282 16.0471 37.8182 15.7025 37.8182 15.2769C37.8182 14.8513 37.4282 14.5066 36.9466 14.5066L3.12241 14.5063C2.46525 14.5063 1.93056 14.0341 1.93056 13.453C1.93056 12.8723 2.46528 12.3997 3.12241 12.3997H49.5584C50.2155 12.3997 50.7502 12.8723 50.7502 13.453C50.7502 14.0341 50.2155 14.5063 49.5584 14.5063L49.5589 14.5057Z"
                                            fill="currentColor"/>
                                    </svg>
                                </span>
                            <h2 class="categories__title">Tires & Wheels</h2>
                            <span class="categories__subtitle">(6 items)</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-25">
                    <div class="categories__card text-center">
                        <a class="categories__card--link" href="shop.html">
                                <span class="categories__icon">
                                    <svg width="34" height="45" viewBox="0 0 34 45" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.4497 34.668H6.95124C6.51233 34.668 6.12854 35.0042 6.12854 35.3881C6.12854 35.7723 6.51273 36.1082 6.95124 36.1082H11.4497C11.8886 36.1082 12.2724 35.7719 12.2724 35.3881C12.2724 35.0042 11.8886 34.668 11.4497 34.668Z"
                                            fill="currentColor"/>
                                        <path
                                            d="M29.4446 11.0918C29.8835 11.0918 30.2673 10.7555 30.2673 10.3717V8.40291H31.9677C32.4067 8.40291 32.7905 8.25888 33.0101 7.97084C33.2845 7.68279 33.3943 7.34652 33.2845 6.96232L32.2421 2.49695C31.913 1.05636 30.4318 0 28.7312 0H23.3553C21.6548 0 20.1736 1.05636 19.8444 2.49695L18.9666 6.96232C18.9119 7.2986 18.9666 7.68243 19.241 7.97084C19.5154 8.25888 19.8992 8.40291 20.2834 8.40291H25.3849V14.5011H4.70372C2.12542 14.5011 0.0406494 16.3258 0.0406494 18.5827V43.9354C0.0406494 44.3196 0.424836 44.6555 0.863352 44.6555C1.30226 44.6555 1.68606 44.3193 1.68606 43.9354L1.68644 42.5431H31.5288V44.0315C31.5288 44.4157 31.913 44.7517 32.3515 44.7517C32.7904 44.7517 33.1742 44.4154 33.1742 44.0315L33.1746 42.5431V18.5828C33.1746 16.3261 31.0899 14.5013 28.5115 14.5013H27.0854V8.40308H28.676V10.3718C28.6213 10.756 29.0051 11.092 29.444 11.092L29.4446 11.0918ZM16.3337 24.6805H1.68675V21.3672H16.3337V24.6805ZM1.68675 26.1211H16.3337V29.4343H1.68675V26.1211ZM4.704 15.9415H16.3338V19.9269H1.68685V18.5825C1.68685 17.0937 3.05828 15.9415 4.7041 15.9415L4.704 15.9415ZM1.68675 30.8267H16.3337V41.1022H1.68675V30.8267ZM31.5291 18.5825V41.1022H17.9794V15.9415H28.512C30.1578 15.9415 31.5292 17.0938 31.5292 18.5825L31.5291 18.5825ZM21.6 2.785C21.7645 2.01666 22.5872 1.44054 23.465 1.44054H28.8409C29.7735 1.44054 30.5414 2.01664 30.706 2.785L31.6932 6.96236H20.612L21.6 2.785Z"
                                            fill="currentColor"/>
                                    </svg>
                                </span>
                            <h2 class="categories__title">Repair Parts</h2>
                            <span class="categories__subtitle">(3 items)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End categories section -->

    <!-- Start banner section -->
    <section class="banner__section section--padding pt-0">
        <div class="container">
            <div class="row  mb--n30">
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="banner__items position__relative">
                        <a class="banner__thumbnail display-block" href="shop.html"><img
                                class="banner__thumbnail--img banner__max--height"
                                src="{{ asset('site/assets/img/banner/banner1.webp') }}" alt="banner-img">
                            <div class="banner__content">
                                <span class="banner__content--subtitle text__secondary">Toyota Combo</span>
                                <h2 class="banner__content--title"><span
                                        class="banner__content--title__inner">CAR PARTS</span> COLLECTION</h2>
                                <span class="banner__content--price">$22.99</span>
                                <span class="banner__content--btn">Buy now
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </span>
                            </div>
                            <span class="banner__badge">25% <br> off</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="banner__items position__relative">
                        <a class="banner__thumbnail display-block" href="shop.html"><img
                                class="banner__thumbnail--img banner__max--height"
                                src="{{ asset('site/assets/img/banner/banner2.webp') }}" alt="banner-img">
                            <div class="banner__content right">
                                <span class="banner__badge--style2">20% Off</span>
                                <h2 class="banner__content--title">BODY PARTS <br> FOR ANY <span
                                        class="banner__content--title__inner"> VEHICLE </span></h2>
                                <span class="banner__content--btn mt-0">Buy now
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner section -->


    <!-- Start discount banner section -->
    <section class="discount__banner--section section--padding pt-0">
        <div class="container">
            <div class="discount__banner--thumbnail">
                <a class="display-block position-relative" href="#">
                    <img class="discount__banner--thumbnail__img" src="{{ asset('site/assets/img/banner/discount-bg.jpg') }}" alt="banner-img">
                    <span class="discount__banner--text "><span class="text__secondary">10%</span> Free Shipping On All Order Over <span
                            class="text__secondary">$99</span></span>
                </a>
            </div>
        </div>
    </section>
    <!-- End discount banner section -->

    @inertia


    <!-- Start product section -->
    <section class="product__section small__product--section__bg section--padding ">
        <div class="container">
            <div class="row mb--n40">
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="small__product--step">
                        <div class="section__heading border-bottom mb-30">
                            <h2 class="section__heading--maintitle">On sale <span>Product</span></h2>
                        </div>
                        <div class="small__product--step__inner">
                            <div class="small__product--card style2 d-flex mb-25">
                                <div class="small__product--thumbnail">
                                    <a class="display-block" href="product-details.html"><img
                                            src="{{ asset('site/assets/img/product/small-product/product6.webp') }}"
                                            alt="product-img"></a>
                                </div>
                                <div class="small__product--content">
                                    <ul class="rating small__product--rating d-flex">
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                            fill="currentColor"/>
                                                        </svg>
                                                </span>
                                        </li>
                                    </ul>
                                    <h3 class="small__product--card__title"><a href="product-details.html">Lorem ipsum
                                            dolor. </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$239.52</span>
                                        <span class="old__price"> $362.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small__product--card style2 d-flex mb-25">
                                <div class="small__product--thumbnail">
                                    <a class="display-block" href="product-details.html"><img
                                            src="{{ asset('site/assets/img/product/small-product/product7.webp') }}"
                                            alt="product-img"></a>
                                </div>
                                <div class="small__product--content">
                                    <ul class="rating small__product--rating d-flex">
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                            fill="currentColor"/>
                                                        </svg>
                                                </span>
                                        </li>
                                    </ul>
                                    <h3 class="small__product--card__title"><a href="product-details.html">Consec adipis
                                            elit. </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$219.52</span>
                                        <span class="old__price"> $320.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small__product--card style2 d-flex">
                                <div class="small__product--thumbnail">
                                    <a class="display-block" href="product-details.html"><img
                                            src="{{ asset('site/assets/img/product/small-product/product9.webp') }}"
                                            alt="product-img"></a>
                                </div>
                                <div class="small__product--content">
                                    <ul class="rating small__product--rating d-flex">
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                            fill="currentColor"/>
                                                        </svg>
                                                </span>
                                        </li>
                                    </ul>
                                    <h3 class="small__product--card__title"><a href="product-details.html">Labore qui
                                            corpos. </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$188.52</span>
                                        <span class="old__price"> $234.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="small__product--step">
                        <div class="section__heading border-bottom mb-30">
                            <h2 class="section__heading--maintitle">Discount <span> Item</span></h2>
                        </div>
                        <div class="small__product--step__inner">
                            <div class="small__product--card style2 d-flex mb-25">
                                <div class="small__product--thumbnail">
                                    <a class="display-block" href="product-details.html"><img
                                            src="{{ asset('site/assets/img/product/small-product/product1.webp') }}"
                                            alt="product-img"></a>
                                </div>
                                <div class="small__product--content">
                                    <ul class="rating small__product--rating d-flex">
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                            fill="currentColor"/>
                                                        </svg>
                                                </span>
                                        </li>
                                    </ul>
                                    <h3 class="small__product--card__title"><a href="product-details.html">Maiores delec
                                            ipsam. </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$199.52</span>
                                        <span class="old__price"> $254.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small__product--card style2 d-flex mb-25">
                                <div class="small__product--thumbnail">
                                    <a class="display-block" href="product-details.html"><img
                                            src="{{ asset('site/assets/img/product/small-product/product2.webp') }}"
                                            alt="product-img"></a>
                                </div>
                                <div class="small__product--content">
                                    <ul class="rating small__product--rating d-flex">
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                            fill="currentColor"/>
                                                        </svg>
                                                </span>
                                        </li>
                                    </ul>
                                    <h3 class="small__product--card__title"><a href="product-details.html">Suscip esse
                                            commo. </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$210.52</span>
                                        <span class="old__price"> $278.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small__product--card style2 d-flex">
                                <div class="small__product--thumbnail">
                                    <a class="display-block" href="product-details.html"><img
                                            src="{{ asset('site/assets/img/product/small-product/product3.webp') }}"
                                            alt="product-img"></a>
                                </div>
                                <div class="small__product--content">
                                    <ul class="rating small__product--rating d-flex">
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                            fill="currentColor"/>
                                                        </svg>
                                                </span>
                                        </li>
                                    </ul>
                                    <h3 class="small__product--card__title"><a href="product-details.html">Recusand cum
                                            quas? </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$122.52</span>
                                        <span class="old__price"> $245.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="small__product--step">
                        <div class="section__heading border-bottom mb-30">
                            <h2 class="section__heading--maintitle">Special <span>Products</span></h2>
                        </div>
                        <div class="small__product--step__inner">
                            <div class="small__product--card style2 d-flex mb-25">
                                <div class="small__product--thumbnail">
                                    <a class="display-block" href="product-details.html"><img
                                            src="{{ asset('site/assets/img/product/small-product/product4.webp') }}"
                                            alt="product-img"></a>
                                </div>
                                <div class="small__product--content">
                                    <ul class="rating small__product--rating d-flex">
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                            fill="currentColor"/>
                                                        </svg>
                                                </span>
                                        </li>
                                    </ul>
                                    <h3 class="small__product--card__title"><a href="product-details.html">Beata saepe
                                            sint. </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$245.52</span>
                                        <span class="old__price"> $376.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small__product--card style2 d-flex mb-25">
                                <div class="small__product--thumbnail">
                                    <a class="display-block" href="product-details.html"><img
                                            src="{{ asset('site/assets/img/product/small-product/product5.webp') }}"
                                            alt="product-img"></a>
                                </div>
                                <div class="small__product--content">
                                    <ul class="rating small__product--rating d-flex">
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                            fill="currentColor"/>
                                                        </svg>
                                                </span>
                                        </li>
                                    </ul>
                                    <h3 class="small__product--card__title"><a href="product-details.html">Odio sits
                                            aliquid. </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$155.52</span>
                                        <span class="old__price"> $234.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="small__product--card style2 d-flex">
                                <div class="small__product--thumbnail">
                                    <a class="display-block" href="product-details.html"><img
                                            src="{{ asset('site/assets/img/product/small-product/product6.webp') }}"
                                            alt="product-img"></a>
                                </div>
                                <div class="small__product--content">
                                    <ul class="rating small__product--rating d-flex">
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                        fill="currentColor"/>
                                                    </svg>
                                                </span>
                                        </li>
                                        <li class="rating__list">
                                                <span class="rating__icon">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                            fill="currentColor"/>
                                                        </svg>
                                                </span>
                                        </li>
                                    </ul>
                                    <h3 class="small__product--card__title"><a href="product-details.html">Conseqr
                                            adipis and. </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$132.52</span>
                                        <span class="old__price"> $222.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product section -->

    <!-- Start blog section -->
    <section class="blog__section section--padding">
        <div class="container">
            <div
                class="section__heading section__heading--flex border-bottom d-flex justify-content-between align-items-end mb-30">
                <h2 class="section__heading--maintitle">Blog & article</h2>
                <a class="view__all--link" href="blog.html">View all Blog</a>
            </div>
            <div class="blog__section--inner blog__swiper--activation swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog__card">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="blog-details.html"><img
                                        class="blog__card--thumbnail__img"
                                        src="{{ asset('site/assets/img/blog/blog1.webp') }}" alt="blog-img"></a>
                                <span class="blog__card--meta__date">20 <br> Oct</span>
                            </div>
                            <div class="blog__card--content">
                                <span class="blog__card--meta">By: Rasalina</span>
                                <h3 class="blog__card--title"><a href="blog-details.html">Beauty Skin Care Product In
                                        Stock</a></h3>
                                <p class="blog__card--desc">Namkand sodales vel online best prices when
                                    an unknown printer took a galley of </p>
                                <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                    <a class="blog__card--btn__link" href="blog-details.html">Read more
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <ul class="social__share blog__card--social d-flex">
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                               href="https://www.facebook.com">
                                                <svg width="9" height="15" viewBox="0 0 9 15" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank" href="https://twitter.com">
                                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                               href="https://www.instagram.com">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                               href="https://www.youtube.com">
                                                <svg width="16" height="11" viewBox="0 0 16 11" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__card">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="blog-details.html"><img
                                        class="blog__card--thumbnail__img"
                                        src="{{ asset('site/assets/img/blog/blog2.webp') }}" alt="blog-img"></a>
                                <span class="blog__card--meta__date">24 <br> Oct</span>
                            </div>
                            <div class="blog__card--content">
                                <span class="blog__card--meta">By: Rasalina</span>
                                <h3 class="blog__card--title"><a href="blog-details.html">Lorem ipsum dolor sit thre
                                        elit.</a></h3>
                                <p class="blog__card--desc">Namkand sodales vel online best prices when
                                    an unknown printer took a galley of </p>
                                <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                    <a class="blog__card--btn__link" href="blog-details.html">Read more
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <ul class="social__share blog__card--social d-flex">
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                               href="https://www.facebook.com">
                                                <svg width="9" height="15" viewBox="0 0 9 15" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank" href="https://twitter.com">
                                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                               href="https://www.instagram.com">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                               href="https://www.youtube.com">
                                                <svg width="16" height="11" viewBox="0 0 16 11" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__card">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="blog-details.html"><img
                                        class="blog__card--thumbnail__img"
                                        src="{{ asset('site/assets/img/blog/blog3.webp') }}" alt="blog-img"></a>
                                <span class="blog__card--meta__date">22 <br> Oct</span>
                            </div>
                            <div class="blog__card--content">
                                <span class="blog__card--meta">By: Rasalina</span>
                                <h3 class="blog__card--title"><a href="blog-details.html">Possimus libero id moles
                                        cumqu.</a></h3>
                                <p class="blog__card--desc">Namkand sodales vel online best prices when
                                    an unknown printer took a galley of </p>
                                <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                    <a class="blog__card--btn__link" href="blog-details.html">Read more
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <ul class="social__share blog__card--social d-flex">
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                               href="https://www.facebook.com">
                                                <svg width="9" height="15" viewBox="0 0 9 15" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank" href="https://twitter.com">
                                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                               href="https://www.instagram.com">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                               href="https://www.youtube.com">
                                                <svg width="16" height="11" viewBox="0 0 16 11" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__card">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="blog-details.html"><img
                                        class="blog__card--thumbnail__img"
                                        src="{{ asset('site/assets/img/blog/blog1.webp') }}" alt="blog-img"></a>
                                <span class="blog__card--meta__date">18 <br> Oct</span>
                            </div>
                            <div class="blog__card--content">
                                <span class="blog__card--meta">By: Rasalina</span>
                                <h3 class="blog__card--title"><a href="blog-details.html">Beauty Skin Care Product In
                                        Stock</a></h3>
                                <p class="blog__card--desc">Namkand sodales vel online best prices when
                                    an unknown printer took a galley of </p>
                                <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                    <a class="blog__card--btn__link" href="blog-details.html">Read more
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <ul class="social__share blog__card--social d-flex">
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                               href="https://www.facebook.com">
                                                <svg width="9" height="15" viewBox="0 0 9 15" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank" href="https://twitter.com">
                                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                               href="https://www.instagram.com">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                               href="https://www.youtube.com">
                                                <svg width="16" height="11" viewBox="0 0 16 11" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z"
                                                        fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper__nav--btn swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class=" -chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
                <div class="swiper__nav--btn swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class=" -chevron-left">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog section -->

</main>

<!-- Start footer section -->
<footer class="footer__section footer__bg">
    <div class="container">
        <div class="newsletter__area">
            <div class="newsletter__inner d-flex justify-content-between align-items-center">
                <div class="newsletter__content">
                    <h2 class="newsletter__title">Subscribe <span class="text__secondary">Newsletter</span></h2>
                    <p class="newsletter__desc">Don’t wait make a smart & logical quote here. Its pretty easy.</p>
                </div>
                <div class="newsletter__subscribe">
                    <form class="newsletter__subscribe--form" action="#">
                        <label>
                            <input class="newsletter__subscribe--input" placeholder=" Enter Your Email" type="text">
                        </label>
                        <button class="newsletter__subscribe--button" type="submit">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="main__footer">
            <div class="row ">
                <div class="col-lg-4 col-md-10">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title">About Us
                            <button class="footer__widget--button" aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                 width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                      transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </h2>
                        <div class="footer__widget--inner">
                            <p class="footer__widget--desc">Corporate clients and leisure travelers has
                                been relying on Groundlink for dependable
                                safe, and professional chauffeured car end
                                service in major cities across World.</p>
                            <ul class="social__share footer__social d-flex">
                                <li class="social__share--list">
                                    <a class="social__share--icon__style2" target="_blank"
                                       href="https://www.facebook.com">
                                        <svg width="11" height="17" viewBox="0 0 9 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                                fill="currentColor"/>
                                        </svg>
                                        <span class="visually-hidden">Facebook</span>
                                    </a>
                                </li>
                                <li class="social__share--list">
                                    <a class="social__share--icon__style2" target="_blank" href="https://twitter.com">
                                        <svg width="16" height="14" viewBox="0 0 14 12" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                                fill="currentColor"/>
                                        </svg>
                                        <span class="visually-hidden">Twitter</span>
                                    </a>
                                </li>
                                <li class="social__share--list">
                                    <a class="social__share--icon__style2" target="_blank"
                                       href="https://www.instagram.com">
                                        <svg width="16" height="15" viewBox="0 0 14 13" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                                fill="currentColor"/>
                                        </svg>
                                        <span class="visually-hidden">Instagram</span>
                                    </a>
                                </li>
                                <li class="social__share--list">
                                    <a class="social__share--icon__style2" target="_blank"
                                       href="https://www.pinterest.com">
                                        <svg width="16" height="17" viewBox="0 0 14 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.5625 7.75C13.5625 4.00391 10.5273 0.96875 6.78125 0.96875C3.03516 0.96875 0 4.00391 0 7.75C0 10.6484 1.77734 13.082 4.29297 14.0664C4.23828 13.5469 4.18359 12.7266 4.32031 12.125C4.45703 11.6055 5.11328 8.76172 5.11328 8.76172C5.11328 8.76172 4.92188 8.35156 4.92188 7.75C4.92188 6.82031 5.46875 6.10938 6.15234 6.10938C6.72656 6.10938 7 6.54688 7 7.06641C7 7.64062 6.61719 8.51562 6.42578 9.33594C6.28906 9.99219 6.78125 10.5391 7.4375 10.5391C8.64062 10.5391 9.57031 9.28125 9.57031 7.44922C9.57031 5.80859 8.39453 4.6875 6.75391 4.6875C4.8125 4.6875 3.69141 6.13672 3.69141 7.61328C3.69141 8.21484 3.91016 8.84375 4.18359 9.17188C4.23828 9.22656 4.23828 9.30859 4.23828 9.36328C4.18359 9.58203 4.04688 10.0469 4.04688 10.1289C4.01953 10.2656 3.9375 10.293 3.80078 10.2383C2.95312 9.82812 2.43359 8.59766 2.43359 7.58594C2.43359 5.45312 3.99219 3.48438 6.91797 3.48438C9.26953 3.48438 11.1016 5.17969 11.1016 7.42188C11.1016 9.74609 9.625 11.6328 7.57422 11.6328C6.89062 11.6328 6.23438 11.2773 6.01562 10.8398C6.01562 10.8398 5.6875 12.1523 5.60547 12.4531C5.44141 13.0547 5.03125 13.793 4.75781 14.2305C5.38672 14.4492 6.07031 14.5312 6.78125 14.5312C10.5273 14.5312 13.5625 11.4961 13.5625 7.75Z"
                                                fill="currentColor"/>
                                        </svg>
                                        <span class="visually-hidden">Pinterest</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title ">My Account
                            <button class="footer__widget--button" aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                 width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                      transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </h2>
                        <ul class="footer__widget--menu footer__widget--inner">

                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="my-account.html">My Account</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="cart.html">Shopping Cart</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="cart.html">Login</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="login.html">Register</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title ">Resources
                            <button class="footer__widget--button" aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                 width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                      transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </h2>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="contact.html">Contact Us</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="about.html">About Us</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="wishlist.html">Wishlist</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="privacy-policy.html">Privacy Policy</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="faq.html">Frequently</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title ">FIND IT FAST
                            <button class="footer__widget--button" aria-label="footer widget button"></button>
                            <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                 width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z"
                                      transform="translate(-6 -8.59)" fill="currentColor"></path>
                            </svg>
                        </h2>
                        <ul class="footer__widget--menu footer__widget--inner">
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="shop.html">Smartphone ablet</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="shop.html">Computer Laptop</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="shop.html">TV & Audio</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="shop.html">Car Accessories</a></li>
                            <li class="footer__widget--menu__list"><a class="footer__widget--menu__text"
                                                                      href="shop.html">Cameras Photos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="shipping__inner d-flex">
            <div class="shipping__items d-flex align-items-center">
                <div class="shipping__icon text-white">
                    <svg width="38" height="35" viewBox="0 0 38 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 10.4315V14.4875C0 15.435 0.781458 16.2008 1.73129 16.2008H3.27884V32.3184C3.27884 33.7058 4.42779 34.8352 5.82973 34.8429H32.0509C33.4528 34.8429 34.594 33.7058 34.6018 32.3184V16.1938H36.1493C37.0991 16.1938 37.8806 15.4281 37.8806 14.4805V10.4245C37.8806 9.47692 37.0991 8.71112 36.1493 8.71112H28.42C29.3544 7.84699 29.9214 6.6871 30.021 5.42094C30.1281 4.07921 29.6994 2.77522 28.8182 1.75943C27.9373 0.736001 26.7041 0.114302 25.348 0.0159745C23.9922 -0.0900256 22.6746 0.334271 21.6481 1.20635C19.9476 2.6468 18.7067 4.8755 17.8332 6.98294C17.1361 5.40604 16.1786 3.7914 14.8995 2.70738C13.1069 1.19115 10.4028 1.39583 8.87062 3.17736C8.12764 4.03385 7.76754 5.13315 7.85957 6.2553C7.9362 7.18001 8.304 8.03689 8.90907 8.71917H1.73901C0.781536 8.71917 0.00772156 9.48492 7.87486e-05 10.4325L0 10.4315ZM1.83065 14.3888V10.5226H11.7206C11.7588 10.5302 11.8049 10.5302 11.8431 10.5302C11.889 10.5302 11.9274 10.5302 11.9733 10.5226H25.1796C25.2178 10.5302 25.2562 10.5302 25.2944 10.5302C25.3326 10.5302 25.3633 10.5302 25.4015 10.5226H36.0415V14.3888H33.6975H33.6744H4.18971H4.16663H1.83029H1.83065ZM32.7706 32.3177C32.7706 32.7118 32.4413 33.0378 32.043 33.0378H22.8732V16.1927H32.7703L32.7706 32.3177ZM16.8295 16.1931H21.0427V33.0382H16.8295V16.1931ZM14.9985 33.0382H5.82871C5.43044 33.0382 5.10111 32.7123 5.10111 32.3181V16.1936H14.9982L14.9985 33.0382ZM13.635 4.018C13.6581 4.03323 13.6809 4.05577 13.6963 4.071C15.0293 5.2004 15.9714 7.16413 16.561 8.71055H12.0185C11.4824 8.46048 10.9767 8.14187 10.5172 7.76299C9.4753 6.91376 9.32205 5.37498 10.1801 4.34391C11.0456 3.32048 12.5931 3.16882 13.635 4.018L13.635 4.018ZM19.112 8.71845C19.8322 6.73982 21.0655 4.08654 22.8272 2.58551C24.1983 1.43326 26.259 1.59256 27.4233 2.9495C28.5876 4.29886 28.4266 6.33808 27.0632 7.49797C26.4658 7.98319 25.8068 8.40015 25.102 8.72609H19.1116L19.112 8.71845Z"
                            fill="currentColor"/>
                    </svg>
                </div>
                <div class="shipping__content">
                    <h2 class="shipping__content--title text-white h3">Free Shipping</h2>
                    <p class="shipping__content--desc">Free shipping over $100</p>
                </div>
            </div>
            <div class="shipping__items d-flex align-items-center">
                <div class="shipping__icon text-white">
                    <svg width="39" height="37" viewBox="0 0 39 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M34.4506 19.1161C34.0912 19.1161 33.8007 18.84 33.8007 18.4995V16.6495C33.8007 10.0795 27.5195 4.93302 19.5002 4.93302C11.4809 4.93302 5.20048 10.0797 5.20048 16.6495V18.4995C5.20048 18.84 4.90993 19.1161 4.55057 19.1161C4.19093 19.1161 3.90039 18.84 3.90039 18.4995V16.6495C3.90039 9.38758 10.7529 3.69946 19.5004 3.69946C28.2482 3.69946 35.1004 9.38758 35.1004 16.6495V18.4995C35.1004 18.84 34.8098 19.1161 34.4505 19.1161"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6.50032 19.1436C3.66377 19.381 1.30023 21.1391 1.30023 23.1249C1.30023 25.1104 3.66377 26.8686 6.50032 27.106V19.1436ZM7.15023 28.3665C3.27419 28.3665 0 25.9657 0 23.1249C0 20.2838 3.27405 17.8831 7.15023 17.8831C7.5096 17.8831 7.80013 18.1595 7.80013 18.4999V27.7499C7.80013 28.0904 7.50959 28.3665 7.15023 28.3665V28.3665Z"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M38.3502 23.4334C37.9908 23.4334 37.7003 23.157 37.7003 22.8166V19.1165C37.7003 7.75154 31.0662 1.23356 19.4998 1.23356C7.76363 1.23356 1.30008 7.58444 1.30008 19.1165V22.8166C1.30008 23.157 1.00954 23.4334 0.650178 23.4334C0.290536 23.4334 0 23.157 0 22.8166V19.1165C0 6.96727 7.10774 0 19.5 0C31.8922 0 39 6.96793 39 19.1165V22.8166C39 23.157 38.7094 23.4334 38.3501 23.4334"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M19.5016 36.9998C19.1422 36.9998 18.8517 36.7237 18.8517 36.3833C18.8517 35.0229 20.0176 33.9164 21.4516 33.9164H24.3428C26.3658 33.9164 28.2167 32.5944 28.9507 30.6278C29.0704 30.3065 29.4409 30.1369 29.7801 30.2518C30.1188 30.3659 30.2957 30.7179 30.176 31.0384C29.2595 33.4978 26.915 35.1499 24.3428 35.1499H21.4515C20.7347 35.1499 20.1517 35.703 20.1517 36.3833C20.1517 36.7237 19.8612 36.9999 19.5015 36.9999"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M19.5001 37C19.1407 37 18.8502 36.7238 18.8502 36.3834C18.8502 35.703 18.2672 35.15 17.5501 35.15H14.6591C12.0875 35.15 9.743 33.4984 8.8265 31.0398C8.7068 30.7185 8.88363 30.3665 9.22178 30.2529C9.56292 30.1388 9.93206 30.3079 10.0518 30.6284C10.7855 32.5951 12.6367 33.9166 14.6591 33.9166H17.5501C18.984 33.9166 20.1503 35.023 20.1503 36.3834C20.1503 36.7238 19.8597 37 19.5001 37"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M9.10186 16.6499C8.38502 16.6499 7.80177 17.203 7.80177 17.8834V28.9834C7.80177 29.6635 8.38502 30.2166 9.10186 30.2166C9.81869 30.2166 10.4019 29.6635 10.4019 28.9834V17.8834C10.4019 17.203 9.81869 16.6499 9.10186 16.6499ZM9.10186 31.45C7.66791 31.45 6.50195 30.3438 6.50195 28.9834V17.8834C6.50195 16.5229 7.66791 15.4165 9.10186 15.4165C10.5358 15.4165 11.7018 16.5229 11.7018 17.8834V28.9834C11.7018 30.3438 10.5358 31.45 9.10186 31.45Z"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M32.5013 19.1435V27.1058C35.3378 26.8683 37.7013 25.1102 37.7013 23.1247C37.7013 21.1389 35.3378 19.3808 32.5013 19.1433V19.1435ZM31.8513 28.3663C31.4917 28.3663 31.2012 28.0901 31.2012 27.7497V18.4997C31.2012 18.1592 31.4917 17.8828 31.8513 17.8828C35.7271 17.8828 39.0009 20.2836 39.0009 23.1247C39.0009 25.9655 35.7268 28.3663 31.8513 28.3663"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M29.901 16.6499C29.1839 16.6499 28.6009 17.203 28.6009 17.8834V28.9834C28.6009 29.6635 29.1839 30.2166 29.901 30.2166C30.6178 30.2166 31.2008 29.6635 31.2008 28.9834V17.8834C31.2008 17.203 30.6178 16.6499 29.901 16.6499ZM29.901 31.45C28.467 31.45 27.3008 30.3438 27.3008 28.9834V17.8834C27.3008 16.5229 28.467 15.4165 29.901 15.4165C31.3346 15.4165 32.5009 16.5229 32.5009 17.8834V28.9834C32.5009 30.3438 31.3346 31.45 29.901 31.45Z"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M19.4979 18.4998C16.6309 18.4998 14.2981 20.7129 14.2981 23.4332C14.2981 26.1533 16.6309 28.3664 19.4979 28.3664C22.3653 28.3664 24.698 26.1533 24.698 23.4332C24.698 20.7129 22.3653 18.4998 19.4979 18.4998ZM19.4979 29.5998C15.9138 29.5998 12.998 26.8333 12.998 23.4332C12.998 20.0328 15.9138 17.2664 19.4979 17.2664C23.0821 17.2664 25.9981 20.0328 25.9981 23.4332C25.9981 26.8333 23.0821 29.5998 19.4979 29.5998Z"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M19.5018 18.4998C18.7063 18.4998 17.5518 20.4221 17.5518 23.4332C17.5518 26.4444 18.7063 28.3664 19.5018 28.3664C20.2975 28.3664 21.4518 26.4444 21.4518 23.4332C21.4518 20.4221 20.2975 18.4998 19.5018 18.4998ZM19.5018 29.5998C17.6486 29.5998 16.252 26.9487 16.252 23.4332C16.252 19.9175 17.6486 17.2664 19.5018 17.2664C21.3549 17.2664 22.7519 19.9175 22.7519 23.4332C22.7519 26.9487 21.3549 29.5998 19.5018 29.5998Z"
                              fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M25.3479 24.0498H13.648C13.2886 24.0498 12.998 23.7737 12.998 23.4332C12.998 23.0928 13.2886 22.8164 13.648 22.8164H25.3479C25.7076 22.8164 25.9981 23.0928 25.9981 23.4332C25.9981 23.7737 25.7076 24.0498 25.3479 24.0498Z"
                              fill="currentColor"/>
                    </svg>
                </div>
                <div class="shipping__content">
                    <h2 class="shipping__content--title text-white h3">Support 24/7</h2>
                    <p class="shipping__content--desc">Contact us 24 hours a day</p>
                </div>
            </div>
            <div class="shipping__items d-flex align-items-center">
                <div class="shipping__icon text-white">
                    <svg width="43" height="36" viewBox="0 0 43 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.53678 0.000286987C2.45745 0.000286987 0.753906 1.5443 0.753906 3.42892V25.7142C0.753906 27.5988 2.45745 29.1428 4.53678 29.1428H17.1318C17.3825 29.1428 17.6229 29.0524 17.8002 28.8917C17.9778 28.731 18.0772 28.5129 18.0772 28.2856C18.0772 28.0583 17.9778 27.8402 17.8002 27.6795C17.6229 27.5187 17.3825 27.4283 17.1318 27.4283H4.53678C3.47255 27.4283 2.6455 26.6787 2.6455 25.7142V6.00033H12.1027V13.7145H12.1024C12.1027 14.0609 12.3332 14.3735 12.6862 14.506C13.0396 14.6386 13.4462 14.5654 13.7169 14.3203L16.831 11.4978L19.9452 14.3203C20.2156 14.5654 20.6222 14.6386 20.9755 14.506C21.3289 14.3734 21.5594 14.0609 21.5594 13.7145V6.00033H31.0166V12.9446V12.9443C31.0166 13.1716 31.116 13.3897 31.2933 13.5504C31.471 13.7111 31.7113 13.8015 31.9621 13.8015C32.2128 13.8015 32.4535 13.7111 32.6308 13.5504C32.8081 13.3897 32.9079 13.1716 32.9079 12.9443V3.42864C32.9079 1.54402 31.2043 0 29.125 0L4.53678 0.000286987ZM4.53678 1.71446H12.1022V4.28586H2.64583V3.42892C2.64583 2.46435 3.47288 1.71475 4.5371 1.71475L4.53678 1.71446ZM13.994 1.71446H19.6681V11.6452L17.4998 9.67993H17.4995C17.1303 9.3453 16.5315 9.3453 16.1623 9.67993L13.994 11.6455L13.994 1.71446ZM21.5594 1.71446H29.1248C30.189 1.71446 31.0161 2.46406 31.0161 3.42863V4.28586H21.5589L21.5594 1.71446Z"
                            fill="currentColor"/>
                        <path
                            d="M6.42781 19.7144C5.90568 19.7144 5.48234 20.0983 5.48234 20.5716C5.48234 20.7989 5.58176 21.017 5.75908 21.1777C5.93671 21.3384 6.17704 21.4288 6.42782 21.4288H12.102C12.3527 21.4288 12.5934 21.3384 12.7707 21.1777C12.948 21.017 13.0478 20.7989 13.0478 20.5716C13.0478 20.3443 12.948 20.1262 12.7707 19.9655C12.5934 19.8048 12.3527 19.7144 12.102 19.7144H6.42781Z"
                            fill="currentColor"/>
                        <path
                            d="M6.42781 23.1431C5.90568 23.1431 5.48234 23.5268 5.48234 24.0003C5.48234 24.2276 5.58176 24.4454 5.75908 24.6064C5.93671 24.7671 6.17704 24.8572 6.42782 24.8572H14.939C15.1898 24.8572 15.4305 24.7671 15.6078 24.6064C15.7851 24.4454 15.8848 24.2276 15.8848 24.0003C15.8848 23.773 15.7851 23.5549 15.6078 23.3942C15.4305 23.2335 15.1898 23.1431 14.939 23.1431H6.42781Z"
                            fill="currentColor"/>
                        <path
                            d="M15.8854 20.5716C15.8854 20.7989 15.7857 21.017 15.6084 21.1777C15.431 21.3384 15.1904 21.4288 14.9396 21.4288C14.4175 21.4288 13.9941 21.0448 13.9941 20.5716C13.9941 20.0983 14.4175 19.7144 14.9396 19.7144C15.1904 19.7144 15.431 19.8048 15.6084 19.9655C15.7857 20.1262 15.8854 20.3443 15.8854 20.5716Z"
                            fill="currentColor"/>
                        <path
                            d="M31.0182 15.4287C24.7617 15.4287 19.6699 20.0437 19.6699 25.7143C19.6699 31.3849 24.7617 35.9999 31.0182 35.9999C37.2747 35.9999 42.3665 31.3849 42.3665 25.7143C42.3665 20.0437 37.2747 15.4287 31.0182 15.4287ZM31.0182 17.1429C36.2522 17.1429 40.4754 20.9702 40.4754 25.7145C40.4754 30.4583 36.2527 34.2861 31.0182 34.2861C25.7842 34.2861 21.561 30.4588 21.561 25.7145C21.561 20.9706 25.7837 17.1429 31.0182 17.1429Z"
                            fill="currentColor"/>
                        <path
                            d="M28.3654 20.8229L25.7886 23.1616C25.4194 23.4962 25.4194 24.0389 25.7886 24.3735L28.3654 26.7122C28.7346 27.0468 29.3333 27.0468 29.7026 26.7122C30.0724 26.3778 30.073 25.8354 29.7045 25.5003L28.816 24.695H33.3319C34.6855 24.695 35.7459 25.6573 35.7459 26.8864C35.7459 28.1155 34.6855 29.0778 33.3319 29.0778H27.235C26.7129 29.0778 26.2892 29.4615 26.2892 29.935C26.2892 30.4083 26.7125 30.7923 27.235 30.7923H33.3322C35.7019 30.7923 37.6375 29.035 37.6375 26.8867C37.6375 24.7383 35.7016 22.9811 33.3322 22.9811H28.6608L29.7045 22.0352C30.073 21.7 30.0724 21.1573 29.7026 20.8232C29.2805 20.4576 28.728 20.5021 28.3654 20.8232V20.8229Z"
                            fill="currentColor"/>
                    </svg>
                </div>
                <div class="shipping__content">
                    <h2 class="shipping__content--title text-white h3">100% Money Back</h2>
                    <p class="shipping__content--desc">You have 30 days to Return</p>
                </div>
            </div>
            <div class="shipping__items d-flex align-items-center">
                <div class="shipping__icon text-white">
                    <svg width="28" height="33" viewBox="0 0 28 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.9418 19.3345C12.9838 19.3466 12.0694 19.6922 11.3955 20.2974C10.7218 20.9024 10.3429 21.7181 10.3399 22.569C10.3371 23.4196 10.7108 24.2376 11.3807 24.8459V26.2996C11.3807 27.1301 11.8795 27.8975 12.6895 28.3128C13.4998 28.7278 14.4977 28.7278 15.3078 28.3128C16.1178 27.8975 16.6169 27.1301 16.6169 26.2996V24.8459C17.292 24.2291 17.6632 23.3993 17.6496 22.5392C17.6356 21.6793 17.2379 20.8592 16.5435 20.2596C15.8488 19.66 14.9145 19.3296 13.946 19.3416L13.9418 19.3345ZM14.7526 23.5072C14.445 23.7034 14.2626 24.0192 14.2631 24.3557V26.2857C14.2631 26.4172 14.1429 26.5239 13.9948 26.5239C13.8465 26.5239 13.7266 26.4172 13.7266 26.2857V24.3695C13.7268 24.0333 13.5446 23.7173 13.237 23.521C12.957 23.3234 12.7797 23.033 12.7453 22.7167C12.7109 22.4004 12.8229 22.0853 13.0551 21.8437C13.2873 21.6021 13.62 21.4544 13.9771 21.4348H13.9968C14.3618 21.4406 14.7073 21.5818 14.9497 21.8246C15.1917 22.0671 15.3083 22.3888 15.2709 22.7111C15.2335 23.0337 15.0455 23.3274 14.7527 23.521L14.7526 23.5072Z"
                            fill="currentColor"/>
                        <path
                            d="M13.9961 0.000558845C11.1916 0.000558845 8.50207 0.989734 6.51933 2.75044C4.53631 4.51115 3.42224 6.89914 3.42224 9.38902V13.2348C2.56092 13.3204 1.76512 13.6848 1.18731 14.2581C0.609256 14.8316 0.289622 15.574 0.289062 16.3437V29.8705C0.289062 30.7005 0.660322 31.4966 1.32145 32.0834C1.98256 32.6703 2.87891 33 3.81374 33H24.1398C25.0746 33 25.9713 32.6704 26.6324 32.0834C27.2932 31.4966 27.6647 30.7005 27.6647 29.8705V16.3437C27.6642 15.574 27.3446 14.8315 26.7665 14.2581C26.1884 13.6848 25.3929 13.3204 24.5316 13.2348V9.37158C24.5264 6.89069 23.4153 4.51214 21.4413 2.75597C19.4672 0.999855 16.7908 0.00925217 13.9966 0L13.9961 0.000558845ZM13.9961 2.08708V2.08684C16.174 2.09144 18.2608 2.86278 19.7992 4.23179C21.3372 5.6008 22.201 7.45564 22.201 9.38934V13.2145L5.77179 13.2143V9.3891V9.38934C5.77179 7.45253 6.63836 5.59521 8.18072 4.22576C9.72315 2.85626 11.8149 2.0869 13.9963 2.0869L13.9961 2.08708ZM25.3341 16.3441V29.8709V29.8707C25.3341 30.1474 25.2103 30.4125 24.9899 30.6083C24.7694 30.804 24.4708 30.9139 24.1591 30.9139H3.81347C3.50204 30.9139 3.20317 30.804 2.9827 30.6083C2.76252 30.4125 2.63876 30.1474 2.63876 29.8707V16.3439C2.63876 16.0671 2.76251 15.8017 2.9827 15.6062C3.20316 15.4105 3.50203 15.3006 3.81347 15.3006H24.1395C24.4545 15.296 24.7585 15.4037 24.9831 15.5999C25.2076 15.7962 25.3341 16.0642 25.3341 16.3438L25.3341 16.3441Z"
                            fill="currentColor"/>
                    </svg>
                </div>
                <div class="shipping__content">
                    <h2 class="shipping__content--title text-white h3">Payment Secure</h2>
                    <p class="shipping__content--desc">We ensure secure payment</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom--inenr d-flex justify-content-between align-items-center">
                <div class="footer__logo">
                    <a class="footer__logo--link" href="index.html"><img
                            src="{{ asset('site/assets/img/logo/nav-log-light.webp') }}" alt="logo-img"></a>
                </div>
                <p class="copyright__content"><span class="text__secondary">© 2022</span> Powered by <a
                        class="copyright__content--link" target="_blank"
                        href="https://themeforest.net/search/hooktheme">Hooktheme</a> . All Rights Reserved.</p>
                <div class="footer__payment">
                    <img src="{{ asset('site/assets/img/icon/payment-img.webp') }}" alt="payment-img">
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer section -->

<!-- Quickview Wrapper -->
<div class="modal" id="modal1" data-animation="slideInUp">
    <div class="modal-dialog quickview__main--wrapper">
        <header class="modal-header quickview__header">
            <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>✕</button>
        </header>
        <div class="quickview__inner">
            <div class="row row-cols-lg-2 row-cols-md-2">
                <div class="col">
                    <div class="quickview__gallery">
                        <div class="product__media--preview  swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox"
                                           data-gallery="product-media-preview"
                                           href="{{ asset('site/assets/img/product/big-product/product1.webp') }}"><img
                                                class="product__media--preview__items--img"
                                                src="{{ asset('site/assets/img/product/big-product/product1.webp') }}"
                                                alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox"
                                               href="{{ asset('site/assets/img/product/big-product/product1.webp') }}"
                                               data-gallery="product-media-preview">
                                                <svg class="product__items--action__btn--svg"
                                                     xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443"
                                                     viewBox="0 0 512 512">
                                                    <path
                                                        d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32"></path>
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                          stroke-miterlimit="10" stroke-width="32"
                                                          d="M338.29 338.29L448 448"></path>
                                                </svg>
                                                <span class="visually-hidden">product view</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox"
                                           data-gallery="product-media-preview"
                                           href="{{ asset('site/assets/img/product/big-product/product2.webp') }}"><img
                                                class="product__media--preview__items--img"
                                                src="{{ asset('site/assets/img/product/big-product/product2.webp') }}"
                                                alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox"
                                               href="{{ asset('site/assets/img/product/big-product/product2.webp') }}"
                                               data-gallery="product-media-preview">
                                                <svg class="product__items--action__btn--svg"
                                                     xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443"
                                                     viewBox="0 0 512 512">
                                                    <path
                                                        d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32"></path>
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                          stroke-miterlimit="10" stroke-width="32"
                                                          d="M338.29 338.29L448 448"></path>
                                                </svg>
                                                <span class="visually-hidden">product view</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox"
                                           data-gallery="product-media-preview"
                                           href="{{ asset('site/assets/img/product/big-product/product3.webp') }}"><img
                                                class="product__media--preview__items--img"
                                                src="{{ asset('site/assets/img/product/big-product/product3.webp') }}"
                                                alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox"
                                               href="{{ asset('site/assets/img/product/big-product/product3.webp') }}"
                                               data-gallery="product-media-preview">
                                                <svg class="product__items--action__btn--svg"
                                                     xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443"
                                                     viewBox="0 0 512 512">
                                                    <path
                                                        d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32"></path>
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                          stroke-miterlimit="10" stroke-width="32"
                                                          d="M338.29 338.29L448 448"></path>
                                                </svg>
                                                <span class="visually-hidden">product view</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox"
                                           data-gallery="product-media-preview"
                                           href="{{ asset('site/assets/img/product/big-product/product4.webp') }}"><img
                                                class="product__media--preview__items--img"
                                                src="{{ asset('site/assets/img/product/big-product/product4.webp') }}"
                                                alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox"
                                               href="{{ asset('site/assets/img/product/big-product/product4.webp') }}"
                                               data-gallery="product-media-preview">
                                                <svg class="product__items--action__btn--svg"
                                                     xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443"
                                                     viewBox="0 0 512 512">
                                                    <path
                                                        d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32"></path>
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                          stroke-miterlimit="10" stroke-width="32"
                                                          d="M338.29 338.29L448 448"></path>
                                                </svg>
                                                <span class="visually-hidden">product view</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__media--nav swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img"
                                             src="{{ asset('site/assets/img/product/small-product/product1.webp') }}"
                                             alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img"
                                             src="{{ asset('site/assets/img/product/small-product/product2.webp') }}"
                                             alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img"
                                             src="{{ asset('site/assets/img/product/small-product/product3.webp') }}"
                                             alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img"
                                             src="{{ asset('site/assets/img/product/small-product/product3.webp') }}"
                                             alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img"
                                             src="{{ asset('site/assets/img/product/small-product/product4.webp') }}"
                                             alt="product-nav-img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper__nav--btn swiper-button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class=" -chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                            <div class="swiper__nav--btn swiper-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class=" -chevron-left">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="quickview__info">
                        <form action="#">
                            <h2 class="product__details--info__title mb-10">Amazon Cloud Cam Security</h2>
                            <div class="product__card--price mb-10">
                                <span class="current__price">$239.52</span>
                                <span class="old__price"> $362.00</span>
                            </div>
                            <ul class="rating product__card--rating d-flex">
                                <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                fill="currentColor"></path>
                                            </svg>
                                        </span>
                                </li>
                                <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                fill="currentColor"></path>
                                            </svg>
                                        </span>
                                </li>
                                <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z"
                                                fill="currentColor"></path>
                                            </svg>
                                        </span>
                                </li>
                                <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                    fill="currentColor"></path>
                                             </svg>
                                        </span>
                                </li>
                                <li class="rating__list">
                                        <span class="rating__icon">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z"
                                                    fill="currentColor"></path>
                                             </svg>
                                        </span>
                                </li>
                                <li>
                                    <span class="rating__review--text">(106) Review</span>
                                </li>
                            </ul>
                            <p class="product__details--info__desc mb-10">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit is. Deserunt totam dolores ea numquam labore!.</p>
                            <div class="product__variant">
                                <div class="product__variant--list mb-10">
                                    <fieldset class="variant__input--fieldset">
                                        <legend class="product__variant--title mb-8">Color :</legend>
                                        <div class="variant__color d-flex">
                                            <div class="variant__color--list">
                                                <input id="color-red1" name="color" type="radio" checked>
                                                <label class="variant__color--value red" for="color-red1"
                                                       title="Red"><img class="variant__color--value__img"
                                                                        src="{{ asset('site/assets/img/product/small-product/product1.webp') }}"
                                                                        alt="variant-color-img"></label>
                                            </div>
                                            <div class="variant__color--list">
                                                <input id="color-red2" name="color" type="radio">
                                                <label class="variant__color--value red" for="color-red2" title="Black"><img
                                                        class="variant__color--value__img"
                                                        src="{{ asset('site/assets/img/product/small-product/product2.webp') }}"
                                                        alt="variant-color-img"></label>
                                            </div>
                                            <div class="variant__color--list">
                                                <input id="color-red3" name="color" type="radio">
                                                <label class="variant__color--value red" for="color-red3"
                                                       title="Pink"><img class="variant__color--value__img"
                                                                         src="{{ asset('site/assets/img/product/small-product/product3.webp') }}"
                                                                         alt="variant-color-img"></label>
                                            </div>
                                            <div class="variant__color--list">
                                                <input id="color-red4" name="color" type="radio">
                                                <label class="variant__color--value red" for="color-red4"
                                                       title="Orange"><img class="variant__color--value__img"
                                                                           src="{{ asset('site/assets/img/product/small-product/product4.webp') }}"
                                                                           alt="variant-color-img"></label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="product__variant--list mb-15">
                                    <fieldset class="variant__input--fieldset">
                                        <legend class="product__variant--title mb-8">Weight :</legend>
                                        <ul class="variant__size d-flex">
                                            <li class="variant__size--list">
                                                <input id="weight1" name="weight" type="radio" checked>
                                                <label class="variant__size--value red" for="weight1">5 kg</label>
                                            </li>
                                            <li class="variant__size--list">
                                                <input id="weight2" name="weight" type="radio">
                                                <label class="variant__size--value red" for="weight2">3 kg</label>
                                            </li>
                                            <li class="variant__size--list">
                                                <input id="weight3" name="weight" type="radio">
                                                <label class="variant__size--value red" for="weight3">2 kg</label>
                                            </li>
                                        </ul>
                                    </fieldset>
                                </div>
                                <div class="quickview__variant--list quantity d-flex align-items-center mb-10">
                                    <div class="quantity__box">
                                        <button type="button"
                                                class="quantity__value quickview__value--quantity decrease"
                                                aria-label="quantity value" value="Decrease Value">-
                                        </button>
                                        <label>
                                            <input type="number" class="quantity__number quickview__value--number"
                                                   value="1" data-counter/>
                                        </label>
                                        <button type="button"
                                                class="quantity__value quickview__value--quantity increase"
                                                aria-label="quantity value" value="Increase Value">+
                                        </button>
                                    </div>
                                    <button class="primary__btn quickview__cart--btn" type="submit">Add To Cart</button>
                                </div>
                                <div class="quickview__variant--list variant__wishlist mb-10">
                                    <a class="variant__wishlist--icon" href="wishlist.html" title="Add to wishlist">
                                        <svg class="quickview__variant--wishlist__svg"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32"/>
                                        </svg>
                                        Add to Wishlist
                                    </a>
                                </div>
                            </div>
                            <div class="quickview__social d-flex align-items-center">
                                <label class="quickview__social--title">Social Share:</label>
                                <ul class="quickview__social--wrapper mt-0 d-flex">
                                    <li class="quickview__social--list">
                                        <a class="quickview__social--icon" target="_blank"
                                           href="https://www.facebook.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524"
                                                 viewBox="0 0 7.667 16.524">
                                                <path data-name="Path 237"
                                                      d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z"
                                                      transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Facebook</span>
                                        </a>
                                    </li>
                                    <li class="quickview__social--list">
                                        <a class="quickview__social--icon" target="_blank" href="https://twitter.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384"
                                                 viewBox="0 0 16.489 13.384">
                                                <path data-name="Path 303"
                                                      d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z"
                                                      transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Twitter</span>
                                        </a>
                                    </li>
                                    <li class="quickview__social--list">
                                        <a class="quickview__social--icon" target="_blank"
                                           href="https://www.instagram.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492"
                                                 viewBox="0 0 19.497 19.492">
                                                <path data-name="Icon awesome-instagram"
                                                      d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z"
                                                      transform="translate(0.004 -1.492)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Instagram</span>
                                        </a>
                                    </li>
                                    <li class="quickview__social--list">
                                        <a class="quickview__social--icon" target="_blank"
                                           href="https://www.youtube.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582"
                                                 viewBox="0 0 16.49 11.582">
                                                <path data-name="Path 321"
                                                      d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z"
                                                      transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Youtube</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quickview Wrapper End -->

<!-- Start News letter popup -->
<div class="newsletter__popup" data-animation="slideInUp">
    <div id="boxes" class="newsletter__popup--inner">
        <button class="newsletter__popup--close__btn" aria-label="search close button">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
            </svg>
        </button>
        <div class="box newsletter__popup--box d-flex align-items-center">
            <div class="newsletter__popup--thumbnail">
                <img class="newsletter__popup--thumbnail__img display-block"
                     src="{{ asset('site/assets/img/banner/newsletter-popup-thumb2.webp') }}"
                     alt="newsletter-popup-thumb">
            </div>
            <div class="newsletter__popup--box__right">
                <h2 class="newsletter__popup--title">Join Our Newsletter</h2>
                <div class="newsletter__popup--content">
                    <label class="newsletter__popup--content--desc">Enter your email address to subscribe our
                        notification of our new post &amp; features by email.</label>
                    <div class="newsletter__popup--subscribe" id="frm_subscribe">
                        <form class="newsletter__popup--subscribe__form">
                            <input class="newsletter__popup--subscribe__input" type="text"
                                   placeholder="Enter you email address here...">
                            <button class="newsletter__popup--subscribe__btn">Subscribe</button>
                        </form>
                        <div class="newsletter__popup--footer">
                            <input type="checkbox" id="newsletter__dont--show">
                            <label class="newsletter__popup--dontshow__again--text" for="newsletter__dont--show">Don't
                                show this popup again</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End News letter popup -->

<!-- Scroll top bar -->
<button id="scroll__top">
    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48"
              d="M112 244l144-144 144 144M256 120v292"/>
    </svg>
</button>

<!-- All Script JS Plugins here  -->
<script src="{{ asset('site/assets/js/vendor/popper.js') }}" defer="defer"></script>
<script src="{{ asset('site/assets/js/vendor/bootstrap.min.js') }}" defer="defer"></script>
<script src="{{ asset('site/assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('site/assets/js/plugins/glightbox.min.js') }}"></script>

<!-- Custom script js -->
<script src="{{ asset('site/assets/js/script.js') }}"></script>
</body>
</html>
