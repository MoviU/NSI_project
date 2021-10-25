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
<div class="wrapper">

        @yield('content')

        @show

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/scrolify.js') }}"></script>
    <script>
    $(function() {
          $.scrollify({
            section : ".slide",
            sectionName : "section-name",
            overflowScroll: false,
            touchScroll: false,
            updateHash: false
          });
        });
    </script>
    <script>

        function addActive (el) {
            for (i = 1; i <= 8;) {
                var id = '0' + i;
                var tab_id = 'tab_0' + i;

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
        window.pages = ["#main", "#tab_1", "#tab_2", "#tab_3"];
        window.i = 1;
            function goDown () {
            // var id = window.pages[window.i];

            // var top = $(id).offset().top;

            // $('body,html').animate({scrollTop: top}, 1500);

            // window.i++;

            // if (window.i > 3) {
            //     window.i = 0;
            // }
            // if ($.scrollify.currentIndex() == 3) {
            //     $.scrollify.move("#main");
            // }
            $.scrollify.next();
            if (!$.scrollify.current()) {
                $.scrollify.move("#main");
            }
        }  
        
    </script>
</body>
</html>