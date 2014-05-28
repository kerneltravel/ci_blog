<!DOCTYPE HTML>
<html>
    <head>
        <meta content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo @$description; ?>">
        <meta name="author" content="<?php echo @$author; ?>">

        <title><?php echo $title; ?> - 多用户博客</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap-theme.min.css'); ?>" />
        <?php if (@$css): ?>
            <?php foreach ($css as $item): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/{$item}"); ?>" />
            <?php endforeach ?>
        <?php endif ?>
    </head>
    <body>
