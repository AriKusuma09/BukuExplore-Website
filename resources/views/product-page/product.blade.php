@extends('main.main')

@section('main') 


      <div class="container main-page">
          <div class="d-flex justify-content-center" style="margin-top: 140px; margin-bottom: 140px;">
              <div class="left-main me-2">
                <div class="product-image">
                  <img src="/assets/image/category-img/novel.png" alt="product image" title="product image" class="product-img">
                </div>
              </div>

              <div class="right-main">
                <div class="title-product">
                  <h1>Novel Lock Down | Asa Cinta & Zahira</h1>
                </div>
                  <div class="rating-sold d-flex">
                    <div class="rating d-flex me-4" style="font-size: 1.2rem; ">
                      <p>4.0</p>
                      <div class="star ms-2">
                        <span style="color: gold;" class="fa fa-star checked"></span>
                        <span style="color: gold;" class="fa fa-star checked"></span>
                        <span style="color: gold;" class="fa fa-star checked"></span>
                        <span style="color: gold;" class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                      </div>
                    </div>
                    <div class="sold">
                      <p class="fs-5 ms-4" style="font-family: 'Fjalla One', sans-serif;"><span>45</span> terjual</p>
                    </div>
                  </div>
                <div class="description mt-4">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit esse accusantium quia laboriosam adipisci sapiente inventore, consequuntur libero aut, natus quibusdam explicabo saepe aliquam, officia tempora incidunt nesciunt quae eos.</p>
                </div>
                <div class="d-flex mt-4">
                  <div class="quantity me-5">
                    <button class="minus-btn disabled" type="button"><ion-icon name="remove-outline"></ion-icon></button>
                    <input class="mx-2" type="text" id="quantity" value="1">
                    <button class="plus-btn" type="button"><ion-icon name="add-outline"></ion-icon></button>
                  </div>
                  <div class="stok">
                    <h4 class="ms-3">Stok : <span>37</span></h4>
                  </div>
                </div>
                <div class="price mt-3">
                  <h1>Rp <span>237.000</span></h1>
                </div>
                <div class="add-cart-buy d-flex">
                  <div class="add-cart me-2">
                    <a href="" class="add-cart-btn"><ion-icon name="add-circle-outline"></ion-icon> Tambahkan ke Keranjang</a>
                  </div>
                  <div class="buy ms-2">
                    <a href="" class="buy-button"><i class="bi bi-bag-fill"></i> Beli Sekarang</a>
                  </div>
                </div>
              </div>
          </div>

          <div class="pemisah my-5"><hr class="pemisah-top-bottom"></div>

          <!-- Swiper -->
          <div class="lainnya">
            <h2>Lainnya</h2>
            <hr>
          </div>
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card mx-2 my-4 shadow" style="width: 15rem;">
                  <a href="../product-page/product.html">
                    <img class="card-img-top" src="/assets/image/our-product-img/novel.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title mb-2">Novel Laskar Pelangi</h5>
                  </div>
                  <div class="price-sold d-flex justify-content-between">
                    <h6 class="ms-3 price">Rp. <span class="price-span">56000</span></h6>
                    <h6 class="me-2 sold"><span class="sold-span">56</span> Terjual</h6>
                  </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card mx-2 my-4 shadow" style="width: 15rem;">
                  <a href="../product-page/product.html">
                    <img class="card-img-top" src="/assets/image/our-product-img/novel.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title mb-2">Novel Laskar Pelangi</h5>
                  </div>
                  <div class="price-sold d-flex justify-content-between">
                    <h6 class="ms-3 price">Rp. <span class="price-span">56000</span></h6>
                    <h6 class="me-2 sold"><span class="sold-span">56</span> Terjual</h6>
                  </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card mx-2 my-4 shadow" style="width: 15rem;">
                  <a href="../product-page/product.html">
                    <img class="card-img-top" src="/assets/image/our-product-img/novel.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title mb-2">Novel Laskar Pelangi</h5>
                  </div>
                  <div class="price-sold d-flex justify-content-between">
                    <h6 class="ms-3 price">Rp. <span class="price-span">56000</span></h6>
                    <h6 class="me-2 sold"><span class="sold-span">56</span> Terjual</h6>
                  </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card mx-2 my-4 shadow" style="width: 15rem;">
                  <a href="../product-page/product.html">
                    <img class="card-img-top" src="/assets/image/our-product-img/novel.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title mb-2">Novel Laskar Pelangi</h5>
                  </div>
                  <div class="price-sold d-flex justify-content-between">
                    <h6 class="ms-3 price">Rp. <span class="price-span">56000</span></h6>
                    <h6 class="me-2 sold"><span class="sold-span">56</span> Terjual</h6>
                  </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card mx-2 my-4 shadow" style="width: 15rem;">
                  <a href="../product-page/product.html">
                    <img class="card-img-top" src="/assets/image/our-product-img/novel.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title mb-2">Novel Laskar Pelangi</h5>
                  </div>
                  <div class="price-sold d-flex justify-content-between">
                    <h6 class="ms-3 price">Rp. <span class="price-span">56000</span></h6>
                    <h6 class="me-2 sold"><span class="sold-span">56</span> Terjual</h6>
                  </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card mx-2 my-4 shadow" style="width: 15rem;">
                  <a href="../product-page/product.html">
                    <img class="card-img-top" src="/assets/image/our-product-img/novel.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title mb-2">Novel Laskar Pelangi</h5>
                  </div>
                  <div class="price-sold d-flex justify-content-between">
                    <h6 class="ms-3 price">Rp. <span class="price-span">56000</span></h6>
                    <h6 class="me-2 sold"><span class="sold-span">56</span> Terjual</h6>
                  </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card mx-2 my-4 shadow" style="width: 15rem;">
                  <a href="../product-page/product.html">
                    <img class="card-img-top" src="/assets/image/our-product-img/novel.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title mb-2">Novel Laskar Pelangi</h5>
                  </div>
                  <div class="price-sold d-flex justify-content-between">
                    <h6 class="ms-3 price">Rp. <span class="price-span">56000</span></h6>
                    <h6 class="me-2 sold"><span class="sold-span">56</span> Terjual</h6>
                  </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card mx-2 my-4 shadow" style="width: 15rem;">
                  <a href="../product-page/product.html">
                    <img class="card-img-top" src="/assets/image/our-product-img/novel.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title mb-2">Novel Laskar Pelangi</h5>
                  </div>
                  <div class="price-sold d-flex justify-content-between">
                    <h6 class="ms-3 price">Rp. <span class="price-span">56000</span></h6>
                    <h6 class="me-2 sold"><span class="sold-span">56</span> Terjual</h6>
                  </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card mx-2 my-4 shadow" style="width: 15rem;">
                  <a href="../product-page/product.html">
                    <img class="card-img-top" src="/assets/image/our-product-img/novel.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title mb-2">Novel Laskar Pelangi</h5>
                  </div>
                  <div class="price-sold d-flex justify-content-between">
                    <h6 class="ms-3 price">Rp. <span class="price-span">56000</span></h6>
                    <h6 class="me-2 sold"><span class="sold-span">56</span> Terjual</h6>
                  </div>
                  </a>
                </div>
              </div>
            </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

@endsection