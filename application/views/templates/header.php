<!DOCTYPE HTML>
<html>
    <head>
        <meta content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo @$description; ?>">
        <meta name="author" content="<?php echo @$author; ?>">

        <title><?php echo $title; ?> - <?php echo $site_name; ?></title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap-theme.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/common.css'); ?>" />
        <?php if (@$css): ?>
        <?php foreach ($css as $item): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/{$item}"); ?>" />
        <?php endforeach ?>
        <?php endif ?>
    </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><?php echo $site_name; ?></a>
                </div>
                <div class="navbar-collapse collapse">
                    <div class="navbar-form navbar-right">
                        <?php if ($is_login): ?>
                        <a class="btn btn-info" href="<?php echo base_url('cate'); ?>">分类</a>
                        <a class="btn btn-primary" href="<?php echo base_url('tag'); ?>">标签</a>
                        <a class="btn btn-warning" href="<?php echo base_url('post'); ?>">文章</a>
                        <a class="btn btn-danger" href="<?php echo base_url('comment'); ?>">评论</a>
                        <a class="btn btn-success" href="<?php echo base_url('loginout'); ?>">注销</a>
                        <?php else: ?>
                        <a class="btn btn-primary" href="<?php echo base_url('login'); ?>">登录</a>
                        <a class="btn btn-info" href="<?php echo base_url('register'); ?>">注册</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
