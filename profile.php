<?php include 'header.html'; ?>
  <style>

  </style>
<!-- Profile Section -->
<div class="container mt-5">

  <div class="row">
    
    <!-- Profile Card -->
    <div class="col-md-4">
      <div class="card profile-card text-center p-4">
        <img src="https://via.placeholder.com/120" class="profile-img mx-auto mb-3">
        <h4>Yazid Izlal</h4>
        <p class="text-muted mb-1">Member ID: LIB12345</p>
        <p class="text-muted">yazid@email.com</p>

        <button class="btn btn-primary btn-sm mt-2">Edit Profile</button>
      </div>
    </div>

    <!-- Info & Stats -->
    <div class="col-md-8">
      
      <!-- Stats -->
      <div class="card profile-card p-4 mb-4">
        <h5 class="mb-3">Library Activity</h5>
        <div class="row text-center">
          <div class="col">
            <h4 class="text-primary">12</h4>
            <small>Buku Dipinjam</small>
          </div>
          <div class="col">
            <h4 class="text-success">8</h4>
            <small>Selesai Dibaca</small>
          </div>
          <div class="col">
            <h4 class="text-danger">1</h4>
            <small>Terlambat</small>
          </div>
        </div>
      </div>

      <!-- Borrow History -->
      <div class="card profile-card p-4">
        <h5 class="mb-3">Riwayat Peminjaman</h5>

        <table class="table table-hover">
          <thead>
            <tr>
              <th>Judul Buku</th>
              <th>Tanggal Pinjam</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Belajar Python Dasar</td>
              <td>10 Jan 2026</td>
              <td><span class="badge bg-success">Dikembalikan</span></td>
            </tr>
            <tr>
              <td>Algoritma & Struktur Data</td>
              <td>22 Jan 2026</td>
              <td><span class="badge bg-warning text-dark">Dipinjam</span></td>
            </tr>
            <tr>
              <td>Machine Learning Pemula</td>
              <td>01 Feb 2026</td>
              <td><span class="badge bg-danger">Terlambat</span></td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>
  </div>

</div>
<?php include 'footer.html'; ?>