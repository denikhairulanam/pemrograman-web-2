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
        <h1>Daftar Buku</h1>
        <div class="my-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahmodal"><i class="bi-plus-circle-fill">                                                                                                </i>Tambah</button>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <?php 
                            foreach ($data->getKolomTable() as $Kolom): ?>
                            <th scope="col">
                                <?php echo $Kolom; ?>
                             </th>
                            <?php endforeach; ?>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($data->getData() as $buku): ?>
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $buku->getJudul(); ?></td>
                                <td><?php echo $buku->getPengarang(); ?></td>
                                <td><?php echo $buku->getPenerbit(); ?></td>
                                <td><?php echo $buku->getTahun(); ?></td>
                                <td>

                                    <a href="#" class="btn btn-success"><i class="bi-pencil-square"></i> Edit</a>
                                 <button class="btn btn-danger"><i class="bi-trash"></i> Hapus</button>
                                  
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
