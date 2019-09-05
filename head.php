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
    <link rel="shortcut icon" href="<?php $this->options->faviconUrl(); ?>">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="stylesheet" href="https://cdn.llf0703.com/mdui/css/mdui.min.css">
    <link rel="stylesheet" href="https://cdn.llf0703.com/tocbot/tocbot.min.css">
    <link rel="stylesheet" href="https://cdn.llf0703.com/highlight/css/tomorrow.min.css">
    <link rel="stylesheet" href="https://cdn.llf0703.com/katex/katex.min.css">
    <script type="text/javascript" src="https://cdn.llf0703.com/katex/katex.min.js"></script>
    <script type="text/javascript" src="https://cdn.llf0703.com/katex/contrib/auto-render.min.js"></script>
    <link rel="stylesheet" href="https://cdn.llf0703.com/css/main.min.css">
</head>
<body class="mdui-theme-accent-pink">
<div id="process"></div>