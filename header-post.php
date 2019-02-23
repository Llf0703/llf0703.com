<div id="pjax">
    <header class="intro-header" style="background-image: url('<?php $this->options->backgroundImage();?>')">
        <div class="container">
            <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="post-heading">
                            <h1>
                                <?php $this->title() ?>
                                <?php if ($this->category=='sol'):?>
                                <?php $this->need('luogu.php')?>
                                <?php endif;?>
                            </h1>
                            <span class="meta">@<?php $this->author(); ?> &nbsp;<?php $this->date('F j, Y'); ?></span>
                            <div class="tags post-tags"><?php $this->category('  '); ?>&nbsp;</div>
                        </div>
                    </div>
            </div>
        </div>
    </header>