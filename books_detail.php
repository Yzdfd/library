<?php include 'header.html' ?>

<div class="container my-5">

  <!-- Breadcrumb -->
  <nav class="mb-4">
    <a href="index.php" class="text-decoration-none">Home</a> /
    <a href="books.php" class="text-decoration-none">Books</a> /
    <span class="text-muted">Book Detail</span>
  </nav>

  <div class="row g-5">

    <!-- Book Cover -->
    <div class="col-md-4 text-center">
      <img src="assets/book1.jpg" class="img-fluid rounded shadow-sm book-cover">

      <div class="d-grid gap-2 mt-4">
        <button class="btn btn-primary btn-lg">Borrow / Buy</button>
        <button class="btn btn-success">Add to Cart</button>
        <button class="btn btn-outline-danger">Save to Favorite</button>
      </div>
    </div>

    <!-- Book Info -->
    <div class="col-md-8">

      <h2 class="fw-bold">The Silent Patient</h2>

      <!-- Rating -->
      <div class="mb-2 text-warning">
        ⭐⭐⭐⭐☆ <span class="text-muted small">(4.5 / 5)</span>
      </div>

      <p class="text-muted mb-3">Category: Fiction</p>

      <!-- Status -->
      <span class="badge bg-success mb-3">Available</span>

      <!-- Description -->
      <h5>Description</h5>
      <p class="text-muted">
        The Silent Patient is a psychological thriller about Alicia Berenson, a famous painter who shoots her husband
        and then never speaks another word. A criminal psychotherapist becomes obsessed with uncovering the truth behind her silence.
      </p>

      <!-- Book Details -->
      <div class="row mt-4">
        <div class="col-sm-6">
          <p><strong>Author:</strong> Alex Michaelides</p>
          <p><strong>Publisher:</strong> Celadon Books</p>
          <p><strong>Year:</strong> 2019</p>
        </div>
        <div class="col-sm-6">
          <p><strong>Pages:</strong> 336</p>
          <p><strong>Language:</strong> English</p>
          <p><strong>Stock:</strong> 12 Books</p>
        </div>
      </div>

    </div>
  </div>

  <!-- Divider -->
  <hr class="my-5">

  <!-- Related Books -->
  <div>
    <h4 class="mb-4">Related Books</h4>

    <div class="row g-4">

      <!-- Book -->
      <div class="col-sm-6 col-md-3">
        <div class="card h-100 shadow-sm border-0 book-card">
          <img src="assets/book2.jpg" class="card-img-top">
          <div class="card-body">
            <h6 class="card-title">Atomic Habits</h6>
            <button class="btn btn-sm btn-outline-primary w-100">View Details</button>
          </div>
        </div>
      </div>

      <!-- Book -->
      <div class="col-sm-6 col-md-3">
        <div class="card h-100 shadow-sm border-0 book-card">
          <img src="assets/book3.jpg" class="card-img-top">
          <div class="card-body">
            <h6 class="card-title">Clean Code</h6>
            <button class="btn btn-sm btn-outline-primary w-100">View Details</button>
          </div>
        </div>
      </div>

      <!-- Book -->
      <div class="col-sm-6 col-md-3">
        <div class="card h-100 shadow-sm border-0 book-card">
          <img src="assets/book4.jpg" class="card-img-top">
          <div class="card-body">
            <h6 class="card-title">Deep Work</h6>
            <button class="btn btn-sm btn-outline-primary w-100">View Details</button>
          </div>
        </div>
      </div>

      <!-- Book -->
      <div class="col-sm-6 col-md-3">
        <div class="card h-100 shadow-sm border-0 book-card">
          <img src="assets/book5.jpg" class="card-img-top">
          <div class="card-body">
            <h6 class="card-title">Start With Why</h6>
            <button class="btn btn-sm btn-outline-primary w-100">View Details</button>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

<style>
.book-cover {
  max-height: 420px;
  object-fit: cover;
}

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
  height: 220px;
  object-fit: cover;
}
</style>

<?= include 'footer.html' ?>