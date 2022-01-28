    
@extends('main.main')

@section('main')
    
        
        <!-- Start Jumbotron -->
        <section class="bg-warning">
          <div class="about-us ms-5">
            <h2 style="font-family: 'Fjalla One', sans-serif;">Buku Explore</h2>
            <p style="font-family: 'Fjalla One', sans-serif;">Are you looking for a new Book? Then you've come to the right place.</p>
          </div>
            <div class="image-wrapper">
            <img src="/assets/image/jumbtron-img/anastasia-zhenina-XOW1WqrWNKg-unsplash.jpg"/>
          </div>
        </section>
        <!-- End Jumbotron -->


        <div class="home-body">
          <div class="home-main">
            <div class="container">
              <div class="about-us-body d-flex justify-content-center mx-3 mt-4 mb-4 effect">
                <div class="left-about mt-1">
                  <h3>About Us</h3>
                  <hr class="mb-3">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem vel blanditiis error, itaque fuga corrupti iure perferendis quo deserunt corporis dolor maxime, facilis natus dicta quibusdam hic minima distinctio. Quis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit exercitationem obcaecati atque, sunt impedit minima perspiciatis inventore, sapiente quibusdam, ut ducimus esse ullam possimus voluptates quidem voluptatibus aliquam alias.</p>
                </div>
                <div class="right-about ms-4">
                  <img src="/assets/image/about-us-img/about-us-img.svg" alt="about us image" title="about us image">
                </div>
              </div>
              <div class="about-us-body2 effect">
                <div class="about-us-main2 d-flex text-center">
                  <div class="about-list">
                    <h3>Lengkap</h3>
                    <i class="bi bi-list-check"></i>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro amet obcaecati sed veniam optio assumenda beatae harum commodi est.</p>
                  </div>
                  <div class="about-list mx-5">
                    <h3>Terjangkau</h3>
                    <i class="bi bi-piggy-bank"></i></i>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro amet obcaecati sed veniam optio assumenda beatae harum commodi est.</p>
                  </div>
                  <div class="about-list">
                    <h3>Terpercaya</h3>
                    <i class="bi bi-hand-index-thumb"></i></i>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro amet obcaecati sed veniam optio assumenda beatae harum commodi est.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="our-product bg-warning">
              <div class="our-product-main">
                <div class="our-product-title mb-5">
                  <h2>Featured Product</h2>
                  <hr>
                </div>
                <div class="container">
                  <div class="our-product-image mt-5 d-flex justify-content-center row row-cols-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                    <img class="m-4" src="/assets/image/our-product-img/antologi.jpg" alt="our product image" title="product image">
                    <img class="m-4" src="/assets/image/our-product-img/biografi.jpg" alt="our product image" title="product image">
                    <img class="m-4" src="/assets/image/our-product-img/novel.jpg" alt="our product image" title="product image">
                    <img class="m-4" src="/assets/image/our-product-img/manga.jpg" alt="our product image" title="product image">
                    <img class="m-4" src="/assets/image/our-product-img/ensiklopedia.jpg" alt="our product image" title="product image">
                    <img class="m-4" src="/assets/image/our-product-img/cergam.jpg" alt="our product image" title="product image">
                  </div>
                  <form action="/all-product" class="go-all-product" id="go-all-product">
                    @csrf
                    <button class="button-go-all-product learn-more">
                      <span class="circle" aria-hidden="true">
                      <span class="icon arrow"></span>
                      </span>
                      <span class="button-text">Get Started</span>
                    </button>
                  </form>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- End Book List "Paling Populer" -->

@endsection