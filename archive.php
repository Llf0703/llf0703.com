<!--Remove amazeui done-->

<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
$this->need('nav.php');
$this->need('header-archive.php');
?>

<!-- content srart -->
<div class="mdui-container">
    <div class="mdui-row">
        <div class="mdui-col-md-8 mdui-col-sm-12">
            <?php if ($this->have()): ?>
            <?php while($this->next()): ?>
            <div class="mdui-card card-fixed mdui-hoverable">

                <div class="mdui-card-primary">
                  <a class="mdui-card-primary-title title-fixed" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </div>

                <div class="mdui-card-content nokatex"><?php $this->excerpt(200, '...'); ?></div>

                <div class="mdui-card-actions">
                    <span class="more"><i class="fa fa-calendar"></i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> &nbsp;&nbsp; <i class="fa fa-tags"></i> <?php $this->category('  '); ?> &nbsp;&nbsp; <a href="<?php $this->permalink() ?>#comments"><i class="fa fa-fw fa-comment"></i> <?php $this->commentsNum('%d 条评论'); ?></a></span>
                    <div class="mdui-float-right"><?php if ($this->category == 'sol'): ?><?php $this->need('luogu.php') ?><?php endif; ?></div>
                </div>
  
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <div class="mdui-card card-fixed mdui-hoverable">

                <div class="mdui-card-primary">
                  <a class="mdui-card-primary-title title-fixed" href="#">咕咕咕～</a>
                </div>

                <div class="mdui-card-content nokatex">蒟蒻Llf0703咕咕了，没准以后会添加呢</div>

                <div class="mdui-card-actions">
                    <span class="more"><i class="fa fa-calendar"></i> 在写了，快了 &nbsp;&nbsp; <i class="fa fa-tags"></i> 鸽子 &nbsp;&nbsp; <a href="#"><i class="fa fa-fw fa-comment"></i>没有评论</a></span>
                    <div class="mdui-float-right"><?php if ($this->category == 'sol'): ?><?php $this->need('luogu.php') ?><?php endif; ?></div>
                </div>
  
            </div>
            <?php endif; ?>
            <div class="page-nav">
                <div class="prev-page mdui-col-xs-6"><?php $this->pageLink('<button class="mdui-btn mdui-btn-icon mdui-ripple"><i class="mdui-icon material-icons">&#xe5c4;</i></button>'); ?></div>
                <div class="next-page mdui-col-xs-6"><?php $this->pageLink('<button class="mdui-btn mdui-btn-icon mdui-ripple"><i class="mdui-icon material-icons">&#xe5c8;</i></button>', 'next'); ?></div>
            </div>
        </div>
        <?php $this->need('sidebar.php'); ?>
    </div>
</div>

<?php $this->need('footer.php'); ?>
