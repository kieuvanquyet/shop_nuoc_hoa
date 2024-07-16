<!-- Sản phẩm yêu thích -->

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">Wishlist</h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->
<!-- product tab start -->
<section class="whish-list-section theme1 pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="title mb-30 pb-25 text-capitalize">Wishlist</h3>
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th class="text-center" scope="col">Product Image</th>
                <th class="text-center" scope="col">Product Name</th>
                <th class="text-center" scope="col">Stock Status</th>
                <th class="text-center" scope="col">Qty</th>
                <th class="text-center" scope="col">Price</th>
                <th class="text-center" scope="col">action</th>
                <th class="text-center" scope="col">Checkout</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="text-center" scope="row">
                  <img src="view/assets/img/product/2.png" alt="img" />
                </th>
                <td class="text-center">
                  <span class="whish-title">Water and Wind Resistant cream</span>
                </td>
                <td class="text-center">
                  <span class="badge badge-danger position-static">In Stock</span>
                </td>
                <td class="text-center">
                  <div class="product-count style">
                    <div class="count d-flex justify-content-center">
                      <input type="number" min="1" max="10" step="1" value="1" />
                      <div class="button-group">
                        <button class="count-btn increment">
                          <i class="fas fa-chevron-up"></i>
                        </button>
                        <button class="count-btn decrement">
                          <i class="fas fa-chevron-down"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <span class="whish-list-price"> $38.24 </span>
                </td>

                <td class="text-center">
                  <a href="#">
                    <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                </td>
                <td class="text-center">
                  <a href="#" class="btn btn-dark btn--lg">add to cart</a>
                </td>
              </tr>
              <tr>
                <th class="text-center" scope="row">
                  <img src="view/assets/img/product/4.png" alt="img" />
                </th>
                <td class="text-center">
                  <span class="whish-title">Originals Kaval nail polish</span>
                </td>
                <td class="text-center">
                  <span class="badge badge-danger position-static">In Stock</span>
                </td>
                <td class="text-center">
                  <div class="product-count style">
                    <div class="count d-flex justify-content-center">
                      <input type="number" min="1" max="10" step="1" value="1" />
                      <div class="button-group">
                        <button class="count-btn increment">
                          <i class="fas fa-chevron-up"></i>
                        </button>
                        <button class="count-btn decrement">
                          <i class="fas fa-chevron-down"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <span class="whish-list-price"> $38.24 </span>
                </td>

                <td class="text-center">
                  <a href="#">
                    <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                </td>
                <td class="text-center">
                  <a href="#" class="btn btn-dark btn--lg">add to cart</a>
                </td>
              </tr>
              <tr>
                <th class="text-center" scope="row">
                  <img src="view/assets/img/product/6.png" alt="img" />
                </th>
                <td class="text-center">
                  <span class="whish-title">New Balance Arish makeup box</span>
                </td>
                <td class="text-center">
                  <span class="badge badge-danger position-static">In Stock</span>
                </td>
                <td class="text-center">
                  <div class="product-count style">
                    <div class="count d-flex justify-content-center">
                      <input type="number" min="1" max="10" step="1" value="1" />
                      <div class="button-group">
                        <button class="count-btn increment">
                          <i class="fas fa-chevron-up"></i>
                        </button>
                        <button class="count-btn decrement">
                          <i class="fas fa-chevron-down"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <span class="whish-list-price"> $38.24 </span>
                </td>

                <td class="text-center">
                  <a href="#">
                    <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                </td>
                <td class="text-center">
                  <a href="#" class="btn btn-dark btn--lg">add to cart</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- product tab end -->

<?php
include "view/footer.php";
?>