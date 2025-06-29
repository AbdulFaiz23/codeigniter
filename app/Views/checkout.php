<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
    body {
        background-color: #212529;
        color: #f8f9fa;
    }
</style>

<div class="row">
    <div class="col-lg-6">
        <?= form_open('buy', 'class="row g-3"') ?>
        <?= form_hidden('username', session()->get('username')) ?>
        <?= form_input(['type' => 'hidden', 'name' => 'total_harga', 'id' => 'total_harga', 'value' => '']) ?>
        
        <div class="col-12">
            <label for="nama" class="form-label text-light">Nama</label>
            <input type="text" class="form-control bg-secondary text-white border-dark" id="nama" value="<?= session()->get('username'); ?>">
        </div>

        <div class="col-12">
            <label for="alamat" class="form-label text-light">Alamat</label>
            <input type="text" class="form-control bg-secondary text-white border-dark" id="alamat" name="alamat">
        </div>

        <div class="col-12">
            <label for="kelurahan" class="form-label text-light">Kelurahan</label>
            <select class="form-control bg-secondary text-white border-dark" id="kelurahan" name="kelurahan" required></select>
        </div>

        <div class="col-12">
            <label for="layanan" class="form-label text-light">Layanan</label>
            <select class="form-control bg-secondary text-white border-dark" id="layanan" name="layanan" required></select>
        </div>

        <div class="col-12">
            <label for="ongkir" class="form-label text-light">Ongkir</label>
            <input type="text" class="form-control bg-secondary text-white border-dark" id="ongkir" name="ongkir" readonly>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="col-12">
            <table class="table table-dark table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($items)) : foreach ($items as $item) : ?>
                        <tr>
                            <td><?= $item['name'] ?></td>
                            <td><?= number_to_currency($item['price'], 'IDR') ?></td>
                            <td><?= $item['qty'] ?></td>
                            <td><?= number_to_currency($item['price'] * $item['qty'], 'IDR') ?></td>
                        </tr>
                    <?php endforeach; endif; ?>
                    <tr>
                        <td colspan="2"></td>
                        <td>Subtotal</td>
                        <td><?= number_to_currency($total, 'IDR') ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td>Total</td>
                        <td><span id="total"><?= number_to_currency($total, 'IDR') ?></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Buat Pesanan</button>
        </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
$(document).ready(function() {
    var ongkir = 0;
    var total = 0;
    hitungTotal();

    $('#kelurahan').select2({
        placeholder: 'Ketik nama kelurahan...',
        ajax: {
            url: '<?= base_url('get-location') ?>',
            dataType: 'json',
            delay: 1500,
            data: function (params) {
                return { search: params.term };
            },
            processResults: function (data) {
                return {
                    results: data.map(function(item) {
                        return {
                            id: item.id,
                            text: item.subdistrict_name + ", " + item.district_name + ", " + item.city_name + ", " + item.province_name + ", " + item.zip_code
                        };
                    })
                };
            },
            cache: true
        },
        minimumInputLength: 3,
        theme: 'classic'
    });

    $("#kelurahan").on('change', function() {
        var id_kelurahan = $(this).val(); 
        $("#layanan").empty();
        ongkir = 0;

        $.ajax({
            url: "<?= site_url('get-cost') ?>",
            type: 'GET',
            data: { 'destination': id_kelurahan },
            dataType: 'json',
            success: function(data) {
                data.forEach(function(item) {
                    var text = item["description"] + " (" + item["service"] + ") : estimasi " + item["etd"];
                    $("#layanan").append($('<option>', {
                        value: item["cost"],
                        text: text
                    }));
                });
                hitungTotal();
            },
        });
    });

    $("#layanan").on('change', function() {
        ongkir = parseInt($(this).val());
        hitungTotal();
    });

    function hitungTotal() {
        total = ongkir + <?= $total ?>;
        $("#ongkir").val(ongkir);
        $("#total").html("IDR " + total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        $("#total_harga").val(total);
    }
});
</script>
<?= $this->endSection() ?>
