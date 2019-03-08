<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->footer(); ?>

<script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>

<script>
function loadscript(url, callback){

var script = document.createElement ("script")

script.type = "text/javascript";

if (script.readyState){

    script.onreadystatechange = function(){

        if (script.readyState == "loaded" || script.readyState == "complete"){

            script.onreadystatechange = null;

            callback();

        }

    };

} else {

    script.onload = function(){

        callback();

    };

}

script.src = url;

document.getElementsByTagName("head")[0].appendChild(script);

}

loadscript('/usr/plugins/CodeStyle/markdown/highlight.pack.js',function () { 

hljs.initHighlighting();

});
</script>

<script>
$(function(){
    setTimeout(function(){
        if ($('#ad').height() == 0)
            $('#no-ad').html("检测到您已屏蔽广告，或因网络原因广告未能成功加载。<br> 希望您能将本站添加入白名单，点几个您感兴趣的广告吧。<a href=\"/p/how-to-add-my-blog-to-white-list.html\" target=\"_blank\">如何添加白名单？</a>")
        },1000);
});
</script>

<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

</div>

<a class="mdui-fab mdui-fab-fixed mdui-ripple mdui-color-theme-accent fab-fixed" href="#"><i class="mdui-icon material-icons">arrow_upward</i></a>

<footer class="blog-footer">
    <ul class="list-inline text-center">
	    <li>
            <a href="https://github.com/Llf0703" target="_blank">
            <span class="am-icon-btn am-icon-md am-icon-github footer-icon"></span>
        </li>
    </ul>
    <div class="blog-text-center"> 
    <a href="https://pro.llf0703.com/" target="_blank">项目</a> | 
    <a href="https://2018.llf0703.com/" target="_blank">2018</a> | 
    <a href="https://about.llf0703.com" target="_blank">关于</a> |
    <a href="/sitemap.xml">Site Map</a> <br> 
    &copy; 2017-<?php echo date('Y'); ?>  <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> <a href="https://creativecommons.org/licenses/by-sa/4.0/" rel="license" target="_blank"> <img src="https://img.llf0703.com/by-sa.svg" alt="Creative Commons License"> </a> <br> 
    Powered by &nbsp;&nbsp;<a href="http://www.typecho.org" target="_blank"><img src="https://img.llf0703.com/typecho-logo.svg" class="footer-logo-typecho"></a> <a href="https://www.cloudflare.com" target="_blank"><img src="https://img.llf0703.com/cloudflare-logo.svg" class="footer-logo"></a><br>
    Load: <?php echo timer_stop();?> | Server Time: <?php date_default_timezone_set("PRC");echo date("Y-m-d H:i:s");?> | Build: <a href="https://github.com/Llf0703/llf0703.com/commit/a141c219c14c23652450a8792523029f17221458" target="_blank">a141c21</a>
    </div>
</footer>
<script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.js"></script>
<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
<script src="<?php $this->options->themeUrl('js/nav.js'); ?>"></script>
<script>
$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
    container: '#pjax',
    fragment: '#pjax',
    timeout: 8000
})
$(document).on('pjax:start', function() { NProgress.start(); });
$(document).on('pjax:end',   function() { NProgress.done(); });
</script>
</body>
</html>