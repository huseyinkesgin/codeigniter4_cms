<?php if (session()->has('errors')) { ?>
    <?php if (is_array(session()->errors)) { ?>

    <?php foreach (session()->errors as $key=> $value){ ?>

            <div class="alert alert-icon alert-warning" role="alert">
                <em class="icon ni ni-alert-circle"></em>
                <strong>Uyarı!</strong>. <?= $value ;?>
            </div>
        <?php } ?>

    <?php } else { ?>
        <div class="alert alert-icon alert-warning" role="alert">
            <em class="icon ni ni-alert-circle"></em>
            <strong>Uyarı!</strong>. <?= session()->errors ;?>
        </div>

    <?php } ?>

<?php } ?>

<?php if (session()->has('success')) { ?>
    <?php if (is_array(session()->success)) { ?>

        <?php foreach (session()->success as $key=> $value){ ?>


            <div class="alert alert-icon alert-success" role="alert">
                <em class="icon ni ni-alert-circle"></em>
                <strong>Başarılı!</strong>. <?= $value ;?>
            </div>

        <?php } ?>

    <?php } else { ?>
        <div class="alert alert-icon alert-success" role="alert">
            <em class="icon ni ni-alert-circle"></em>
            <strong>Uyarı!</strong>.<?= session()->success ;?>
        </div>

    <?php } ?>

<?php } ?>
