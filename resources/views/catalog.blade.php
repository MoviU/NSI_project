<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/catalos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSI</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
        <header class="header">
            <div class="header__logo">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('img/logo.svg') }}" alt="">
                </a>               
            </div>
            <div class="header__lang">
                <img src="{{ asset('img/uk.svg') }}" alt="">
            </div>
        </header>
        <div class="catalog__product">
            <h1 class="product__title">
                Pilasters
            </h1>
            <div class="product__items">
                <div class="product__item">
                    <img class="product__image" src="{{ asset('img/catalog_1_1.svg') }}" alt="">
                    <p class="product__size"></p>
                </div>
                <div class="product__item">
                    <img class="product__image" src="{{ asset('img/catalog_1_2.svg') }}" alt="">
                    <p class="product__size"></p>
                </div>
                
            </div>   
        </div> 
    </div>
    </div>
</body>
</html>