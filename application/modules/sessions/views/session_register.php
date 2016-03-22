<!doctype html>

<!--[if lt IE 7]>
<html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <title>
        <?php
        if ($this->mdl_settings->setting('custom_title') != '') {
            echo $this->mdl_settings->setting('custom_title');
        } else {
            echo 'InvoicePlane';
        } ?>
    </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="robots" content="NOINDEX,NOFOLLOW">

    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/default/img/favicon.png">

    <link href="<?php echo base_url(); ?>assets/default/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/default/css/custom.css" rel="stylesheet">

</head>

<body>

<noscript>
    <div class="alert alert-danger no-margin"><?php echo lang('please_enable_js'); ?></div>
</noscript>

<br>

<div class="container">

    <div id="login"
         class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

        <div class="row"><?php $this->layout->load_view('layout/alerts'); ?></div>

        <?php if ($login_logo) { ?>
            <img src="<?php echo base_url(); ?>uploads/<?php echo $login_logo; ?>" class="login-logo img-responsive">
        <?php } else { ?>
            <h1><?php echo lang('register'); ?></h1>
        <?php } ?>

        <form class="form-horizontal" method="post"
              action="<?php echo site_url($this->uri->uri_string()); ?>">

            <div class="form-group">
                <div class="col-xs-12 col-sm-3">
                    <label for="username" class="control-label"><?php echo lang('username'); ?></label>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <input type="text" name="username" id="username" class="form-control"
                           placeholder="<?php echo lang('username'); ?>"<?php if (!empty($_POST['username'])) : ?> value="<?php echo $_POST['username']; ?>"<?php endif; ?>>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-3">
                    <label for="email" class="control-label"><?php echo lang('email'); ?></label>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <input type="email" name="email" id="email" class="form-control"
                           placeholder="<?php echo lang('email'); ?>"<?php if (!empty($_POST['email'])) : ?> value="<?php echo $_POST['email']; ?>"<?php endif; ?>>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-3">
                    <label for="username" class="control-label"><?php echo lang('tax_code_short'); ?></label>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <input type="text" name="tax_code" id="tax_code" class="form-control"
                           placeholder="<?php echo lang('tax_code_short'); ?>"<?php if (!empty($_POST['tax_code'])) : ?> value="<?php echo $_POST['tax_code']; ?>"<?php endif; ?>>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-3">
                    <label for="username" class="control-label"><?php echo lang('vat_id'); ?></label>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <input type="text" name="vat_id" id="vat_id" class="form-control"
                           placeholder="<?php echo lang('vat_id'); ?>"<?php if (!empty($_POST['vat'])) : ?> value="<?php echo $_POST['vat']; ?>"<?php endif; ?>>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-3">
                    <label for="password" class="control-label"><?php echo lang('password'); ?></label>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <input type="password" name="password" id="password" class="form-control"
                           placeholder="<?php echo lang('password'); ?>"<?php if (!empty($_POST['password'])) : ?> value="<?php echo $_POST['email']; ?>"<?php endif; ?>>
                </div>
            </div>
            <input type="hidden" value="1" name="account_type">
            <input type="submit" name="btn_register" class="btn btn-block btn-primary"
                   value="<?php echo lang('register'); ?>">

        </form>

        <div class="text-right">
            <small>
                <a href="<?php echo site_url('sessions/login'); ?>" class="text-muted">
                    <?php echo lang('login'); ?>
                </a>
            </small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <small>
                <a href="<?php echo site_url('sessions/passwordreset'); ?>" class="text-muted">
                    <?php echo lang('forgot_your_password'); ?>
                </a>
            </small>
        </div>

    </div>
</div>

<script type="text/javascript">
    document.getElementById("email").focus();
</script>

</body>
</html>
