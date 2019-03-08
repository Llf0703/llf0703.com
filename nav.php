<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>">Llf0703</a>
            <?php if($this->options->searchPage): ?>
                <a class="navbar-mobile-search" href="<?php $this->options->searchPage(); ?>">
                    <span class="am-icon-search"></span>
                </a>
            <?php endif;?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="huxblog_navbar">
            <div class="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php $this->options->siteUrl(); ?>" class="nav-active">博客</a>
                    </li>
                    <li>
                        <a href="https://pro.llf0703.com/" target="_blank">项目</a>
                    </li>
                    <li>
                        <a href="https://about.llf0703.com/" target="_blank">关于</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <li>
                        <a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
                    </li>
                    <?php endwhile; ?>
                    <li>
                        <a href="https://2018.llf0703.com/" target="_blank">2018</a>
                    </li>
                    <li>
                        <a href="<?php $this->options->adminUrl(); ?>">管理</a>
                    </li>
                    <?php if($this->options->searchPage): ?>
                    <li>
                        <a class="am-icon-search navbar-search" href="<?php $this->options->searchPage(); ?>"></a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>