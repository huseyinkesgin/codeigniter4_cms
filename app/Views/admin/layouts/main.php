<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?= public_images('favicon.png'); ?>" ?>
    <!-- Page Title  -->
    <title>Registration | DashLite Admin Template</title>

    <?= public_assets('dashlite.css?ver=2.2.0') ?>
    <?= public_assets('theme.css?ver=2.2.0') ?>

    <?php $this->renderSection('style'); ?>
</head>
<body class="nk-body bg-white npc-general pg-auth">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
<?php $this->renderSection('content'); ?>

    </div>
    <!-- main @e -->
</div>


<?= public_script('/bundle.js?ver=2.2.0') ?>
<?= public_script('scripts.js?ver=2.2.0') ?>

<?php $this->renderSection('script'); ?>
</body>
</html>
