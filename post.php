<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
$this->need('nav.php');
?>
<div id="pjax">
    <?php $this->header(); ?>
    <header class="intro-header relate" style="background-image: url('<?php $this->options->backgroundImage();?>');">
        <div class="mdui-container">
            <div class="post-heading" style="text-align:center">
                <h1 class="header-title mdui-center">
                    <?php $this->title() ?>
                </h1>
                <div class="header-more mdui-center"><i class="mdui-icon material-icons index-icon">access_time</i>
                    <time datetime="<?php $this->date('c'); ?>"
                        itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> &nbsp;&nbsp;
                    <i class="mdui-icon material-icons index-icon">bookmark</i> <?php $this->category('  '); ?>
                    &nbsp;&nbsp;
                    <a href="<?php $this->permalink() ?>#comments"><i
                            class="mdui-icon material-icons index-icon">comment</i>
                        <?php $this->commentsNum('%d 条评论'); ?></a>
                    &nbsp;&nbsp; <?php if ($this->category=='sol'):?><?php $this->need('luogu.php')?><?php endif;?>
                </div>
            </div>
        </div>
        <a class="banner-copy" href="https://www.pixiv.net/member_illust.php?mode=medium&illust_id=53788580"
            target="_blank">&copy;NIK / Pixiv.net</a>
    </header>
    <div class="mdui-container blog-content">
        <div class="mdui-row">
            <div class="mdui-col-md-8 mdui-col-sm-12 mdui-col-offset-md-2">
                <article class="blog-article" id="post-content">
                    <?php $this->content(); ?>
                </article>
                <div class="copy">
                    <p><strong>本作品采用 <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.zh"
                                target="_blank">知识共享署名-相同方式共享 4.0 国际许可协议</a> 进行许可。
                            <br>
                            This work is licensed under a <a rel="license"
                                href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">CC BY-SA 4.0
                                International License</a> .</strong>
                        <br>
                        <strong>本文链接：</strong><a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a>
                    </p>
                </div>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- after-post -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6222039443661594"
                    data-ad-slot="4381955140" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="mdui-col-md-2 mdui-hidden-sm-down sticky">
                <div id="toc"></div>
            </div>
        </div>
    </div>
    <div class="mdui-container">
        <div class="mdui-row">
            <div class="mdui-col-md-8 mdui-col-sm-12 mdui-col-offset-md-2">
                <?php $this->need('comments.php'); ?>
            </div>
        </div>
    </div>
    <?php $this->need('footer.php'); ?>