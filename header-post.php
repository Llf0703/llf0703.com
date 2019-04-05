<div id="pjax">
    <header class="intro-header" style="background-image: url('<?php $this->options->backgroundImage();?>');">
        <div class="mdui-container">
            <div class="post-heading">
                <h1 class="header-title">
                    <?php $this->title() ?>
                </h1>
                <div class="header-more"><i class="fa fa-calendar"></i> <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y-m-d'); ?></time> &nbsp;&nbsp; <i class="fa fa-tags"></i> <?php $this->category('  '); ?> &nbsp;&nbsp; <a href="<?php $this->permalink() ?>#comments"><i class="fa fa-fw fa-comment"></i> <?php $this->commentsNum('%d 条评论'); ?></a>
                &nbsp;&nbsp; <?php if ($this->category=='sol'):?><?php $this->need('luogu.php')?><?php endif;?></div>
            </div>
        </div>
    </header>