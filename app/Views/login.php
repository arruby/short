<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid" id="login-page">
    <div class="d-flex flex-column" style="height:100vh">
        <div class="group_login mx-auto mt-5 px-3" style="border: 2px solid #5F5980; width:30%; border-radius:5px">
            <h3 class="text-center mb-4 mt-3" id="judul">
                <i class="fa-solid fa-key"></i> Login
            </h3>
            <form action="#" id="form_login">
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control form-control-sm" autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-sm">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                    <label for="remember">Ingat Saya!</label>
                </div>

                <button type="button" class="btn btn_login mb-3" style="width: 100%;">Masuk</button>

                <h6 class="text-center" style="color: #DFDFDF;">Lupa kata sandi?</h6>
            </form>
        </div>
        <h6>Belum punya akun? Daftar di sini.</h6>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('customJS'); ?>

<?= $this->endSection(); ?>