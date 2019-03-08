<div id="pjax">
    <header class="intro-header" style="background-image: url('<?php $this->options->backgroundImage();?>')">
        <div class="mdui-container">
            <div class="mdui-row">
                <div class="post-heading">
                    <h1 style="margin-left:16px;"> <!--字不对齐我浑身难受-->
                    <?php $this->archiveTitle(array(
                    'category'  =>  _t('分类-%s'),
                    'search'    =>  _t('搜索-%s'),
                    'tag'       =>  _t('标签-%s'),
                    'author'    =>  _t('作者-%s')
                    ), '', ''); ?>
                    </h1>
                </div>
            </div>
        </div>
    </header>