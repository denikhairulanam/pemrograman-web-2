<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class=" mb-4">Daftar Buku</h1>
      <div class="my-3">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal"><i class="bi-plus-circle-fill"></i> Tambah</button>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <?php foreach($Data->getKolomTabel() as $kolom): ?>
                  <th scope="col"><?php echo $kolom; ?></th>
                <?php endforeach; ?>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 0; ?>
              <?php foreach($Data->getData() as $buku): ?>
                <tr>
                  <td><?php echo ++$no; ?></td>
                  <td><?php echo $buku->getJudul(); ?></td>
                  <td><?php echo $buku->getPengarang(); ?></td>
                  <td><?php echo $buku->getPenerbit(); ?></td>
                  <td><?php echo $buku->getTahun(); ?></td>
                  <td>
                    <a href="/index.php/edit?id=<?php echo $buku->getId(); ?>" class="btn btn-success"><i class="bi-pencil-square"></i> Edit</a>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-id="<?php echo $buku->getId(); ?>"><i class="bi-trash"></i> Hapus</button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
   
    <!-- Modal Tambah Buku -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="tambahModalLabel">Form Tambah Buku</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/index.php/buku/simpan" id="formTambah" method="POST">
              <div class="row mb-3">
                <label for="Judul" class="col-sm-4 col-form-label">Judul Buku</label>
                <div class="col-sm-8">
                  <input type="text" name="Judul" id="Judul" class="form-control" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="pengarang" class="col-sm-4 col-form-label">Pengarang</label>
                <div class="col-sm-8">
                  <input type="text" name="pengarang" id="pengarang" class="form-control" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="penerbit" class="col-sm-4 col-form-label">Penerbit</label>
                <div class="col-sm-8">
                  <input type="text" name="penerbit" id="penerbit" class="form-control" required>
                </div>
              </div>
              <div class="row mb-3">
                <label for="tahun" class="col-sm-4 col-form-label">Tahun Terbit</label>
                <div class="col-sm-8">
                  <input type="text" name="tahun" id="tahun" class="form-control" required>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" form="formTambah" class="btn btn-primary"><i class="bi-floppy"></i> Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="hapusModalLabel">Konfirmasi Hapus</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/index.php/buku/hapus" id="formHapus" method="POST"> 
              <input type="hidden" name="id_hapus" id="hidden_id">
            </form>
            <p>Apakah anda yakin ingin menghapus data dengan id <span id="text_id">. . .</span>?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" form="formHapus" class="btn btn-danger"><i class="bi-trash"></i> Hapus</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const hapusModal = document.getElementById('hapusModal');
      if (hapusModal) {
        hapusModal.addEventListener('show.bs.modal', event => {
          const button = event.relatedTarget;
          const id = button.getAttribute('data-bs-id');
          const hidden_id = hapusModal.querySelector('#hidden_id');
          const text_id = hapusModal.querySelector('#text_id');
          hidden_id.value = id;
          text_id.textContent = id;
        });
      }
      
    </script>
  </body>
</html>
