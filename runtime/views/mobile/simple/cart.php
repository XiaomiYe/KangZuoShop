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
	<link href="<?php echo $this->getWebSkinPath()."css/cart.css";?>" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo IUrl::creatUrl("")."resource/scripts/jquery-3.1.1.min.js";?>"></script>
	<script type="text/javascript" src="<?php echo $this->getWebViewPath()."javascript/mui/js/mui.min.js";?>"></script>
	<script type="text/javascript" src="<?php echo IUrl::creatUrl("")."resource/scripts/common.js";?>"></script>
</head>

<body>

	<nav class="mui-bar mui-bar-tab">
		<a class="mui-tab-item" href="<?php echo IUrl::creatUrl("/site/index");?>">
			<span class="mui-icon mui-icon-home"></span>
			<span class="mui-tab-label">首页</span>
		</a>
		<a class="mui-tab-item mui-active" href="<?php echo IUrl::creatUrl("/simple/cart");?>">
			<span class="mui-icon mui-icon-extra mui-icon-extra-cart"></span>
			<span class="mui-tab-label">购物车</span>
		</a>
		<a class="mui-tab-item" href="<?php echo IUrl::creatUrl("/ucenter");?>">
			<span class="mui-icon mui-icon-contact"></span>
			<span class="mui-tab-label">个人中心</span>
		</a>
	</nav>
	<div class="mui-content">
		<div id="tabbar-with-contact" class="mui-control-content mui-active">
			<header class="mui-bar mui-bar-nav" style="background-color: #5cc2d0;">
				<h1 class="mui-title" style="color:#fff">课程清单</h1>
			</header>

		<?php if($this->goodsList){?>
		<div class="list" style="margin-top:85px">
			<ul class="mui-table-view">
				<?php foreach($this->goodsList as $key => $item){?>
				<?php $item_json = JSON::encode($item)?>
			    <li class="mui-table-view-cell mui-media">
						<div class="mui-media-header" style="height:18px">
							<div class='t-left'><?php echo isset($item['seller_info']['shortname'])?$item['seller_info']['shortname']:"";?> > </div>
			        <div class='t-right'><?php echo isset($item['status_str'])?$item['status_str']:"";?></div>
						</div>
			    	<img class="mui-media-object mui-pull-left" src="<?php echo IUrl::creatUrl("/pic/thumb/img/".$item['img']."/w/60/h/60");?>">
		    		<div class="mui-media-body">
		    			<div class="mui-numbox" data-numbox-min="1" data-numbox-max="<?php echo isset($item['student'])?$item['student']:"";?>">
								<button class="mui-btn mui-btn-numbox-minus" type="button" id="reduce" onclick='cart_reduce(<?php echo isset($item_json)?$item_json:"";?>);'>-</button>
								<input class="mui-input-numbox" type="number" value="<?php echo isset($item['count'])?$item['count']:"";?>" id="count_<?php echo isset($item['goods_id'])?$item['goods_id']:"";?>_<?php echo isset($item['product_id'])?$item['product_id']:"";?>" onchange='cartCount(<?php echo isset($item_json)?$item_json:"";?>);'>
								<button class="mui-btn mui-btn-numbox-plus" type="button" id="add" onclick='cart_increase(<?php echo isset($item_json)?$item_json:"";?>);'>+</button>
							</div>
							<p><?php echo isset($item['name'])?$item['name']:"";?></p>
							<?php if($item['spec']){?><p class="spec"><?php echo isset($item['spec'])?$item['spec']:"";?></p><?php }?>
							<p class="price"><span class="price" id="sum_<?php echo isset($item['goods_id'])?$item['goods_id']:"";?>_<?php echo isset($item['product_id'])?$item['product_id']:"";?>">&yen; <?php echo isset($item['sum'])?$item['sum']:"";?></span> </p>
		    		</div>
		    		<div class="cart-box">
		    			<a href='javascript:removeCartByJSON(<?php echo isset($item_json)?$item_json:"";?>);'><i class="icon-trash"></i></a>
		    		</div>
						<?php if($item['seller_info']['is_support_props']){?>
						<div class="mui-tip">
							此课程参与第三课优惠活动，<a href="<?php echo IUrl::creatUrl("/school/home/id/366");?>">点击领取</a>
						</div>
						<?php }?>
			    </li>
			    <?php }?>
			</ul>
		</div>

		<script language="javascript">
		document.getElementById('reduce').addEventListener('tap', function(){
			this.click();
		});
		document.getElementById('add').addEventListener('tap', function(){
			this.click();
		});
		//增加课程数量
		function cart_increase(obj)
		{
			//库存超量检查
			var countInput = $('#count_'+obj.goods_id+'_'+obj.product_id);
			if(parseInt(countInput.val()) + 1 > parseInt(obj.store_nums))
			{
				mui.toast('超过限额');
			}
			else
			{
				//countInput.val(parseInt(countInput.val()) + 1);
				countInput.change();
			}
		}

		//减少数量
		function cart_reduce(obj)
		{
			//库存超量检查
			var countInput = $('#count_'+obj.goods_id+'_'+obj.product_id);
			if(parseInt(countInput.val()) - 1 <= 0)
			{
				mui.toast('购买的数量必须大于1件');
			}
			else
			{
				//countInput.val(parseInt(countInput.val()) - 1);
				countInput.change();
			}
		}

		// 重新统计
		function cartCount(obj)
		{
			var countInput = $('#count_'+obj.goods_id+'_'+obj.product_id);
			var countInputVal = parseInt(countInput.val());
			var oldNum = countInput.data('oldNum') ? countInput.data('oldNum') : obj.count;

			//课程数大于1
			if(isNaN(countInputVal) || (countInputVal <= 0))
			{
				mui.toast('购买的数量必须大于1件');
				countInput.val(1);
				countInput.change();
			}

			//可售数量小于预设数量
			else if(countInputVal > parseInt(obj.store_nums))
			{
				mui.toast('超过限额');
				countInput.val(parseInt(obj.store_nums));
				countInput.change();
			}
			else
			{
				var diff = parseInt(countInputVal) - parseInt(oldNum);
				if(diff == 0)
				{
					return;
				}

				//修改按钮状态
				toggleSubmit("lock");
				var goods_id   = obj.product_id > 0 ? obj.product_id : obj.goods_id;
				var goods_type = obj.product_id > 0 ? "product"      : "goods";

				//更新购物车
				//alert( '<?php echo IUrl::creatUrl("/simple/joinCart");?>&goods_id=' + goods_id + '&type=' + goods_type + '&goods_num=' + diff );
				$.getJSON("<?php echo IUrl::creatUrl("/simple/joinCart");?>",{"goods_id":goods_id,"type":goods_type,"goods_num":diff,"random":Math.random()},function(content){
					if(content.isError == true)
					{
						alert(content.message);
						countInput.val(1);
						countInput.change();

						//修改按钮状态
						toggleSubmit("open");
					}
					else
					{
						var goodsId   = [];
						var productId = [];
						var num       = [];
						$('[id^="count_"]').each(function(i)
						{
							var idValue = $(this).attr('id');
							var dataArray = idValue.split("_");

							goodsId.push(dataArray[1]);
							productId.push(dataArray[2]);
							num.push(this.value);
						});

						countInput.data('oldNum',countInputVal);
						$.getJSON("<?php echo IUrl::creatUrl("/simple/promotionRuleAjax");?>",{"goodsId":goodsId,"productId":productId,"num":num,"random":Math.random()},function(content){

							// 更新数据new
							$('.cart-counter .total-price em').html( '&yen;' + content.market_sum);
							$('.cart-counter .total-save span').html( '&yen;' + content.reduce);
							$('#sum_'+obj.goods_id+'_'+obj.product_id).html('&yen;' + (obj.market_price * countInputVal));

							//修改按钮状态
							toggleSubmit('open');
						});
					}
				});
			}
		}

		//检测购买完成量
		function check_finish()
		{
			if($.trim($('.btn_pay').val()) == 'wait')
			{
				window.setInterval("check_finish()", 400);
			}
			else
			{
				window.location.href = '<?php echo IUrl::creatUrl("/simple/cart2");?>';
			}
		}

		//锁定提交
		function toggleSubmit(isOpen)
		{
			isOpen == 'open' ? $('.btn_pay').val('ok') : $('.btn_pay').val('wait');
		}

		//移除购物车
		function removeCartByJSON(obj)
		{
			var goods_id   = obj.product_id > 0 ? obj.product_id : obj.goods_id;
			var goods_type = obj.product_id > 0 ? "product"      : "goods";
			$.getJSON("<?php echo IUrl::creatUrl("/simple/removeCart");?>",{"goods_id":goods_id,"type":goods_type,"random":Math.random()},function()
			{
				window.location.reload();
			});
		}
		</script>
		<?php }else{?>
		<div class="mui-content-padded" style="margin-top:85px">
			<center>
				没有课程，<a href="<?php echo IUrl::creatUrl("/site/index");?>">去看看</a>
			<center>
		</div>
		<?php }?>
			<?php if( $this->goodsList){?>
			<div class="cart-checkout">
					<div class="cart-checkbox">

					</div>
					<div class="cart-counter">
						  <p class="total-price">合计 : <em class="">&yen; <?php echo $this->sum;?></em></p>
					</div>
				  <a href="javascript:check_finish();" id="M_Checkout" class="ui-btn-pink">结算</a>
			 </div>
			 <?php }?>

	</div>


<script src="<?php echo $this->getWebViewPath()."javascript/mui2/js/mui.min.js";?>"></script>
<script>
	mui.init({swipeBack:true});
	mui('nav').on('tap','a',function(){document.location.href=this.href;});
</script>
</body>
