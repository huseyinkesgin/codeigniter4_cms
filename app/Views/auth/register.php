<?php $this->extend('admin/layouts/main'); ?>

<?php $this->section('content'); ?>

<div class="nk-wrap nk-wrap-nosidebar">
    <div class="nk-content ">
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="#" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="<?= public_images('logo.png') ?>" srcset="<?= public_images('logo2x.png') ?> 2x" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="<?= public_images('logo-dark.png') ?>" srcset="<?= public_images('logo-dark.png') ?> 2x" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title"><?= lang_register('view.title'); ?></h5>
                        </div>
                    </div><!-- .nk-block-head -->

                    <?= $this->include('admin/layouts/partials/errors') ?>

                    <form action="<?php echo base_url(route_to('auth_register')); ?>" method="post">
                        <div class="form-group">
                            <label class="form-label" for="first_name"><?= lang_register('view.first_name') ?></label>
                            <input type="text" class="form-control form-control" id="first_name" name="first_name">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="sur_name"><?= lang_register('view.sur_name') ?></label>
                            <input type="text" class="form-control form-control" id="sur_name" name="sur_name">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email"><?= lang_register('view.email'); ?></label>
                            <input type="text" class="form-control form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password"><?= lang_register('view.password'); ?></label>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control" id="password" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="password2"><?= lang_register('view.password2'); ?></label>
                            <div class="form-control-wrap">
                                <input type="password" class="form-control form-control" id="password2" name="password2">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-control-xs custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox">
                                <label class="custom-control-label" for="checkbox"><?= lang_register('view.agree'); ?></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary btn-block"><?= lang_register('view.button'); ?></button>
                        </div>
                    </form><!-- form -->
                    <div class="form-note-s2 pt-4"> <?= lang_register('view.bottom_text'); ?> <a href="#"><strong><?= lang_register('view.sign_in'); ?></strong></a>
                    </div>

                </div><!-- .nk-block -->
                <div class="nk-block nk-auth-footer">
                    <div class="nk-block-between">
                        <ul class="nav nav-sm">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms & Condition</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Help</a>
                            </li>
                            <li class="nav-item dropup">
                                <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><small>English</small></a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="language-list">
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="<?= public_images('flags/english.png') ?>"  alt="" class="language-flag">
                                                <span class="language-name">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="<?= public_images('flags/spanish.png') ?>" alt="" class="language-flag">
                                                <span class="language-name">Español</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="<?= public_images('flags/french.png') ?>" alt="" class="language-flag">
                                                <span class="language-name">Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="<?= public_images('flags/turkey.png') ?>" alt="" class="language-flag">
                                                <span class="language-name">Türkçe</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul><!-- nav -->
                    </div>
                    <div class="mt-3">
                        <p>&copy; 2019 DashLite. All Rights Reserved.</p>
                    </div>
                </div><!-- nk-block -->
            </div><!-- nk-split-content -->
            <div class="nk-split-content nk-split-stretch bg-abstract"></div><!-- nk-split-content -->
        </div><!-- nk-split -->
    </div>
    <!-- wrap @e -->
</div>

<?php $this->endSection(); ?>

