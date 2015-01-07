<!DOCTYPE HTML>
<html>
<head>
<title> <?php if(webinfo('web_index_name')){?><?php echo webinfo('web_index_name');?><?php }else{?><?php echo webinfo('web_name');?><?php }?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo webinfo('web_description');?>">
<meta name="keywords" content="<?php echo webinfo('web_keywords');?>">
<link href="<?php cmspath('template');?>/style/common.css" rel="stylesheet" type="text/css" />
<script src="<?php cmspath('template');?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php cmspath('template');?>/js/jquery.innerfade.js" type="text/javascript"></script>
<script type="text/javascript">
// 首页banner
$(document).ready(
	
	function(){
	$('.banner ul').innerfade({
		speed: 1000,
		timeout: 5000,
		type: 'sequence',
		containerheight: '420px'
	});
	$('.v_statu li').hover(function(){
		$(this).parents('.pro_body').find('.inner').hide();
		$(this).parents('.pro_body').find('.'+$(this).attr('alt')).show();
	},function(){});
});

</script>
</head>
<body>
<?php $this->display('head',1,1);?>

<div class="banner">
	<ul class="sub_banner">
		<li class="b1">
			<a href="<?php cmspath('alone');?>/alone.php?id=33"><img src="<?php cmspath('template');?>/images/banner01.jpg"></a>
		</li>
		<li class="b2">
			<img src="<?php cmspath('template');?>/images/banner02.jpg">
		</li>
		<li class="b3">
			<img src="<?php cmspath('template');?>/images/banner03.jpg">
		</li>
	</ul>
</div>
<div class="home_tip m15">
	<div class="wrap">
		<b>新闻中心：</b>
        <div id="rollAD" style="height:20px; position:relative; overflow:hidden; margin-top:10px;">
            <div id="rollText">
            	<ul>
                <?php 
 $fun_return=get_cate_content($cate_id='4',$limit='0,6',$filter='头条');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                	<li>
                    	<a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo $v['title'];?></a>
                    </li>
                 <?php 
}
}?>
                </ul>
            </div>
        </div>
<script type="text/javascript">
// <![CDATA[
var textDiv = document.getElementById("rollText");
var textList = textDiv.getElementsByTagName("a");
if(textList.length > 2){
	var textDat = textDiv.innerHTML;
	var br = textDat.toLowerCase().indexOf("<br",textDat.toLowerCase().indexOf("<br")+3);
	//var textUp2 = textDat.substr(0,br);
	textDiv.innerHTML = textDat+textDat+textDat.substr(0,br);
	textDiv.style.cssText = "position:absolute; top:0";
	var textDatH = textDiv.offsetHeight;MaxRoll();
}
var minTime,maxTime,divTop,newTop=0;
function MinRoll(){
	newTop++;
	if(newTop<=divTop+20){
		textDiv.style.top = "-" + newTop + "px";
	}else{
		clearInterval(minTime);
		maxTime = setTimeout(MaxRoll,5000);
	}
}
function MaxRoll(){
	divTop = Math.abs(parseInt(textDiv.style.top));
	if(divTop>=0 && divTop<textDatH-40){
		minTime = setInterval(MinRoll,1);
	}else{
		textDiv.style.top = 0;divTop = 0;newTop=0;MaxRoll();
	}
}
// ]]>
</script>
	</div>
</div>


<div class="i_main wrap clearfix">
	<div class="row1 fl">
		<div class="pro"><a href="<?php cmspath('product');?>/product.php?id=11"><img src="<?php cmspath('template');?>/images/tab_img01.jpg"></a></div>
		<div class="pro_body">
			<h6><b>新品推荐</b></h6>
			<div class="inner inner01">
				<dl class="i_newpro">
                	<?php 
 $fun_return=get_cate_content($cate_id='63',$limit='0,1',$order_type='updatetime');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<dt><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><img src="<?php echo $v['thumb_pic'];?>" width="325" height="99"></a></dt>
					<dd>
                    	<a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],50);?></a>
                    </dd>
                    <?php 
}
}?>
				</dl>
				<div class="v_statu">
                	<ul>
                    	<li alt="inner01">01</li>
                        <li alt="inner02">02</li>
                        <li alt="inner03">03</li>
                    </ul>
                </div>
			</div>
            
            <div class="inner inner02" style="display:none">
				<dl class="i_newpro">
					<?php 
 $fun_return=get_cate_content($cate_id='63',$limit='1,1',$order_type='updatetime');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<dt><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><img src="<?php echo $v['thumb_pic'];?>" width="325" height="99"></a></dt>
					<dd>
                    	<a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],50);?></a>
                    </dd>
                    <?php 
}
}?>
				</dl>
				<div class="v_statu">
                	<ul>
                    	<li alt="inner01">01</li>
                        <li alt="inner02">02</li>
                        <li alt="inner03">03</li>
                    </ul>
                </div>
			</div>
            
            <div class="inner inner03" style="display:none">
				<dl class="i_newpro">
					<?php 
 $fun_return=get_cate_content($cate_id='63',$limit='2,1',$order_type='updatetime');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<dt><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><img src="<?php echo $v['thumb_pic'];?>" width="325" height="99"></a></dt>
					<dd>
                    	<a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],50);?></a>
                    </dd>
                    <?php 
}
}?>
				</dl>
				<div class="v_statu">
                	<ul>
                    	<li alt="inner01">01</li>
                        <li alt="inner02">02</li>
                        <li alt="inner03">03</li>
                    </ul>
                </div>
			</div>
            
		</div>
	</div>
	<div class="row2 fl">
		<div class="pro"><a href="<?php cmspath('product');?>/product.php?id=13"><img src="<?php cmspath('template');?>/images/tab_img02.jpg"></a></div>
		<div class="pro_body">
			<h6><b>典型应用</b></h6>
			<div class="inner">
				<ul class="i_news">
					<?php 
 $fun_return=get_cate_content($cate_id='57',$limit='0,6',$order_type='updatetime');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                    	<li><em><?php echo date('Y-m-d',$v['updatetime']);?></em><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],45);?></a></li>
                    <?php 
}
}?>
				</ul>
			</div>
		</div>
	</div>
	<div class="row3 fr">
		<div class="pro"><a href="<?php cmspath('product');?>/product.php?id=14"><img src="<?php cmspath('template');?>/images/tab_img03.jpg"></a></div>
		<div class="pro_body">
			<h6><b>展会活动</b></h6>
			<div class="inner">
            	<?php 
 $fun_return=get_cate_content($cate_id='25',$limit='0,1',$order_type='updatetime');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
				<div class="i_video">
					<a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?>><img src="<?php echo $v['thumb_pic'];?>" width="120" height="80"></a>
				</div>
                
				<dl class="inner_video">
					<dt title="<?php echo $v['title'];?>"><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?>><?php echo $v['title'];?></a></dt>
					<!--<dd><?php echo cn_substr($v['content'],100);?></dd>-->
				</dl>
                <?php 
}
}?>
				<ul class="i_news">
					<?php 
 $fun_return=get_cate_content($cate_id='25',$limit='1,2',$order_type='updatetime');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                    	<li><em><?php echo date('Y-m-d',$v['updatetime']);?></em><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],50);?></a></li>
                    <?php 
}
}?>
				</ul>
			</div>
		</div>
		</div>
	</div>
</div>



<script type="text/javascript">
// 首页banner
$('ID or class of the element containing the fading objects').innerfade({
	animationtype: Type of animation 'fade' or 'slide' (Default: 'fade'),
	speed: Fadingspeed in milliseconds or keywords (slow, normal or fast)(Default: 'normal'),
	timeout: Time between the fades in milliseconds (Default: '2000'),
	type: Type of slideshow: 'sequence', 'random' or 'random_start' (Default: 'sequence'),
	containerheight: Height of the containing element in any css-height-value (Default: 'auto')
	runningclass: CSS-Class which the container get’s applied (Default: 'innerfade')
});
</script>
<?php $this->display('foot',1,1);?>
</body>
</html>
