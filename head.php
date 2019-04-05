<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php $this->options->faviconUrl(); ?>">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/amazeui.min.css'); ?>">

    <link href="https://lib.baomitu.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css">

    <link rel="stylesheet" type="text/css" href="/usr/plugins/CodeStyle/markdown/styles/tomorrow.css" />

    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/customui.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>">
    <style>
    .lg-bg-gray {
        background-color: #bbb;
        text-shadow: none;
    }
    .lg-bg-red {
        background-color: #e74c3c;
        text-shadow: none;
    }
    .lg-bg-orange {
        background-color: #e67e22;
        text-shadow: none;
    }
    .lg-bg-yellow {
        background-color: #f1c40f;
        text-shadow: none;
    }
    .lg-bg-green {
        background-color: #5eb95e;
        text-shadow: none;
    }
    .lg-bg-bluelight {
        background-color: #3498db;
        text-shadow: none;
    }
    .lg-bg-purple {
        background-color: #8e44ad;
        text-shadow: none;
    }
    .lg-bg-bluedark {
        background-color: #2E468C;
        text-shadow: none;
    }
</style>
    <?php $this->header(); ?>
</head>

<body class="mdui-theme-primary-indigo mdui-theme-accent-pink">