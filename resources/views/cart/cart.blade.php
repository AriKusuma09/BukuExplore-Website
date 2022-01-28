@extends('main.main')


@section('main')

      <!-- Start Main Content Cart-->

      <div class="container cart-page" style="margin-top: 130px;">

        <table>
          <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
          </tr>
          <tr>
            <td>
              <div class="cart-info">
                <img src="/assets/image/our-product-img/novel.jpg" alt="">
                <div>
                  <p>Novel Laskar Pelangi</p>
                  <small>Harga : Rp. 91000</small>
                  <br>
                  <a href="">Remove</a>
                </div>
              </div>

            </td>
            <td class="quantity-cart"><input type="number" value="1"></td>
            <td>Rp. 91000</td>
          </tr>
          <tr>
            <td>
              <div class="cart-info">
                <img src="/assets/image/our-product-img/antologi.jpg" alt="">
                <div>
                  <p>Antologi</p>
                  <small>Harga : Rp. 56000</small>
                  <br>
                  <a href="">Remove</a>
                </div>
              </div>

            </td>
            <td class="quantity-cart"><input type="number" value="1"></td>
            <td>Rp. 56000</td>
          </tr>
          <tr>
            <td>
              <div class="cart-info">
                <img src="/assets/image/our-product-img/manga.jpg" alt="">
                <div>
                  <p>Jujutsu Kaisen</p>
                  <small>Harga : Rp. 58000</small>
                  <br>
                  <a href="">Remove</a>
                </div>
              </div>

            </td>
            <td class="quantity-cart"><input type="number" value="1"></td>
            <td>Rp. 58000</td>
          </tr>
          <tr>
            <td>
              <div class="cart-info">
                <img src="/assets/image/our-product-img/biografi.jpg" alt="">
                <div>
                  <p>Biografi</p>
                  <small>Harga : Rp. 108000</small>
                  <br>
                  <a href="">Remove</a>
                </div>
              </div>

            </td>
            <td class="quantity-cart"><input type="number" value="1"></td>
            <td>Rp. 108000</td>
          </tr>
          <tr>
            <td>
              <div class="cart-info">
                <img src="/assets/image/our-product-img/cergam.jpg" alt="">
                <div>
                  <p>Cergam</p>
                  <small>Harga : Rp. 19000</small>
                  <br>
                  <a href="">Remove</a>
                </div>
              </div>

            </td>
            <td class="quantity-cart"><input type="number" value="1"></td>
            <td>Rp. 19000</td>
          </tr>
          <tr>
            <td>
              <div class="cart-info">
                <img src="/assets/image/our-product-img/sejarah.jpg" alt="">
                <div>
                  <p>Sejarah</p>
                  <small>Harga : Rp. 45000</small>
                  <br>
                  <a href="">Remove</a>
                </div>
              </div>

            </td>
            <td class="quantity-cart"><input type="number" value="1"></td>
            <td>Rp. 45000</td>
          </tr>
        </table>

        <div class="total-price">

          <table>
            <tr>
              <td>Subtotal</td>
              <td>Rp. 205000</td>
            </tr>
            <tr>
              <td>Tax</td>
              <td>Rp. 50000</td>
            </tr>
            <tr>
              <td>Total</td>
              <td>Rp. 255000</td>
            </tr>
            <tr class="order-now">
              <td class="go-order"><a class="go-order-button" href="">Order Sekarang!</a></td>
            </tr>
          </table>

        </div>

      </div>

      <!-- End Main Content Cart -->

@endsection