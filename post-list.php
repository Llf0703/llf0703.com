<div class="mdui-card card-fixed mdui-hoverable">

    <div class="mdui-card-primary">
        <a class="mdui-card-primary-title title-fixed" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
    </div>

    <div class="mdui-card-content nokatex">
        <?php $all = Typecho_Plugin::export(); if(array_key_exists('Soso', $all['activated'])): ?>
            <?php $this->excerpts($this); ?>
        <?php else: ?>
            <?php $this->excerpt(200, '...'); ?>
        <?php endif; ?>
    </div>

    <div class="mdui-card-actions">
        <span class="more">
            <i class="mdui-icon material-icons index-icon">&#xe192;</i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> &nbsp;&nbsp;
            <i class="mdui-icon material-icons index-icon">&#xe866;</i> <?php $this->category('  '); ?> &nbsp;&nbsp;
            <a href="<?php $this->permalink() ?>#comments"><i class="mdui-icon material-icons index-icon">&#xe0b9;</i> <?php $this->commentsNum('%d 条评论'); ?></a>
        </span>
        <div class="mdui-float-right">
            <?php if ($this->category=='sol'):?><?php $this->need('luogu.php')?><?php endif;?></div>
    </div>

</div>