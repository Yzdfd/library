<?php include 'header.html' ?>

<div class="container my-5">

  <!-- Title -->
  <div class="text-center mb-4">
    <h2 class="fw-bold">Library Books</h2>
    <p class="text-muted">Find, borrow, or buy your favorite books</p>
  </div>

  <!-- Search + Saved -->
  <div class="row mb-4 g-3 align-items-center">
    <div class="col-md-8">
      <input type="text" class="form-control form-control-lg" placeholder="Search books...">
    </div>

    <div class="col-md-4 text-md-end">
      <button class="btn btn-outline-danger w-100">
        View Saved / Favorite Books
      </button>
    </div>
  </div>

  <!-- Categories -->
  <div class="mb-4">
    <h5 class="mb-3">Categories</h5>
    <div class="d-flex flex-wrap gap-2">
      <button class="btn btn-outline-primary">All</button>
      <button class="btn btn-outline-primary">Fiction</button>
      <button class="btn btn-outline-primary">Non-Fiction</button>
      <button class="btn btn-outline-primary">Science</button>
      <button class="btn btn-outline-primary">Technology</button>
      <button class="btn btn-outline-primary">History</button>
      <button class="btn btn-outline-primary">Art</button>
    </div>
  </div>

  <!-- Books Grid -->
  <div class="row g-4">

    <!-- Book Card -->
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 shadow-sm border-0 book-card">

        <img src="assets/365 Days.jpeg" class="card-img-top" alt="Book">

        <div class="card-body d-flex flex-column">
          <h5 class="card-title">The Silent Patient</h5>
          <p class="text-muted small mb-1">Category: Fiction</p>
          <p class="card-text small">A psychological thriller about a woman’s mysterious silence.</p>

          <div class="mt-auto d-grid gap-2">

            <a href="books_detail.php" class="text-white text-decoration-none btn btn-primary btn-sm">Details</a>
            <button class="btn btn-outline-danger btn-sm">Save</button>

          </div>
        </div>
      </div>
    </div>

    <!-- Duplicate card (contoh buku lain) -->
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 shadow-sm border-0 book-card">

        <img src="assets/book2.jpg" class="card-img-top" alt="Book">

        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Atomic Habits</h5>
          <p class="text-muted small mb-1">Category: Self Improvement</p>
          <p class="card-text small">Build good habits and break bad ones effectively.</p>

          <div class="mt-auto d-grid gap-2">
            <button class="btn btn-primary btn-sm">Borrow Book</button>
            <button class="btn btn-success btn-sm">Add to Cart</button>
            <button class="btn btn-outline-danger btn-sm">Save</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Duplicate lagi -->
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 shadow-sm border-0 book-card">

        <img src="assets/book3.jpg" class="card-img-top" alt="Book">

        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Clean Code</h5>
          <p class="text-muted small mb-1">Category: Technology</p>
          <p class="card-text small">A handbook of agile software craftsmanship.</p>

          <div class="mt-auto d-grid gap-2">
            <button class="btn btn-primary btn-sm">Borrow Book</button>
            <button class="btn btn-success btn-sm">Add to Cart</button>
            <button class="btn btn-outline-danger btn-sm">Save</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Optional styling -->
<style>
.book-card {
  transition: transform .2s ease, box-shadow .2s ease;
  border-radius: 12px;
  overflow: hidden;
}

.book-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 28px rgba(0,0,0,.15);
}

.card-img-top {
  height: 260px;
  object-fit: cover;
}
</style>

<?php include 'footer.html'; ?>