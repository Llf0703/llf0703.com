<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
$this->need('nav.php');
?>
<div id="pjax">
    <?php $this->header(); ?>
    <header class="intro-header relate" style="background-image: url('<?php $this->options->backgroundImage(); ?>');">
        <div class="mdui-container">
            <div class="site-heading">
                <h1 class="header-title"><?php $this->options->backgroundText(); ?></h1>
            </div>
        </div>
        <a class="banner-copy" href="https://www.pixiv.net/member_illust.php?mode=medium&illust_id=66094121"
            target="_blank">&copy;純粋 / Pixiv.net</a>
    </header>
    <div class="mdui-container">
        <div class="mdui-row">
            <div class="mdui-col-md-9 mdui-col-sm-12">
                <?php while($this->next()): ?>
                <?php $this->need('post-list.php'); ?>
                <?php endwhile; ?>
                <div id="ad" class="mdui-card card-fixed mdui-hoverable">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6222039443661594"
                        data-ad-slot="3168698407" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div class="page-nav">
                    <?php $this->pageNav('<span><i class="mdui-icon material-icons">&#xe5c4;</i></span>', '<span><i class="mdui-icon material-icons">&#xe5c8;</i></span>', 1, '...', 'wrapClass=pager&prevClass=prev&nextClass=next'); ?>
                </div>
            </div>
            <?php $this->need('sidebar.php'); ?>
        </div>
    </div>
    <?php $this->need('footer.php'); ?>