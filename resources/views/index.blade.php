<div class="wrapper">
<!---------------------------- PAGE 1 -------------------------------------->
        <div class="main-page">
            @include('components.header')
            <main class="page" id="main">
                <div class="main-block__body container">
                    <div class="main-block__title">
                        Hello! We are NSI.
                        And we do gypsum stucco.
                    </div>
                    <div class="main-block__subtitle">
                        We will create a exquisite interior and comfort in your home
                    </div>
                    <div class="main-block__button" id="menu3">
                        <a class="main-block__button-catalog clickable" href="#tab_1">
                          Catalog    
                        </a>
                    </div>
                    <div class="main-block__text">
                        On this site you can:
                    </div>
                    <div class="main-block__image">
                        <img class="image-1" src="{{ asset('img/1.svg') }}" alt="">
                        <img class="overlay" src="{{ asset('img/rectangle.svg') }}" alt="">
                    </div>
                </div>
            </main>
            <section class="section__content container" id="menu2">
                <div class="content__link">
                    <a class="link__button clickable" href="#tab_2">
                        Learn about us
                    </a>
                </div>
                <div class="content__link">
                    <a class="link__button clickable" href="#tab_3">
                        Contact us
                    </a>
                </div>
                <div class="content__link">
                    <a class="link__button" href="{{ url('form/create') }}">
                        Order a design
                    </a>
                </div>  
            </section>
            <aside class="sidebar">
                <img class="lang" src="{{ asset('img/uk.svg') }}" alt="">
                <div onclick="goDown()">
                    <img class="control" src="{{ asset('img/arrow.svg') }}" alt="">  
                </div>
            </aside>
        </div>
<!------------------------------ PAGE 2 -------------------------------------->
       <div id="tab_1" class="catalog-page container">
        <section class="catalog-header">
            <a href="index.html" class="catalog-header__logo">
                <img src="{{ asset('img/logo.svg') }}" alt="">
            </a>
            <nav class="catalog-header__title">
                <h1>
                    Catalog
                </h1>
                <div class="catalog-header__burger"></div>
            </nav>
            <div class="catalog-header__search">
                <form action="">
                    <input type="text" placeholder="search">
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <img src="{{ asset('img/line.svg') }}" alt="">
            </div>
        </section>
        
        <main class="catalog-main">
            <section class="catalog-main__content d-md-none">
                <div class="catalog-content">
                    <ul class="catalog-content__list">
                        @foreach ($categories as $id => $category)
                        <li>
                            <a onclick="addActive('0{{ $id + 1 }}')" class="tabs__item"><p id="0{{ $id + 1 }}" style="cursor: pointer;" class=" {{ $id == 0 ? 'active' : '' }}">{{ $category->name }}</p></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tabs__body">
                    <img id="tab_01" class="tabs__block active-photo" src="{{ asset('img/01.svg') }}" alt="">
                    <img id="tab_02" class="tabs__block" src="{{ asset('img/02.svg') }}" alt="">
                    <img id="tab_03" class="tabs__block" src="{{ asset('img/03.svg') }}" alt="">
                    <img id="tab_04" class="tabs__block" src="{{ asset('img/04.svg') }}" alt="">
                    <img id="tab_05" class="tabs__block" src="{{ asset('img/05.svg') }}" alt="">
                    <img id="tab_06" class="tabs__block" src="{{ asset('img/06.svg') }}" alt="">
                    <img id="tab_07" class="tabs__block" src="{{ asset('img/07.svg') }}" alt="">
                    <img id="tab_08" class="tabs__block" src="{{ asset('img/08.svg') }}" alt="">
                </div>
            </section>

            <!-- Small Catalog slider -->
            <section class="catalog-main__content d-md-block">
                <div class="catalog-content">
                    <ul class="catalog-content__list slider slider-nav">
                        @foreach ($categories as $id => $category)
                        <li>
                            <a class="tabs__item"><p id="0{{ $id + 1 }}" class=" {{ $id == 0 ? 'active' : '' }}">{{ $category->name }}</p></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tabs__body">
                    <img id="tab_01" class="tabs__block active-photo" src="{{ asset('img/01.svg') }}" alt="">
                    <img id="tab_02" class="tabs__block" src="{{ asset('img/02.svg') }}" alt="">
                    <img id="tab_03" class="tabs__block" src="{{ asset('img/03.svg') }}" alt="">
                    <img id="tab_04" class="tabs__block" src="{{ asset('img/04.svg') }}" alt="">
                    <img id="tab_05" class="tabs__block" src="{{ asset('img/05.svg') }}" alt="">
                    <img id="tab_06" class="tabs__block" src="{{ asset('img/06.svg') }}" alt="">
                    <img id="tab_07" class="tabs__block" src="{{ asset('img/07.svg') }}" alt="">
                    <img id="tab_08" class="tabs__block" src="{{ asset('img/08.svg') }}" alt="">
                </div>
            </section>
            
        </main>

        <section class="catalog-section__content">
            <div class="catalog-content__link">
                <a href="/catalog/Pilasters" id="view-link">View now</a>
            </div>
        </section>
       </div>
<!------------------------------ PAGE 3 ------------------------------------->
        <div id="tab_2" class="about-wrapper container">
            <div class="about-bg">
                <img src="{{ asset('img/about_header.svg') }}" alt="">
            </div>
            <div class="about-header">
                <div class="about-header__logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('img/logo.svg') }}" alt="NSI">
                    </a>
                </div>
                <div class="about-header__title">
                    <h1>
                        About us
                    </h1>
                    <div class="about-header__line">
                        <img src="{{ asset('img/about_line.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <main class="about-main">
                <div class="about-content">
                    <section class="about-content__about about">
                        <div class="about__icon">
                            <img src="{{ asset('img/2_1.svg') }}" alt="">
                        </div>
                        <div class="about__item">
                            Services 
                        </div>
                         <div class="about__list">
                            <ul class="list-1">
                                <li>Interior design</li>
                                <li>modeling</li>
                                <li>installation</li>
                                <li>coloring</li>
                            </ul>
                        </div>
                    </section>
                    <section class="about-content__about">
                        <div class="about__icon">
                            <img src="{{ asset('img/2_2.svg') }}" alt="">
                        </div>
                        <div class="about__item">
                            Style 
                        </div>
                        <div class="about__list">
                            <ul class="list-2">
                                <li>baroque</li>
                                <li>rococo</li>
                                <li>gothic</li>
                                <li>roman</li>
                                <li>greek</li>
                                <li>modern</li>
                            </ul>
                        </div>
                    </section>
                    <section class="about-content__about">
                        <div class="about__icon">
                            <img src="{{ asset('img/2_3.svg') }}" alt="">
                        </div>
                        <div class="about__item">
                            Materials 
                        </div>
                        <div class="about__list">
                            <ul class="list-3">
                                <li>gypsum</li>
                                <li>wood</li>
                            </ul>
                        </div>
                    </section>
                    <section class="about-content__about">
                        <div class="about__icon">
                            <img src="{{ asset('img/2_4.svg') }}" alt="">
                        </div>
                        <div class="about__item">
                            Experience 
                        </div>
                        <div class="about__list">
                            <p>
                                We have extensive experience in European countries.
                            </p>
                        </div>
                    </section>
                </div>
            </main>
        </div>
<!-------------------------------- PAGE 4 ------------------------------------------>
        <div id="tab_3" class="contact container">
            <header class="header__contact">
                <div class="contact__logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('img/logo.svg') }}" alt="NSI">
                    </a>
                </div>
            </header>
            <main class="content__contact">
                <div class="contact-map">
                    <img src="{{ asset('img/Group.svg') }}" alt="map">
                </div>
                <div class="block__contact">
                    <div class="contact__item">
                        How to contact us?
                    </div>
                    <div class="contact__list">
                        <ul>
                            <li>
                                <a href="tel:+13062274471">
                                    <img src="{{ asset('img/contact_1.svg') }}" alt="telephone">
                                    +13062274471
                                </a> 
                            </li>
                            <li>
                                <a href="https://instagram.com/nsi.design?utm_medium=copy_link" target="_blank">
                                    <img src="{{ asset('img/contact_2.svg') }}" alt="Instagram">
                                    @nsi.design
                                </a>
                            </li>
                            <li>
                                <a href="mailto:nsinterior752@gmail.com">
                                    <img src="{{ asset('img/contact_3.svg') }}" alt="email" target="_blank"> 
                                    nsinterior752@gmail.com
                                </a>  
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('img/contact_4.svg') }}" alt="Facebook" target="_blank">
                                    NSI
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block__contact">
                    <div class="contact__item">
                        Where are we?
                    </div>
                    <div class="title-2">
                        <p>
                            Where are we?
                        </p>
                    </div>
                    <div class="contact__list-map">
                        <div class="list-map__icon">
                            <a href="https://goo.gl/maps/p44Y5tSD65qKxFmQ8" target="_blank">
                                <img src="{{ asset('img/contact_5.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="list-map__adress">
                            <a href="https://goo.gl/maps/p44Y5tSD65qKxFmQ8" target="_blank">
                                Canada <br>
                                Saskatchewan province <br>
                                Saskatoon city
                            </a>
                        </div>
                        <div class="map-adress">
                            <img src="{{ asset('img/Group.svg') }}" alt="map">
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <script>
        function addActive (el) {
            for (i = 1; i <= 8;) {
                var id = '0' + i;
                var tab_id = 'tab_0' + i;
                console.log(id);

                var actived = document.getElementById(id);   
                if (actived.classList.contains('active')) {
                    actived.classList.remove('active');
                }
                var actived_photot = document.getElementById(tab_id);   
                if (actived_photot.classList.contains('active-photo')) {
                    actived_photot.classList.remove('active-photo');
                }
                i++;
            }
            var btn = document.getElementById(el);
            btn.classList.add("active");
            var photo = document.getElementById("tab_" + el);
            photo.classList.add("active-photo");
            document.getElementById('view-link').href = '/catalog/' + btn.innerHTML;
        }
        
        $(document).ready(function(){
            $("#menu").on("click","a", function (event) {
                //отменяем стандартную обработку нажатия по ссылке
                event.preventDefault();

                //забираем идентификатор бока с атрибута href
                var id = $(this).attr('href'),

                //узнаем высоту от начала страницы до блока на который ссылается якорь
                top = $(id).offset().top;

                //анимируем переход на расстояние - top за 1500 мс
                $('body,html').animate({scrollTop: top}, 1500);
            });
        });
        $(document).ready(function(){
            $("#menu2").on("click",".clickable", function (event) {
                //отменяем стандартную обработку нажатия по ссылке
                event.preventDefault();

                //забираем идентификатор бока с атрибута href
                var id = $(this).attr('href'),

                //узнаем высоту от начала страницы до блока на который ссылается якорь
                top = $(id).offset().top;

                //анимируем переход на расстояние - top за 1500 мс
                $('body,html').animate({scrollTop: top}, 1500);
            });
        });
        $(document).ready(function(){
            $("#menu3").on("click",".clickable", function (event) {
                //отменяем стандартную обработку нажатия по ссылке
                event.preventDefault();

                //забираем идентификатор бока с атрибута href
                var id = $(this).attr('href'),

                //узнаем высоту от начала страницы до блока на который ссылается якорь
                top = $(id).offset().top;

                //анимируем переход на расстояние - top за 1500 мс
                $('body,html').animate({scrollTop: top}, 1500);
            });
        });
        var pages = ["#tab_1", "#tab_2", "#tab_3"];
        window.i = 0;
        function goDown () {
            var id = pages[window.i];

            top = $(id).offset().top
            console.log(top);

            $('body,html').animate({scrollTop: top}, 1500);

            window.i++;

            if (window.i > 2) {
                window.i = 0;
            }
        }
    </script>
</body>
</html>