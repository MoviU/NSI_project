<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/form-style.css') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSI</title>
</head>
<body>
    <div class="form-wrapper">
        <div class="form-nav">
            <div class="form-logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.svg') }}" alt="">
                </a>               
            </div>
            <div class="form-lang">
                <img src="{{ asset('img/uk.svg') }}" alt="">
            </div>
        </div>
        <div class="form-content">
            <div class="form-block">
                <div class="form-title">
                    <div class="form-subtitle">
                        Do you want to order an individual design?
                    </div>
                    <div class="form-text">
                        Fill out the form and we will contact you
                    </div>
                </div>
                <div class="form__item">
                   
                    <form class="items__form" id="orderForm" action="{{ url('/form/store') }}" method="post">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        {{ csrf_field() }}
                        <div class="form__row">
                            <input placeholder="Name*" name="username" type="text" required>
                        </div>
                        <div class="">
                            <input placeholder="Number telephone*" name="userphone" type="tel" required>
                        </div>
                        <div class="">
                            <input placeholder="Email" name="usermail" type="email">
                        </div>
                        <div class="">
                            <input placeholder="Your city or region" name="useradress" type="text">
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-button">
                <a href="sendform.html">
                    <button type="submit" form="orderForm">
                        send
                    </button>
                </a>
            </div>
        </div> 
    </div>
</body>
</html>