<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
html,body {height:100%;width:100%;}
.mui-content,html,body {background-color:#fff;}
dd {margin-left:0px;}
.mui-btn-div {clear:both;padding-top: 20px;}
.mui-btn-block {width:80%;height:35px;line-height:17px;border-radius:20px;margin: 0px auto;margin-top: 15px;background:linear-gradient(to right,#ff9638,#ff4b2b);}
.f14 {font-size:1rem;letter-spacing: 1px;}
</style>
<?php $msg = IReq::get('msg') ? IReq::get('msg') : '输入错误'?>
<div class="error wrapper clearfix" style="margin-top:45px;">
  <table class="form_table prompt_3 f_l"  style="color:#666;">
    <col width="250px" />
    <col />
    <dt>
      <dd>
        <p class="mt_10" style="text-align:center;margin-top:20px;">
          <strong class="f14" style="color:#000;"><?php echo htmlspecialchars($msg,ENT_QUOTES);?></strong></p>
        </dd>
      <dd valign="top" style="text-align:center;margin-top:20px;">
        <img src="<?php echo $this->getWebSkinPath()."images/front/cry2.png";?>" width="122" height="66"/>
      </dd>
      </dt>
      <dt>
        <dd>
          <p class="" style="color:#666;text-align:center;margin-top:20px;">
          <?php if($msg == '您尚未绑定任何学习通'){?>
          <div class="mui-btn-div"><a href="<?php echo IUrl::creatUrl("/site/products/id/1980");?>" class="mui-btn mui-btn-primary mui-btn-block" id="confirm">快来买一本吧</a></div>
          <?php }else{?>
          <div class="mui-btn-div"><a href="<?php echo IUrl::creatUrl("/site/index");?>" class="mui-btn mui-btn-primary mui-btn-block">返回首页</a></div>
          <?php }?>
        </p>
        </dd>
      </dt>
    </table>
  </div>
