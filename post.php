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
                <div class="mdui-center">
                    <span class="badge mdui-color-indigo-accent"><i class="mdui-icon material-icons index-icon">&#xe192;</i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time></span>
                    <?php if (isset($this->category)): ?><span class="badge mdui-color-pink-accent"><i class="mdui-icon material-icons index-icon">&#xe149;</i> <?php $this->category('  '); ?></span><?php endif; ?>
                    <?php if (count($this->tags)): ?><span class="badge mdui-color-blue-accent"><i class="mdui-icon material-icons index-icon">&#xe866;</i><?php $this->tags('</span> <span class="badge mdui-color-blue-accent"><i class="mdui-icon material-icons index-icon">&#xe866;</i>', true, 'none'); ?></span><?php endif; ?>
                    <?php if ($this->category=='sol'):?><?php $this->need('luogu.php')?><?php endif;?>
                </div>
            </div>
        </div>
        <a class="banner-copy" href="https://www.pixiv.net/member_illust.php?mode=medium&illust_id=66094121"
            target="_blank">&copy;純粋 / Pixiv.net</a>
    </header>
    <div class="mdui-container blog-content">
        <div class="mdui-row">
            <div class="mdui-col-md-8 mdui-col-sm-12 mdui-col-offset-md-2">
                <div style="margin-bottom: 2em">
                    <?php $lg=$this->fields->luogu;?>
                    <?php $url=$this->fields->url;?>
                    <?php if ($this->category=='sol') {?>
                        <?php if (isset($lg)) {?>
                            <a href="https://www.luogu.org/problem/<?php $this->fields->luogu();?>" target="_blank" class="mdui-btn mdui-btn-dense mdui-color-red-accent mdui-ripple"><i class="mdui-icon material-icons">&#xe157;</i> 题目链接</a>
                        <?php } elseif (isset($url)) { ?>
                            <a href="<?php $this->fields->url();?>" target="_blank" class="mdui-btn mdui-btn-dense mdui-color-red-accent mdui-ripple"><i class="mdui-icon material-icons">&#xe157;</i> 题目链接</a>
                        <?php }?>
                    <?php }?>
                    <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php $this->cid();?>" class="mdui-btn mdui-btn-dense mdui-color-blue-accent mdui-ripple"><i class="mdui-icon material-icons">&#xe3c9;</i> 编辑文章</a>
                </div>
                <article class="mdui-typo" id="post-content">
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