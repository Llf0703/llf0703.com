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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/css/mdui.min.css">
    <style>.hljs-comment,.hljs-quote{color:#8e908c}.hljs-variable,.hljs-template-variable,.hljs-tag,.hljs-name,.hljs-selector-id,.hljs-selector-class,.hljs-regexp,.hljs-deletion{color:#c82829}.hljs-number,.hljs-built_in,.hljs-builtin-name,.hljs-literal,.hljs-type,.hljs-params,.hljs-meta,.hljs-link{color:#f5871f}.hljs-attribute{color:#eab700}.hljs-string,.hljs-symbol,.hljs-bullet,.hljs-addition{color:#718c00}.hljs-title,.hljs-section{color:#4271ae}.hljs-keyword,.hljs-selector-tag{color:#8959a8}.hljs{display:block;overflow-x:auto;background:#fff;color:#4d4d4c;padding:.5em}.hljs-emphasis{font-style:italic}.hljs-strong{font-weight:700}</style>
    <style>.toc{overflow-y:auto}.toc>.toc-list{overflow:hidden;position:relative}.toc>.toc-list li{list-style:none}.toc-list{margin:0;padding-left:10px}a.toc-link{color:currentColor;height:100%}.is-collapsible{max-height:1000px;overflow:hidden;transition:all .3s ease-in-out}.is-collapsed{max-height:0}.is-position-fixed{position:fixed!important;top:0}.is-active-link{font-weight:700}.is-active-link::before{background-color:#54bc4b}</style>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/katex@0.10.0/dist/katex.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/katex@0.10.0/dist/katex.min.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/katex@0.10.0/dist/contrib/auto-render.min.js"></script>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.min.css'); ?>">
    <style>.lg-bg-gray{background-color:#bbb;text-shadow:none}.lg-bg-red{background-color:#e74c3c;text-shadow:none}.lg-bg-orange{background-color:#e67e22;text-shadow:none}.lg-bg-yellow{background-color:#f1c40f;text-shadow:none}.lg-bg-green{background-color:#5eb95e;text-shadow:none}.lg-bg-bluelight{background-color:#3498db;text-shadow:none}.lg-bg-purple{background-color:#8e44ad;text-shadow:none}.lg-bg-bluedark{background-color:#2e468c;text-shadow:none}</style>
</head>
<body class="mdui-theme-accent-pink">
<div id="process"></div>