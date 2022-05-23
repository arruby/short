<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid" id="landing-page">
    <div class="d-flex flex-column justify-content-center" style="height:100vh">
        <h1 class="mx-auto mb-4" id="judul">
            <i class="fa-solid fa-ruler"></i> Pendekin Link
        </h1>
        <form action="#" method="POST" id="form_short">
            <div id="group-input" class="d-flex flex-md-row flex-column justify-content-center">
                <input type="text" name="url_original" id="url_original" class="form-control" placeholder="Taruh linknya disini.." autocomplete="off">
                <button type="submit" class="btn ms-md-3 mt-2 mt-md-0" id="btn-pendekin">Pendekin!</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('customJS'); ?>
<script>
    $("#form_short").submit(function(e) {
        e.preventDefault();

        var short_formData = new FormData(this);

        $.ajax({
                type: "POST",
                url: "<?= base_url('ShortenCont/shorten'); ?>",
                data: short_formData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
            })
            .done(function(data) {
                var urlControl = "<?= base_url(); ?>" + "/" + data.dataShort;

                window.location.replace(urlControl);
            })


    })
</script>
<?= $this->endSection(); ?>