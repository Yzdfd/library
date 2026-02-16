<?php include 'header.html'; ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">

  <div class="card shadow-lg border-0 p-4" style="width: 100%; max-width: 480px;">

    <div class="text-center mb-4">
      <h3 class="fw-bold">Create Account</h3>
      <p class="text-muted small">Join our digital library</p>
    </div>

    <form>

      <!-- Name -->
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" placeholder="Enter your name">
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter your email">
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Create password">
      </div>

      <!-- Confirm Password -->
      <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" class="form-control" placeholder="Repeat password">
      </div>

      <!-- Terms -->
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label small">
          I agree to the Terms & Conditions
        </label>
      </div>

      <!-- Button -->
      <button class="btn btn-primary w-100 mb-3">Register</button>

    </form>

    <!-- Divider -->
    <div class="text-center small text-muted mb-2">Already have an account?</div>

    <!-- Login Link -->
    <a href="login.php" class="btn btn-outline-secondary w-100">Login</a>

  </div>

</div>

<?php include 'footer.html'; ?>