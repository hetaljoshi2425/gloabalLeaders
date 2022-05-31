<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Globallleaders</title>
</head>
<body>
    <div class="">
        {{-- Sidebar --}}
        <div class="menu-holder-front">
            <div class="header-logo">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" />
                </a>
            </div>
            <!-- <div class="toggle-holder">
                <div id="toggle" class="all-loaded">
                    <div class="menu-line"></div>
                </div>
            </div> -->
        </div>
        <div class="menu-holder-back">
            <div class="menu-wrapper-back">
                <nav
                    id="header-main-menu"
                    class="big-menu">
                    <ul
                        id="menu-menu-1"
                        class="main-menu sm sm-clean"
                    >
                        <li
                            id="menu-item-55"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-12 current_page_item menu-item-55"
                        >
                            <a
                                href="/"
                                class="current"
                            >
                                Home
                            </a>
                            <span class="menu-num">01</span>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        {{-- ... --}}

        {{-- Main Content --}}
        <div class="site-content hidden">
            <div id="portfolio-wrapper">
                @yield('content')
            </div>
        </div>
        {{-- ... --}}
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('js/jquery.smartmenus.min.js') }}"></script>
<script src="{{ asset('js/jquery.fitvids.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</html>