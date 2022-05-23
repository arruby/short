<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid" id="landing-page">
    <div class="d-flex flex-column justify-content-center align-items-center" style="height:100vh">
        <h1 class="mx-auto mb-2" id="judul">
            <i class="fa-solid fa-ruler" style="color:#5F5980; "></i> Pendekin Link
        </h1>
        <h3 class="mx-auto mb-4" id="sub-judul">
            Ruang Kontrol
        </h3>
        <div class="mx-auto text-center" id="frame_control">
            <span class="text_control ">Dibuat tanggal <?= $created_at; ?></span><br>
            <span class="text_control"><?= $count; ?> kali diakses.</span><br>
            <div class="input-group mt-2">
                <input type="text" name="link_complete" id="link_complete" class="form-control" readonly value="<?= $linkComplete; ?>">
                <button class="btn btn-outline-light" id="btn_copyComplete"><i class="fa-solid fa-copy" style="color:#5F5980;"></i></button>
            </div>
        </div>
        <a href=" <?= $linkOriginal; ?>"><button class="btn mt-2" id="btn_linkOriginal">Kunjungi Halaman Asli</button></a>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('customJS'); ?>
<script>
    $("#btn_copyComplete").click(function() {
        var copied = $("#link_complete").select().val();
        document.execCommand('copy');
    })
</script>
<?= $this->endSection(); ?>