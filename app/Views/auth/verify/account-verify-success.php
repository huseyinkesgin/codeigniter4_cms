<?= $this->extend('admin/layouts/main'); ?>


<?= $this->section('content'); ?>

<div class="nk-wrap nk-wrap-nosidebar">
    <!-- content @s -->
    <div class="nk-content ">
        <div class="nk-block nk-block-middle wide-xs mx-auto">
            <div class="nk-block-content nk-error-ld text-center">
                <h1 class="nk-error-head">Süper!</h1>
                <h3 class="nk-error-title">Doğrulama işlemi başarılı bir şekilde tamamlandı.</h3>
                <p class="nk-error-text">Artık eposta adresiniz ve şifreniz ile giriş yapabilirsiniz.</p>
                <a href="html/index.html" class="btn btn-lg btn-primary mt-2">Giriş Yap</a>
            </div>
        </div><!-- .nk-block -->
    </div>
    <!-- wrap @e -->
</div>




<?= $this->endSection(); ?>