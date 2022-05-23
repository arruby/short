<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid" id="landing-page">
    <div class="d-flex flex-column" style="height:100vh">
        <h1 class="mx-auto mb-4 mt-5" id="judul">
            <i class="fa-solid fa-rectangle-list"></i> List Link
        </h1>
        <div id="group_listLink" class="d-flex flex-column mx-auto">
            <?php foreach ($list as $row) : ?>
                <button class="btn btn-primary btn_list mb-3" data-link="<?= $row['link']; ?>"><?= $row['nama']; ?></button>
            <?php endforeach ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('customJS'); ?>
<script>
    var gotoLink;

    $("#group_listLink").on("click", ".btn_list", function() {
        gotoLink = $(this).data("link");

        location.href = gotoLink;
    })
</script>
<?= $this->endSection(); ?>