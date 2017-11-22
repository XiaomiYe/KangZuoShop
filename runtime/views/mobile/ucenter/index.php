<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>康卓商城 个人中心</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
    <script type="text/javascript" src="<?php echo $this->getWebViewPath()."javascript/mui2/js/mui.picker.js";?>"></script>
	<link rel="stylesheet" href="<?php echo $this->getWebViewPath()."javascript/weui/weui.css";?>">
	<link rel="stylesheet" href="<?php echo $this->getWebViewPath()."javascript/mui2/css/mui.min.css";?>">
	<link rel="stylesheet" href="<?php echo $this->getWebViewPath()."javascript/mui2/css/icons-extra.css";?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getWebViewPath()."javascript/mui2/css/app.css";?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getWebViewPath()."javascript/mui2/css/common.css";?>"/>
	<script type="text/javascript" src="<?php echo IUrl::creatUrl("")."resource/scripts/jquery-3.1.1.min.js";?>"></script>
	<script type="text/javascript" src="<?php echo $this->getWebViewPath()."javascript/mui/js/mui.min.js";?>"></script>
	<script type="text/javascript" src="<?php echo IUrl::creatUrl("")."resource/scripts/common.js";?>"></script>
</head>

<body>

<nav class="mui-bar mui-bar-tab">
	<a class="mui-tab-item" href="/">
		<span class="mui-icon mui-icon-home"></span>
		<span class="mui-tab-label">首页</span>
	</a>
	<a class="mui-tab-item" href="<?php echo IUrl::creatUrl("/simple/cart");?>">
		<span class="mui-icon mui-icon-extra mui-icon-extra-cart"></span>
		<span class="mui-tab-label">购物车</span>
	</a>
	<a class="mui-tab-item mui-active" href="<?php echo IUrl::creatUrl("/ucenter");?>">
		<span class="mui-icon mui-icon-contact"></span>
		<span class="mui-tab-label">个人中心</span>
	</a>
</nav>

<div class="mui-content">
	<div id="tabbar-with-contact" class="mui-control-content mui-active">
		<header class="mui-bar mui-bar-nav" style="background-color: #5cc2d0;">
			<h1 class="mui-title" style="color:#fff">用 户 中 心</h1>
		</header>
        <ul class="mui-table-view mui-table-view-striped mui-table-view-condensed" style="margin-top:52px">
        	<li class="mui-table-view-cell">
        		<div class="mui-slider-cell">
        			<div class="oa-contact-cell mui-table">
        			    <a class="mui-navigate-right" href="<?php echo IUrl::creatUrl("/ucenter/info");?>">
        					<div class="oa-contact-avatar mui-table-cell">
        						<img src="<?php echo $this->user['head_ico'] ?>" width="60px" height="60px"/>
        					</div>
        					<div class="oa-contact-content mui-table-cell">
        						<!-- <div class="mui-clearfix">
        							<span class="oa-contact-position mui-h6"> &nbsp; &nbsp; 会员号：2456465</span>
        						</div> -->
        						<p class="oa-contact-email mui-h5"> &nbsp; &nbsp;会员昵称：<?php echo $user['username']; ?></p>
        						<p class="oa-contact-email mui-h6"> &nbsp; &nbsp; 推荐人 &nbsp;： XXx</p>
										<p class="oa-contact-email mui-h6"> &nbsp; &nbsp; 消费总额 &nbsp;： <?php echo isset($user_order_consume)?$user_order_consume:"";?>元</p>
        					</div>
        		        </a>
        			</div>
        		</div>
        	</li>
        </ul>

        <div class="weui-grids" style="margin-top: 10px;">

            <a href="<?php echo IUrl::creatUrl("/ucenter/order");?>" class="weui-grid" style="background: #fff;padding: 10px 10px">
                <div class="weui-grid__icon">
                    <img src="<?php echo $this->getWebViewPath()."javascript/weui/";?>icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">我的订单</p>
            </a>

            <a href="<?php echo IUrl::creatUrl("/ucenter/balance");?>" class="weui-grid" style="background: #fff;padding: 10px 10px">
                <div class="weui-grid__icon">
                    <img src="<?php echo $this->getWebViewPath()."javascript/weui/";?>icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">我的成长币</p>
            </a>

            <a href="<?php echo IUrl::creatUrl("/ucenter/promote_qrcode");?>" class="weui-grid" style="background: #fff;padding: 10px 10px">
                <div class="weui-grid__icon">
                    <img src="<?php echo $this->getWebViewPath()."javascript/weui/";?>icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">二维码</p>
            </a>

            <a href="<?php echo IUrl::creatUrl("/ucenter/promote_user_list");?>" class="weui-grid" style="background: #fff;padding: 10px 10px">
                <div class="weui-grid__icon">
                    <img src="<?php echo $this->getWebViewPath()."javascript/weui/";?>icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">我的会员</p>
            </a>

            <a href="<?php echo IUrl::creatUrl("/ucenter/withdraw");?>" class="weui-grid" style="background: #fff;padding: 10px 10px">
                <div class="weui-grid__icon">
                    <img src="<?php echo $this->getWebViewPath()."javascript/weui/";?>icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">xxxx</p> 
            </a>

            <a href="<?php echo IUrl::creatUrl("/ucenter/promote_qrcode_choose");?>" class="weui-grid" style="background: #fff;padding: 10px 10px">
                <div class="weui-grid__icon">
                    <img src="<?php echo $this->getWebViewPath()."javascript/weui/";?>icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">/////</p>
            </a>
        </div>

        <!--h5 class="mui-content-padded">我的会员</h5>
        <div class="weui-navbar" style="position: relative;background-color: #FFF;">
          <div class="weui-navbar__item weui_bar__item_on">
            已购买会员：<span class="mui-badge mui-badge-success mui-badge-inverted">525</span>
          </div>
          <div class="weui-navbar__item">
            未购买会员：<span class="mui-badge mui-badge-danger mui-badge-inverted">5</span>
          </div>
        </div>

        <ul class="mui-table-view mui-table-view-chevron">
    		<li class="mui-table-view-cell mui-media">
    			<a class="mui-navigate-right">
    				<span class="mui-icon mui-icon-location"></span>
    				<label stlye="font-size:5px">评测地址</label>
    			</a>
    		</li>
    		<li class="mui-table-view-cell mui-media">
    			<a class="mui-navigate-right">
    				<span class="mui-icon mui-icon-extra mui-icon-extra-prech"></span>
    				<label stlye="font-size: 10px;">我的消费额</label>
    			</a>
    		</li>
    	</ul-->

	</div>

</div>

<script src="<?php echo $this->getWebViewPath()."javascript/mui2/js/mui.min.js";?>"></script>
<script>
	mui.init({swipeBack:true});
	mui('nav').on('tap','a',function(){document.location.href=this.href;});
</script>
</body>
</html>