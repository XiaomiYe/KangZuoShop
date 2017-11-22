<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>康卓商城 我要提现</title>
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
                <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    			<h1 class="mui-title" style="color:#fff"><?php echo $this->title;?></h1>
    		</header>

            <?php $callback = IUrl::creatUrl('/ucenter/account_log');?>
            <link href="<?php echo $this->getWebSkinPath()."css/ucenter.css";?>" rel="stylesheet" type="text/css" />


            <h5 class="mui-content-padded" style="margin-top:55px">我的成长币</h5>
            <div class="mui-card">

                <ul class="mui-table-view mui-table-view-chevron">
					<li class="mui-table-view-cell">
						<a class="mui-navigate">总成长币： <i class="mui-pull-right update"><span class="ordbigbt-price">￥<?php echo isset($balance_count)?$balance_count:"";?></span></i></a>
					</li>
					<li class="mui-table-view-cell">
						<a class="mui-navigate">可提现： <i class="mui-pull-right update"><span class="ordbigbt-price">￥<?php echo isset($balance_1)?$balance_1:"";?></span></i></a>
					</li>
					<li class="mui-table-view-cell">
						<a class="mui-navigate">不可提现： <i class="mui-pull-right update"><span class="ordbigbt-price">￥<?php echo isset($balance_2)?$balance_2:"";?></span></i></a>
					</li>
                </ul>

            </div>
            
            <div class="mui-content-padded" style="margin-top:30px">
                <center>
                    <button type="button" class="mui-btn mui-btn-primary mui-btn-block" id="withdraw" onclick="document.location.href='<?php echo IUrl::creatUrl("/ucenter/withdraw");?>'" 
                    style="width: 90%;margin:10px 10px 10px;padding: 10px 15px;border: 1px solid #5cc2d0;background-color: #5cc2d0;">申请提现</button>
                </center>
            </div>
            
            <div class="mui-content-padded" style="margin-top:30px">
                <center>
                    <button type="button" class="mui-btn mui-btn-primary mui-btn-block" id="withdraw_list" onclick="document.location.href='<?php echo IUrl::creatUrl("/ucenter/balance_list");?>'" 
                    style="width: 90%;margin:10px 10px 10px;padding: 10px 15px;border: 1px solid #5cc2d0;background-color: #5cc2d0;">成长币记录</button>
                </center>
            </div>
            
            <div class="mui-content-padded" style="margin-top:30px">
                <center>
                    <button type="button" class="mui-btn mui-btn-primary mui-btn-block" id="withdraw_list" onclick="document.location.href='<?php echo IUrl::creatUrl("/ucenter/withdraw_list");?>'" 
                    style="width: 90%;margin:10px 10px 10px;padding: 10px 15px;border: 1px solid #5cc2d0;background-color: #5cc2d0;">提现记录</button>
                </center>
            </div>
            
    	</div>

    </div>

<script src="<?php echo $this->getWebViewPath()."javascript/mui2/js/mui.min.js";?>"></script>
<script>
	mui.init({swipeBack:true});
	mui('nav').on('tap','a',function(){document.location.href = this.href;});
</script>
</body>
</html>