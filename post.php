<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('head.php');
$this->need('nav.php');
$this->need('header-post.php');
?>

<div id="no-ad"></div>
    <!-- content start -->
    <div class="container">
    <div class="am-g am-g-fixed blog-fixed">
        <div class="am-u-lg-12 am-u-sm-12">
        <?php $lg=$this->fields->luogu;?>
        <?php $url=$this->fields->url;?>
        <?php if ($this->category=='sol') {?>
            <?php if (isset($lg)) {?>
                <a class="am-btn am-btn-danger" href="https://www.luogu.org/problemnew/show/<?php $this->fields->luogu();?>" target="_blank">
                    <i class="am-icon-paper-plane"></i>
                    题目链接
                </a>
            <?php } elseif (isset($url)) { ?>
                <a class="am-btn am-btn-danger" href="<?php $this->fields->url();?>" target="_blank">
                    <i class="am-icon-paper-plane"></i>
                    题目链接
                </a>
            <?php } ?>
        <?php } ?>
        <?php if ($this->date->timeStamp<=1542722220):?>
        <a class="am-btn am-btn-primary" href="https://2018.llf0703.com/p/<?php $this->slug();?>.html" target="_blank">
            <i class="am-icon-share-alt"></i>
            在旧版博客中查看
        </a>
        <?php endif;?>
        <a class="am-btn am-btn-primary" href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php $this->cid();?>"><i class="am-icon-sliders"></i></a>
            <article class="am-article blog-article-p article-trigger">
                <div id="post-content" class="am-article-bd">
                    <?php $this->content(); ?>
                </div>
            </article>
            <hr>
        </div>

    </div>
    <blockquote class="copy">
<p><strong>本作品采用 <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.zh" target="_blank">知识共享署名-相同方式共享 4.0 国际许可协议</a> 进行许可。
<br> 
This work is licensed under a <a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">CC BY-SA 4.0 International License</a> .</strong>
<br>
<strong>本文链接：</strong><a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a>
</p>
</blockquote>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- after-post -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6222039443661594"
     data-ad-slot="4381955140"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    <?php $this->need('comments.php'); ?>
    <div id="directory-content" class="directory-content">
        <div id="directory"></div>
    </div>
<script src="https://lib.baomitu.com/headroom/0.9.4/headroom.min.js"></script>
<script>
var postDirectoryBuild=function(){var b=function a(l,h){var k=[],e=typeof h==="object",g=typeof h==="string",j,f,d;for(f=0,d=l.length;f<d;f++){j=l[f];if((j.nodeType===1||j.nodeType===9)&&(!h||e&&h.test(j.tagName.toLowerCase())||g&&j.tagName.toLowerCase()===h)){k.push(j)}}return k},c=function(e,f,r){var n=[],m=[],h,p,d,j,l,s,o,g,k,q;h=(function(i,C,A){var w=b(i.childNodes,/^h\d$/),x=[],v=1,B=1,z=0,D=1,t="directory"+(Math.random()+"").replace(/\D/,""),B,y,u;while(w.length){u=w.shift();C.push(u.innerHTML);y=+u.tagName.match(/\d/)[0];if(y>v){x.push(1);B+=1}else{if(y===B||y>B&&y<=v){x.push(0);B=B}else{if(y<B){x.push(y-B);B=y}}}z+=x[x.length-1];v=y;u.id=u.id||(t+D++);A.push(u.id)}if(z!==0&&x[0]===1){x[0]=0}return x})(e,n,m);j=p=document.createElement("ul");q=document.createElement("span");q.style="color:#F38181;font-weight:600;";q.innerHTML="目录";p.appendChild(q);dirNum=[];for(g=0,k=h.length;g<k;g++){d=h[g];if(d===1){l=document.createElement("ul");if(!j.lastElementChild){j.appendChild(document.createElement("li"))}j.lastElementChild.appendChild(l);j=l;dirNum.push(0)}else{if(d<0){d*=2;while(d++){if(d%2){dirNum.pop()}j=j.parentNode}}}dirNum[dirNum.length-1]++;s=document.createElement("li");o=document.createElement("a");o.href="#"+m[g];o.innerHTML=!r?n[g]:dirNum.join(".")+" "+n[g];s.appendChild(o);j.appendChild(s)}f.appendChild(p)};c(document.getElementById("post-content"),document.getElementById("directory"),false)};postDirectoryBuild();
</script>
<script>
    var postDirectory = new Headroom(document.getElementById("directory-content"), {
    tolerance: 5,
    offset: 240,
    classes: {
        initial: "initial",
        pinned: "pinned",
        unpinned: "unpinned"
    }
});
postDirectory.init();
</script>
<?php $this->need('footer.php'); ?>