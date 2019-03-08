<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
$this->need('nav.php');
?>

<div id="pjax">
    <header class="intro-header" style="background-image: url('<?php $this->options->backgroundImage(); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>404</h1>
                        <!-- <hr class="small"> -->
                        <!--<span class="subheading"><?php $this->options->description() ?></span>-->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
    <div class="am-g am-g-fixed blog-fixed">
        <div class="am-u-lg-12 am-u-sm-12">
            <article class="am-article blog-article-p article-trigger">
                <div id="post-content" class="am-article-bd">
                    <img src="https://vjudge.net/static/images/beiju.jpg">
                    <div id="vcomments"></div>
                </div>
            </article>
            <hr>
        </div>

    </div>
    </div>
    <script src="https://cdn1.lncld.net/static/js/3.0.4/av-min.js"></script>
    <script src='https://unpkg.com/valine/dist/Valine.min.js'></script>
    <script>
        new Valine({
            el: '#vcomments',
            appId: 'F3FpnUQBuRdpuGADMdaFVosr-gzGzoHsz',
            appKey: 'sItEyL1cToUEFplRsthkA8sj'
        })
    </script>
<?php $this->need('footer.php'); ?>