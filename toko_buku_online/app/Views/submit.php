<?= $this->extend('template')?>

<?= $this->section('main')?>
<div class = "container">
    <h2 class="mb-5"> Anda berhasil membuat order</h2>
    <div class="mb-3">
        <div class="alert alert-success">
            <strong>Sukses!</strong> Silahkan melakukan pembayaran dan mengirim bukti bayar ke admin via Whatsapp. <a href="https://wa.me/085212748146" class="btn btn-success">Hubungi Admin</a>
        </div>
    </div>
</div>

<?= $this->endSection()?>