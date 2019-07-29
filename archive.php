<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
$this->need('nav.php');
?>
<div id="pjax">
    <?php $this->header(); ?>
    <header class="intro-header relate" style="background-image: url('<?php $this->options->backgroundImage();?>');">
        <div class="mdui-container">
            <div class="post-heading">
                <h1 class="header-title">
                    <?php $this->archiveTitle(array(
                'category'  =>  _t('分类-%s'),
                'search'    =>  _t('搜索-%s'),
                'tag'       =>  _t('标签-%s'),
                'author'    =>  _t('作者-%s')
                ), '', ''); ?>
                </h1>
            </div>
        </div>
        <a class="banner-copy" href="https://www.pixiv.net/member_illust.php?mode=medium&illust_id=66094121"
            target="_blank">&copy;純粋 / Pixiv.net</a>
    </header>
    <div class="mdui-container">
        <div class="mdui-row">
            <div class="mdui-col-md-9 mdui-col-sm-12">
                <?php if ($this->have()): ?>
                <?php while($this->next()): ?>
                <?php $this->need('post-list.php'); ?>
                <?php endwhile; ?>
                <?php else: ?>
                <div class="mdui-card card-fixed mdui-hoverable">
                    <div class="mdui-card-primary">
                        <a class="mdui-card-primary-title title-fixed" href="#">没有找到结果</a>
                    </div>
                    <div class="mdui-card-content nokatex">请注意空格及大小写等。</div>
                </div>
                <?php endif; ?>
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