<div class="mdui-card card-fixed mdui-hoverable">

    <div class="mdui-card-primary">
        <a class="mdui-card-primary-title title-fixed" href="<?php $this->permalink() ?>"><?php $this->sticky(); ?> <?php $this->title() ?></a>
    </div>

    <div class="mdui-card-content nokatex content-fixed">
        <?php $all = Typecho_Plugin::export(); if(array_key_exists('Soso', $all['activated'])): ?>
            <?php $this->excerpts($this); ?>
        <?php else: ?>
            <?php $this->excerpt(200, '...'); ?>
        <?php endif; ?>
    </div>

    <div class="mdui-card-actions more">
            <span class="badge mdui-color-indigo-accent"><i class="mdui-icon material-icons index-icon">&#xe192;</i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time></span>
            <?php if (isset($this->category)): ?><span class="badge mdui-color-pink-accent"><i class="mdui-icon material-icons index-icon">&#xe149;</i> <?php $this->category('  '); ?></span><?php endif; ?>
            <?php if (count($this->tags)): ?><span class="badge mdui-color-blue-accent"><i class="mdui-icon material-icons index-icon">&#xe866;</i><?php $this->tags('</span> <span class="badge mdui-color-blue-accent"><i class="mdui-icon material-icons index-icon">&#xe866;</i>', true, 'none'); ?></span><?php endif; ?>
        <div class="mdui-float-right">
            <?php if ($this->category=='sol'):?><?php $this->need('luogu.php')?><?php endif;?></div>
    </div>

</div>