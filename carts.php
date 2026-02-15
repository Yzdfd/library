<?php include 'header.html'; ?>

<div class="container my-5">

  <h2 class="fw-bold mb-4 text-center">Your Cart</h2>

  <div class="row g-4">

    <!-- Cart Items -->
    <div class="col-lg-8">

      <!-- Item -->
      <div class="card mb-3 shadow-sm border-0">
        <div class="row g-0 align-items-center">

          <div class="col-md-3">
            <img src="assets/book1.jpg" class="img-fluid rounded-start h-100 object-fit-cover">
          </div>

          <div class="col-md-9">
            <div class="card-body">

              <h5 class="card-title">The Silent Patient</h5>
              <p class="text-muted small">Category: Fiction</p>

              <div class="d-flex justify-content-between align-items-center">

                <!-- Qty -->
                <div>
                  <label class="small text-muted">Qty</label>
                  <input type="number" class="form-control form-control-sm" value="1" style="width:80px;">
                </div>

                <!-- Price -->
                <div class="text-end">
                  <p class="fw-bold mb-1">$12.00</p>
                  <button class="btn btn-sm btn-outline-danger">Remove</button>
                </div>

              </div>

            </div>
          </div>

        </div>
      </div>

      <!-- Item contoh lagi -->
      <div class="card mb-3 shadow-sm border-0">
        <div class="row g-0 align-items-center">

          <div class="col-md-3">
            <img src="assets/book2.jpg" class="img-fluid rounded-start h-100 object-fit-cover">
          </div>

          <div class="col-md-9">
            <div class="card-body">

              <h5 class="card-title">Atomic Habits</h5>
              <p class="text-muted small">Category: Self Improvement</p>

              <div class="d-flex justify-content-between align-items-center">

                <div>
                  <label class="small text-muted">Qty</label>
                  <input type="number" class="form-control form-control-sm" value="1" style="width:80px;">
                </div>

                <div class="text-end">
                  <p class="fw-bold mb-1">$15.00</p>
                  <button class="btn btn-sm btn-outline-danger">Remove</button>
                </div>

              </div>

            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- Summary -->
    <div class="col-lg-4">

      <div class="card shadow-sm border-0">
        <div class="card-body">

          <h5 class="fw-bold mb-3">Cart Summary</h5>

          <div class="d-flex justify-content-between mb-2">
            <span>Subtotal</span>
            <span>$27.00</span>
          </div>

          <div class="d-flex justify-content-between mb-2">
            <span>Service Fee</span>
            <span>$2.00</span>
          </div>

          <hr>

          <div class="d-flex justify-content-between fw-bold mb-3">
            <span>Total</span>
            <span>$29.00</span>
          </div>

          <button class="btn btn-primary w-100 mb-2">Proceed to Checkout</button>
          <button class="btn btn-outline-secondary w-100">Continue Shopping</button>

        </div>
      </div>

    </div>

  </div>
</div>

<?php include 'footer.html'; ?>