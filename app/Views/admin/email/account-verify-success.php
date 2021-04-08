<?php $this->extend('admin/email/main'); ?>

<?php $this->section('content'); ?>

<table role="presentation" class="main">
    <tr>
        <td class="wrapper">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>
                        <p><?= lang('EmailTemplate.account.success.hello') ?> <?= $user->getFullName(); ?>,</p>
                        <p><?= lang('EmailTemplate.account.success.content') ?></p>
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                            <tbody>
                            <tr>
                                <td align="left">
                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" target="_blank"><?= lang('EmailTemplate.account.success.button') ?></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <p><?= lang('EmailTemplate.account.success.alt_content') ?></p>
                        <p><?= lang('EmailTemplate.account.success.thanks') ?></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<?php $this->endSection(); ?>
