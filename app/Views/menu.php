<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashData('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="container py-5">
    <div class="row g-4">
        <?php foreach ($product as $key => $item) : ?>
            <div class="col-lg-4 col-md-6">
                <?= form_open('keranjang') ?>
                <?php
                echo form_hidden('id', $item['id']);
                echo form_hidden('nama', $item['nama']);
                echo form_hidden('harga', $item['harga']);
                echo form_hidden('foto', $item['foto']);
                ?>
                <div class="card shadow rounded-4 h-100 d-flex flex-column justify-content-between">
                    <div class="card-body text-center">
                        <img src="<?= base_url('img/' . $item['foto']) ?>" alt="<?= esc($item['nama']) ?>" class="img-fluid rounded mb-3" style="max-height: 200px; object-fit: contain;">
                        <h5 class="card-title text-primary fw-bold mb-2"><?= esc($item['nama']) ?></h5>
                        <p class="card-text mb-3 text-success fw-semibold"><?= number_to_currency($item['harga'], 'IDR') ?></p>
                        <button type="submit" class="btn btn-warning text-dark rounded-pill px-4">Beli</button>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection() ?>
