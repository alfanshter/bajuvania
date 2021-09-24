<section id="form">
    <!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <!--login form-->
                    <?php
                    Flasher::Message();
                    ?>
                    <h2>Masuk Akun Anda</h2>
                    <form action="<?= base_url; ?>/login/proseslogin" method="POST">
                        <input type="email" placeholder="masukkan email" name="email" />
                        <input type="password" placeholder="masukkan password" name="password" />
                        <button type="submit" class="btn btn-default">Masuk</button>
                    </form>
                </div>
                <!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <!--sign up form-->
                    <h2>Register Akun Baru</h2>
                    <form action="<?= base_url; ?>/login/prosesdaftar" method="POST">
                        <input type="email" placeholder="masukkan email" name="email" />
                        <input type="password" placeholder="masukkan password" name="password" />
                        <button type="submit" class="btn btn-default">Daftar</button>
                    </form>
                </div>
                <!--/sign up form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->