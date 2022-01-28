<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Slider CSS -->
    <link rel="stylesheet" href="/assets/css/lightslider.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/01786058e6.js" crossorigin="anonymous"></script>

    <title>Buku Explore | {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="/assets/image/icon-logo/book-stack.png">
    

    <style>
      body {
        overflow-x: hidden;
        background-color: white;
      }
      
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>
<body>
    <!-- Start Loader -->

    <div class="spinner">
      <img src="/assets/image/spinner-gif/spinner-loader.gif">
    </div>

    <!-- End Loader -->
    
    @include('main.part.navbar')

        @yield('main')  

    @include('main.part.footer')


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- Slider JS -->
    <script src="/assets/js/lightslider.js"></script>

    <!-- Boostrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- My Javascript -->
    <script src="/assets/js/script.js"></script>

    <script src="/assets/js/sweetalert2.all.min.js"></script>


    <!-- Ionicon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  </body>
  </html>    