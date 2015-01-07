<!DOCTYPE HTML>
<html>
<head>
<title> <?php echo cateinfo('cate_title_seo');?>_<?php echo webinfo('web_name');?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo webinfo('web_description');?>">
<meta name="keywords" content="<?php echo webinfo('web_keywords');?>">
<link href="<?php cmspath('template');?>/style/common.css" rel="stylesheet" type="text/css" />
<script src="<?php cmspath('template');?>/js/jquery.js" type="text/javascript"></script>
<style>
.cbody{ height:235px;}
</style>
</head>
<body>
<?php $this->display('head',1,1);?>

<div class="banner m15">
	<ul class="sub_banner">
    	<?php if(out_id()==59 or out_id()==58 or out_id()==57){?>
        <li class="b1">
       	 <img src="<?php cmspath('template');?>/images/b_exp.jpg">
        </li>
        <?php }?>
        <?php if(out_id()==24 or out_id()==28 or out_id()==29 or out_id()==31){?>
        <li class="b1">
			<img src="<?php cmspath('template');?>/images/b_tech.jpg">
		</li>
        <?php }?>
        <?php if(out_id()!=59 and out_id()!=58 and out_id()!=57 and out_id()!=24 and out_id()!=28 and out_id()!=29 and out_id()!=31){?>
		<li class="b1">
			<img src="<?php cmspath('template');?>/images/b_news.jpg">
		</li>
        <?php }?>
	</ul>
</div>


<?php if(out_id()!=4){?>

<div class="wrap">
	<div class="innerWrap clearfix" style="padding-right:0;">
		<div class="i_left">
        	<?php $tree=get_tpl_list_nav();?>
			<?php if($tree){?>
            <!--新闻中心-->
            <?php if(get_pid()==4){?>
            	<div class="ihead"><img src="<?php cmspath('template');?>/images/news.jpg"></div>
            <?php }?>
             <!--技术服务-->
            <?php if(get_pid()==24){?>
            	<div class="ihead"><img src="<?php cmspath('template');?>/images/service.jpg"></div>
            <?php }?>
            
            <!--典型应用-->
            <?php if(get_pid()==57){?>
            	<div class="ihead"><img src="<?php cmspath('template');?>/images/typical.jpg"></div>
            <?php }?>
           	<!--<?php echo get_cate(out_id());?>--> 
			<div class="ibody">
				<ul class="i_newlist">
                 <?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
                 <li class="<?php echo $nav['class'];?>"><p><a href="<?php echo $nav['url'];?>" title="<?php echo $nav['cate_name'];?>"><?php echo $nav['cate_name'];?> </a> </p></li>
                 <?php 
}
}?>
				</ul>
                <?php if(get_pid()==24){?>
                	<dl class="pri_line">
                    	<dt>用服专线</dt>
                        <dd>0411-84753820-818</dd>
                        <dd>0411-84753820-878</dd>
                        <dd>0411-84753820-808</dd>
                    </dl>
                <?php }?>
			</div>
            <?php }?>
		</div>
		<div class="i_main">
			<div class="guide"><?php position(); ?></div>
			<div class="newsbox">
				<div class="title"><span><?php echo get_cate(out_id());?></span></div>
				<div class="news_list">
					<ul class="i_news">
                    	<?php 
 $fun_return=list_article();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                        <li><span class="time"><?php echo date('Y-m-d 	H:m:s',$v['updatetime']);?></span><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> style="<?php echo $v['style'];?>"><?php echo $v['title'];?></a></li>
						
                        <?php 
}
}?>
					</ul>
                    <div class="list_page">
                        <div class="page_fy">
                        <?php echo list_page();?>
                        </div>
                    </div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<?php }else{?>

<div class="wrap">

	<div class="col3 clearfix m15">
		<div class="new_cbox fl">
			<div class="title n_orange">
				<a href="<?php cmspath('article');?>/article.php?id=9" class="news_more">more</a>
				<b>企业动态</b>
			</div>
			<div class="cbody">
				<dl class="topic">
                	<?php 
 $fun_return=get_cate_content($cate_id='9',$limit='0,1');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<dt><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?>><img src="<?php echo $v['thumb_pic'];?>" width="120" height="80"></a></dt>
					<dd class="c_tit"><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],34);?></a></dd>
					<dd class="c_des">
						<p><?php echo  cn_substr($v['cate_syn'],170);?></p>
					</dd>
                    <?php 
}
}?>
				</dl>
				<ul class="i_news">
                	<?php 
 $fun_return=get_cate_content($cate_id='9',$limit='1,5');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<li><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],60);?></a></li>
                    <?php 
}
}?>
				</ul>
			</div>
		</div>
		<div class="new_cbox fl" style="margin-left:13px; display:inline-block;">
			<div class="title n_green1">
				<a href="<?php cmspath('article');?>/article.php?id=26" class="news_more">more</a>
				<b>行业资讯</b>
			</div>
			<div class="cbody">
				<dl class="topic">
					<?php 
 $fun_return=get_cate_content($cate_id='26',$limit='0,1');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<dt><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?>><img src="<?php echo $v['thumb_pic'];?>" width="120" height="80"></a></dt>
					<dd class="c_tit"><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],34);?></a></dd>
					<dd class="c_des">
						<p><?php echo  cn_substr($v['cate_syn'],170);?></p>
					</dd>
                    <?php 
}
}?>
				</dl>
				<ul class="i_news">
					<?php 
 $fun_return=get_cate_content($cate_id='26',$limit='1,5');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<li><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],60);?></a></li>
                    <?php 
}
}?>
				</ul>
			</div>
		</div>
		<div class="new_cbox fr">
			<div class="title n_blue1">
				<a href="<?php cmspath('article');?>/article.php?id=25" class="news_more">more</a>
				<b>展会活动</b>
			</div>
			<div class="cbody">
				<dl class="topic">
					<?php 
 $fun_return=get_cate_content($cate_id='25',$limit='0,1');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<dt><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?>><img src="<?php echo $v['thumb_pic'];?>" width="120" height="80"></a></dt>
					<dd class="c_tit"><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],34);?></a></dd>
					<dd class="c_des">
						<p><?php echo  cn_substr($v['cate_syn'],170);?></p>
					</dd>
                    <?php 
}
}?>
				</dl>
				<ul class="i_news">
					<?php 
 $fun_return=get_cate_content($cate_id='25',$limit='1,5');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<li><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],60);?></a></li>
                    <?php 
}
}?>
				</ul>
			</div>
		</div>
	</div>
    <!--
	<div class="col2 clearfix m15">
		<div class="new_cbox fl">
			<div class="title n_orange">
				<a href="<?php cmspath('article');?>/article.php?id=26" class="news_more">more</a>
				<b>行业资讯</b>
			</div>
			<div class="cbody">
				<dl class="topic">
                	<?php 
 $fun_return=get_cate_content($cate_id='26',$limit='0,1');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<dt><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?>><img src="<?php echo $v['thumb_pic'];?>" width="105" height="105"></a></dt>
					<dd class="c_tit"><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],75);?></a></dd>
					<dd class="c_des">
						<p><?php echo  cn_substr($v['cate_syn'],240);?></p>
					</dd>
                    <?php 
}
}?>
				</dl>
				<ul class="i_news">
					<?php 
 $fun_return=get_cate_content($cate_id='26',$limit='1,5');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<li><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],60);?></a></li>
                    <?php 
}
}?>
				</ul>
			</div>
		</div>
		<div class="new_cbox fr">
			<div class="title n_orange">
				<a href="<?php cmspath('article');?>/article.php?id=27" class="news_more">more</a>
				<b>产品发布</b>
			</div>
			<div class="cbody">
				<dl class="topic">
					<?php 
 $fun_return=get_cate_content($cate_id='27',$limit='0,1');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<dt><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?>><img src="<?php echo $v['thumb_pic'];?>" width="105" height="105"></a></dt>
					<dd class="c_tit"><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],75);?></a></dd>
					<dd class="c_des">
						<p><?php echo  cn_substr($v['cate_syn'],240);?></p>
					</dd>
                    <?php 
}
}?>
				</dl>
				<ul class="i_news">
					<?php 
 $fun_return=get_cate_content($cate_id='27',$limit='1,5');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<li><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],60);?></a></li>
                    <?php 
}
}?>
				</ul>
			</div>
		</div>
	</div>
    -->
</div>
<?php }?>
<?php $this->display('foot',1,1);?>
</body>
</html>