<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>toko buku online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<? base_url() ?>">Home</a>
                    </li>
                </ul>
                <?php if (auth()->loggedIn()): ?>

                    <div class="ms-3">
                        <a href="<?= base_url('logout') ?>" class="btn btn secondary">logout</a>
                    </div>
                <?php endif; ?>


            </div>
        </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-3">
                <h2 class="mb-5">Menu</h2>
                <div class="list-group">
                    <a href="<?= base_url('admin/dashboard') ?>" class="list-group-item list-group-item-action <?= current_url() == base_url('index.php/admin/dashboard') ? 'active' : '' ?>" aria-current="true">
                        Dashboard
                    </a>
                    <a href="<?= base_url('admin/data-buku') ?>" class="list-group-item list-group-item-action<?= current_url() == base_url('index.php/admin/daftar-buku') ? 'active' : '' ?>" aria-current="true">
                        Daftar Buku</a>
                </div>
            </div>
            <div class=" col-9">
                        <?= $this->renderSection('main'); ?>
                </div>
            </div>
        </div>

        <footer class="bg-danger-subtle py-5">
            <div class="container">
                <span>copyright &copy; 2024. E-Commerce kelas 3C. All rights reserved</span>
            </div>

        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>