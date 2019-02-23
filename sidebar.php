<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="am-u-lg-4 am-u-sm-10 am-u-lg-offset-0 am-u-sm-offset-0 sidebar-container">
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                分类列表
            </span>
        </div>
        <div class="sidebar-list">
        <ul class="sidebar-list-body sidebar-list-items">
        <?php $this->widget('Widget_Metas_Category_List')
        ->parse('<li class="sidebar-list-item"><a href="{permalink}" title="{description}">{name}  ({count})</a></li>'); ?>
        </ul>
        </div>
    </section>
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                标签列表
            </span>
        </div>
        <div class="tags">
            <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 50))->to($tags); ?>
            <?php while($tags->next()): ?>
                <a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a>
            <?php endwhile; ?>
        </div>
    </section>
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                归档列表
            </span>
        </div>
        <div class="sidebar-list">
        <ul class="sidebar-list-body sidebar-list-items">
        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li class="sidebar-list-item"><a href="{permalink}">{date}  ({count})</a></li>'); ?>
        </ul>
        </div>
    </section>
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                最新评论
            </span>
        </div>
        <div class="sidebar-list">
        <ul class="sidebar-list-body sidebar-list-items">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); $cnt=1;?>
        <?php while($comments->next() && $cnt<=5): ?>
            <li class="sidebar-list-item"><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?> : <?php $comments->excerpt(35, '...'); ?><br> —— in [<?php $comments->title();?>]</a></li>
            <?php $cnt=$cnt+1; ?>
        <?php endwhile; ?>
        </ul>
        </div>
    </section>
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                友链
            </span>
        </div>
        <div class="sidebar-list">
        <ul class="sidebar-list-body sidebar-list-items">
            <li class="sidebar-list-item"><a href="https://www.cnblogs.com/alessandro/" target="_blank">曾经JX的希望-CYC大佬</a></li>
            <li class="sidebar-list-item"><a href="https://duanyll.com/" target="_blank">CW的未来-DYL大佬</a></li>
<li class="sidebar-list-item"><a href="https://www.cnblogs.com/terrasse" target="_blank">现在JX的希望-WZX大佬</a></li>
<li class="sidebar-list-item"><a href="https://www.cnblogs.com/pelom" target="_blank">OI游戏都吊打我的-ZYT大佬</a></li>
<li class="sidebar-list-item"><a href="https://www.cnblogs.com/ofnoname" target="_blank">OI和ChO都很强的-LJQ大佬</a></li>
            <li class="sidebar-list-item"><a href="http://castersoft.com/" target="_blank">Castersoft Games</a></li>
        </ul>
        </div>
    </section>
    <section>
        <div class="sidebar-header">
            <span class="sidebar-header-title">
                广告
            </span>
        </div>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-6222039443661594"
            data-ad-slot="2249781672"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </section>
</div>