
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>亿乐3.0对接中转站</title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="//cdnjscn.b0.upaiyun.com/libs/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="http://yf.yu1044.com/usr/themes/default/grid.css">
    <link rel="stylesheet" href="http://yf.yu1044.com/usr/themes/default/style.css">

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <meta name="description" content="亿乐3.0对接中转站- Powered by 地狱网络工作室" />
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog">当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>.</div>
<![endif]-->

<header id="header" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="site-name col-mb-12 col-9">
                            <a id="logo" href="./">亿乐3.0对接中转站</a>
        	    <p class="description">Powered by 地狱网络工作室</p><br>
                        </div>
        </div><!-- end .row -->
    </div>
</header><!-- end #header -->
<div id="body">
    <div class="container">
        <div class="row">

    
    

<div class="col-mb-12 col-12" id="main" role="main">
	        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="./">欢迎使用亿乐3.0对接中转站</a></h2>
            <div class="post-content" itemprop="articleBody">
    			<p><b><br>当你看到此页面时，表示节点正常运行！</b></p><p>本机IP：<a href="./"><?php echo $_SERVER['SERVER_ADDR']; ?></a>（可能会收到CDN影响！！）</p><p>此测试站由<strong><a href="http://www.sr132.cn">地狱网络工作室</a></strong>开发并开源分享！</p>            </div>
        </article>
	
    </div><!-- end #main-->

        </div><!-- end .row -->
		<div class="row">

    
    

<div class="col-mb-12 col-12" id="main" role="main">
	        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="./">中转站对接教程：</a></h2>
            <div class="post-content" itemprop="articleBody">
    			<p><b>本中转站使用了PHP的POST提交技术，并且会返回结果json信息。详细对接步骤如下：</b></p><p>1.代刷网后台添加商品时选择：【自定义访问URL/POST】</p><p>2.url填写：<?php echo $_SERVER['HTTP_HOST']; ?>/api.php</p><p>3.POST填写：【url=[社区网址]&id=[对接token]&key=[社区密匙]&gid=[对接商品ID]&num=[下单数量]&value1=[input]&value2=[input2]&value1=[input3]&value2=[input4]】</p><p>注意：没有下单value请不要乱填！！！</p><p>4.返回结果【需要有接收结果的API才能看到哦！】</p></div>
        </article>
	
    </div><!-- end #main-->

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; 2019 <a href="http://dj.sr132.cn/">亿乐3.0对接中转站</a>.
    由 <a href="http://www.sr132.cn/">地狱网络工作室</a> 强力开发开源分享.
</footer><!-- end #footer -->

</body>
</html>
