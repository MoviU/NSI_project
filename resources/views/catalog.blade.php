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
            @if ($category_smooth && $category_list)

                    <div class="tag__li">
                        <div class="">
                            <a href="#" id="tag_1" onclick="tagChange(this)" class="catalog__tag active">
                                With pattern
                            </a>
                        </div>
                        <div class="">
                            <a href="#" id="tag_2" onclick="tagChange(this)" class="catalog__tag">
                                Smooth
                            </a>
                        </div>
                    </div>

            @endif
            @if ($category_list)
            <div class="product__items">
                <div class="container-b" id="pattern">

                @foreach ($category_list as $id => $category_item)
                    <div class="product__item row">

                    @foreach ($category_item as $key => $photo)
                    <div class="col-12 col-md-6 col-lg-3">
                        <img class="img-fluid" src="{{ asset('uploads/' . $photo) }}" onclick="showModal(this)" id="myImg" alt="Catalog Photo">
                            <!-- <p class="product__size"></p> -->
                        </div>
                    @endforeach
                    </div>
                @endforeach
                </div>
            </div>
            @endif

            @if ($category_smooth)
            <div class="product__items">
                <div class="container-b" id="smooth">

                @foreach ($category_smooth as $id => $category_item)
                    <div class="product__item row">

                    @foreach ($category_item as $key => $photo)
                    <div class="col-12 col-md-6 col-lg-3">
                        <img class="img-fluid" src="{{ asset('uploads/' . $photo) }}" onclick="showModal(this)" id="myImg" alt="Catalog Photo">
                            <!-- <p class="product__size"></p> -->
                        </div>
                    @endforeach
                    </div>
                @endforeach
                </div>
            </div>
            @endif

            @if(!$category_list && !$category_smooth)
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

    @if($category_list) 
        <script>
            document.getElementById('smooth').hidden = true;
        </script>
    @endif

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

       function tagChange (el) {
            if (el.id == 'tag_1') {
                document.getElementById('tag_2').classList.remove('active');
                el.classList.add('active');
                document.getElementById('pattern').hidden = false;
                document.getElementById('smooth').hidden = true;
            } else if (el.id == 'tag_2') {
                document.getElementById('tag_1').classList.remove('active');
                el.classList.add('active');
                document.getElementById('pattern').hidden = true;
                document.getElementById('smooth').hidden = false;
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