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
                <h1 class="header-title">404</h1>
            </div>
        </div>
        <a class="banner-copy" href="https://www.pixiv.net/member_illust.php?mode=medium&illust_id=53788580"
            target="_blank">&copy;NIK / Pixiv.net</a>
    </header>
    <div class="mdui-container">
        <img src="https://vjudge.net/static/images/beiju.jpg">
    </div>
</div>
<?php $this->need('footer.php'); ?>