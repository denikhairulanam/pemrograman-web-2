<?= $this->extend('template') ?>
<?= $this->section('main') ?>
<div class="container p-5 bg-danger-subtle rounded-bottom-4">
  <h1>Selamat Datang di Toko Buku Online</h1>
  <h5>Kami menyediakan berbagai jenis buku dari penerbit terpercaya.</h5>
  <a href="<?= base_url() ?>" class="btn btn-primary">Lihat Produk</a>
</div>
<div class="container mt-4">
  <h2 class="mt-5">Buku Best Seller</h2>
  <div class="row g-2">
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="<?= base_url('images/image 1.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">teruslah bodoh jangan pintar</h5>
          <p class="card-text">Rp.65.000,00</p>
          <a href="#" class="btn btn-primary">Beli Sekarang </a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="<?= base_url('images/image 1.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">teruslah bodoh jangan pintar</h5>
          <p class="card-text">Rp.65.000,00</p>
          <a href="#" class="btn btn-primary">Beli Sekarang </a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width:18rem;">
        <img src="<?= base_url('images/image 1.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">teruslah bodoh jangan pintar</h5>
          <p class="card-text">Rp.65.000,00</p>
          <a href="#" class="btn btn-primary">Beli Sekarang </a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="<?= base_url('images/image 1.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">teruslah bodoh jangan pintar</h5>
          <p class="card-text">Rp.65.000,00</p>
          <a href="#" class="btn btn-primary">Beli Sekarang </a>
        </div>
      </div>
    </div>
  </div>
  <?= $this->endSection() ?>