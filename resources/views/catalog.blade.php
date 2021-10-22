<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/catalos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">
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
                {{ $category->name }}
            </h1>
            @if ($category_list)
            <div class="product__items">
                <div class="container-b">

                @foreach ($category_list as $id => $category_item)
                    <div class="product__item row">

                    @foreach ($category_item as $key => $photo)
                    <div class="col-6 col-lg-3">
                        <img class="product__image img-fluid" src="{{ asset('uploads/' . $photo) }}" onclick="showModal(this)" id="myImg" alt="Catalog Photo">
                            <!-- <p class="product__size"></p> -->
                        </div>
                    @endforeach
                    </div>
                @endforeach
                </div>
            </div>
            @else
            <h2 class="product__title" style="color: #FF6C52;">No photos yet</h2>   
            @endif
        </div> 
    </div>
    <div id="myModal" onclick="closeModal()" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="closeModal()">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img-modal">

        <!-- Modal Caption (Image Text) -->
        <!-- <div id="caption"></div> -->
    </div>

    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("img-modal");
        var captionText = document.getElementById("caption");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        function showModal (el) {
            el.onclick = function(){
                modal.style.display = "block";
                modalImg.src = this.src;
                // captionText.innerHTML = this.alt;
            }
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        function closeModal () {
            modal.style.display = "none";
        }
    </script>
</body>
</html>