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
        <a class="banner-copy" href="https://www.pixiv.net/member_illust.php?mode=medium&illust_id=53788580"
            target="_blank">&copy;NIK / Pixiv.net</a>
    </header>
    <div class="mdui-container">
        <div class="mdui-row card-first">
            <div class="mdui-col-md-9 mdui-col-sm-12">
                <?php while($this->next()): ?>
                <div class="mdui-card card-fixed mdui-hoverable">

                    <div class="mdui-card-primary">
                        <a class="mdui-card-primary-title title-fixed"
                            href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                    </div>

                    <div class="mdui-card-content nokatex"><?php $this->excerpt(200, '...'); ?></div>

                    <div class="mdui-card-actions">
                        <span class="more">
                            <i class="mdui-icon material-icons index-icon">access_time</i> <time
                                datetime="<?php $this->date('c'); ?>"
                                itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> &nbsp;&nbsp;
                            <i class="mdui-icon material-icons index-icon">bookmark</i> <?php $this->category('  '); ?>
                            &nbsp;&nbsp;
                            <a href="<?php $this->permalink() ?>#comments"><i
                                    class="mdui-icon material-icons index-icon">comment</i>
                                <?php $this->commentsNum('%d 条评论'); ?></a>
                        </span>
                        <div class="mdui-float-right">
                            <?php if ($this->category=='sol'):?><?php $this->need('luogu.php')?><?php endif;?></div>
                    </div>

                </div>
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
                    <div class="prev-page mdui-col-xs-6">
                        <?php $this->pageLink('<button class="mdui-btn mdui-btn-icon mdui-ripple"><i class="mdui-icon material-icons">&#xe5c4;</i></button>'); ?>
                    </div>
                    <div class="next-page mdui-col-xs-6">
                        <?php $this->pageLink('<button class="mdui-btn mdui-btn-icon mdui-ripple"><i class="mdui-icon material-icons">&#xe5c8;</i></button>', 'next'); ?>
                    </div>
                </div>
            </div>
            <?php $this->need('sidebar.php'); ?>
        </div>
    </div>
    <?php $this->need('footer.php'); ?>