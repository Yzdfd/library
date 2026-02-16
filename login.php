<?php include 'header.html'; ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">

  <div class="card shadow-lg border-0 p-4" style="width: 100%; max-width: 420px;">

    <div class="text-center mb-4">
      <h3 class="fw-bold">Welcome Back</h3>
      <p class="text-muted small">Login to your library account</p>
    </div>

    <form>

      <!-- Email -->
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter your email">
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Enter your password">
      </div>

      <!-- Remember -->
      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox">
          <label class="form-check-label small">Remember me</label>
        </div>
        <a href="#" class="small text-decoration-none">Forgot Password?</a>
      </div>

      <!-- Button -->
      <button class="btn btn-primary w-100 mb-3">Login</button>

    </form>

    <!-- Divider -->
    <div class="text-center small text-muted mb-2">Don't have an account?</div>

    <!-- Register Link -->
    <a href="register.php" class="btn btn-outline-primary w-100">Create Account</a>

  </div>

</div>

<?php include 'footer.html'; ?>