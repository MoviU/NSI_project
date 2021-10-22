<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ mix('css/all.css') }}">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>NSI</title>
</head>
<body>
            <header class="header">
                <div class="header-container container">
                    <nav class="header__menu" id="menu">
                        <a href="" class="header__logo">
                            <img src="{{ asset('img/logo.svg') }}" alt="">
                        </a>
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a href="#tab_2" class="menu__link">About</a>
                            </li>
                            <li class="menu__item">
                                <a href="#tab_3" class="menu__link">Contact</a>
                            </li>
                            <li class="menu__item">
                                <a href="{{ url('form/create') }}" class="menu__link">Order design</a>
                            </li>
                        </ul>
                    </nav>
                    <section class="header-block__row"> 
                        <div class="header-block__search">
                            <div class="search__block">
                                <form action="">
                                    <input type="text" placeholder="search">
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                                <img src="{{ asset('img/line.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="header-block__burger-menu">
                            <img src="{{ asset('img/menu_burger.svg') }}" alt="">
                        </div>
                    </section>
                </div>
            </header>
