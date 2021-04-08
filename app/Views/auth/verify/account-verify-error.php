<?= $this->extend('admin/layouts/main'); ?>


<?= $this->section('content'); ?>

<div class="nk-wrap nk-wrap-nosidebar">
    <!-- content @s -->
    <div class="nk-content ">
        <div class="nk-block nk-block-middle wide-xs mx-auto">
            <div class="nk-block-content nk-error-ld text-center">
                <h1 class="nk-error-head">Hata!</h1>
                
                <h3 class="nk-error-title">Doğrulamada bir hata oluştu!</h3>
                <ol>
                <li class="nk-error-text">Doğrulama anahtarınız süresi dolmuş yada yanlış olabilir</li>
                <li class="nk-error-text">Hesabınız  önceden doğrulanmış olabilirsiniz</li>
                </ol>
                <a href="html/index.html" class="btn btn-lg btn-primary mt-2">Giriş Yap</a>
            </div>
        </div><!-- .nk-block -->
    </div>
    <!-- wrap @e -->
</div>




<?= $this->endSection(); ?>