<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php
echo '<style>';
echo 'body { background-color: #212529; color: #f8f9fa; }';
echo '.table th, .table td { color: #f8f9fa; }';
echo '</style>';
?>

<div class="container-fluid mt-4">
    <?php if (session()->getFlashData('success')) : ?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <?= session()->getFlashData('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashData('failed')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashData('failed') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4 text-bg-dark" style="background-color: #343a40;">
        <div class="card-header py-3 d-flex justify-content-between align-items-center border-bottom border-secondary">
            <h6 class="m-0 font-weight-bold text-light">Daftar Produk</h6>
            <button type="button" class="btn btn-info text-dark" data-bs-toggle="modal" data-bs-target="#addModal">
                Tambah Data
            </button>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-dark datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($product as $index => $produk) : ?>
                            <tr>
                                <th><?= $index + 1 ?></th>
                                <td><?= esc($produk['nama']) ?></td>
                                <td><?= number_format($produk['harga'], 0, ',', '.') ?></td>
                                <td><?= esc($produk['jumlah']) ?></td>
                                <td>
                                    <?php if ($produk['foto'] && file_exists(FCPATH . "img/" . $produk['foto'])) : ?>
                                        <img src="<?= base_url("img/" . $produk['foto']) ?>" alt="Product Image" width="100px" class="img-thumbnail bg-dark border-secondary">
                                    <?php else : ?>
                                        <img src="<?= base_url("img/no_image.jpg") ?>" alt="No Image" width="100px" class="img-thumbnail bg-dark border-secondary">
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm text-dark" data-bs-toggle="modal" data-bs-target="#editModal-<?= $produk['id'] ?>">
                                        Ubah
                                    </button>
                                    <a href="<?= base_url('produk/delete/' . $produk['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini ?')">
                                        Hapus
                                    </a>
                                </td>
                            </tr>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="editModal-<?= $produk['id'] ?>" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content text-bg-dark" style="background-color: #2b3035;">
                                        <div class="modal-header border-bottom border-secondary">
                                            <h5 class="modal-title">Edit Data Produk</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?= base_url('produk/edit/' . $produk['id']) ?>" method="post" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label text-light">Nama</label>
                                                    <input type="text" name="nama" class="form-control bg-secondary text-white border-dark" value="<?= esc($produk['nama']) ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label text-light">Harga</label>
                                                    <input type="text" name="harga" class="form-control bg-secondary text-white border-dark" value="<?= esc($produk['harga']) ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label text-light">Jumlah</label>
                                                    <input type="text" name="jumlah" class="form-control bg-secondary text-white border-dark" value="<?= esc($produk['jumlah']) ?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <?php if ($produk['foto'] && file_exists(FCPATH . "img/" . $produk['foto'])) : ?>
                                                        <img src="<?= base_url("img/" . $produk['foto']) ?>" width="100px" class="img-thumbnail bg-dark border-secondary mb-2">
                                                    <?php endif; ?>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input bg-dark border-secondary" type="checkbox" name="check" value="1" id="check_<?= $produk['id'] ?>">
                                                        <label class="form-check-label text-light" for="check_<?= $produk['id'] ?>">
                                                            Ceklis jika ingin mengganti foto
                                                        </label>
                                                    </div>
                                                    <label class="form-label text-light">Foto</label>
                                                    <input type="file" class="form-control bg-secondary text-white border-dark" name="foto">
                                                </div>
                                            </div>
                                            <div class="modal-footer border-top border-secondary">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-bg-dark" style="background-color: #2b3035;">
            <div class="modal-header border-bottom border-secondary">
                <h5 class="modal-title">Tambah Data Produk</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('produk') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label text-light">Nama</label>
                        <input type="text" name="nama" class="form-control bg-secondary text-white border-dark" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-light">Harga</label>
                        <input type="text" name="harga" class="form-control bg-secondary text-white border-dark" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-light">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control bg-secondary text-white border-dark" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-light">Foto</label>
                        <input type="file" name="foto" class="form-control bg-secondary text-white border-dark">
                    </div>
                </div>
                <div class="modal-footer border-top border-secondary">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
