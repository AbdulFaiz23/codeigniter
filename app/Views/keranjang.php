<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashData('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php echo form_open('keranjang/edit') ?>

<!-- Tabel -->
<table class="table datatable">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Subtotal</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        if (!empty($items)) :
            foreach ($items as $index => $item) :
        ?>
                <tr>
                    <td class="align-middle fw-semibold"><?php echo $item['name'] ?></td>

                    <td class="align-middle">
                        <img src="<?php echo base_url() . "img/" . $item['options']['foto'] ?>" width="100px" class="rounded shadow-sm">
                    </td>

                    <td class="align-middle text-primary fw-bold">
                        <?php echo number_to_currency($item['price'], 'IDR') ?>
                    </td>

                    <td class="align-middle">
                        <input type="number" min="1" name="qty<?php echo $i++ ?>" class="form-control bg-light text-dark border-primary" value="<?php echo $item['qty'] ?>">
                    </td>

                    <td class="align-middle text-danger fw-bold">
                        <?php echo number_to_currency($item['subtotal'], 'IDR') ?>
                    </td>

                    <td class="align-middle">
                        <a href="<?php echo base_url('keranjang/delete/' . $item['rowid']) ?>" class="btn btn-outline-danger btn-sm rounded-pill">
                            <i class="bi bi-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
        <?php
            endforeach;
        endif;
        ?>
    </tbody>
</table>
<!-- End Tabel -->

<!-- Total -->
<div class="alert alert-secondary">
    <?php echo "Total = " . number_to_currency($total, 'IDR') ?>
</div>

<!-- Tombol Aksi -->
<button type="submit" class="btn btn-success">Perbarui Keranjang</button>
<a class="btn btn-danger" href="<?php echo base_url() ?>keranjang/clear">Kosongkan Keranjang</a>
<?php if (!empty($items)) : ?>
    <a class="btn btn-success" href="<?php echo base_url() ?>checkout">Selesai Belanja</a>
<?php endif; ?>
<?php echo form_close() ?>

<?= $this->endSection() ?>
