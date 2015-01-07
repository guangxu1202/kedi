<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo cateinfo('cate_info_seo');?>">
<meta name="keywords" content="<?php echo cateinfo('cate_key_seo');?>">
<title><?php echo cateinfo('cate_title_seo');?>_<?php echo webinfo('web_name');?></title>
<link href="<?php cmspath('template');?>/style/common.css" rel="stylesheet" type="text/css" />
<script src="<?php cmspath('template');?>/js/jquery.js" type="text/javascript"></script>
<style>
.col3 .cbody{ height:270px;}
</style>
</head>
<body>
<?php $this->display('head',1,1);?>

<div class="banner m15">
	<ul class="sub_banner">
		<li class="b1">
        	<?php if(get_pid()==11){?>
			<img src="<?php cmspath('template');?>/images/b_ercpro.jpg">
            <?php }?>
            <?php if(get_pid()==13){?>
			<img src="<?php cmspath('template');?>/images/b_proview.jpg">
            <?php }?>
            <?php if(get_pid()==14){?>
			<img src="<?php cmspath('template');?>/images/b_savepro.jpg">
            <?php }?>
            <?php if(get_pid()!=14 or get_pid()!=13 or get_pid()!=11){?>
            <img src="<?php cmspath('template');?>/images/b_procenter.jpg">
            <?php }?>
		</li>
	</ul>
</div>

<?php if(out_id()!=5){?>
<div class="wrap min500 m15">
<form name="form1" action="<?php cmspath('search');?>">
	<div class="guide m15">
		产品分类
        
            <select class="pro_sort">
                <option>--广电产品--</option>
                <option>--视听产品--</option>
                <option>--安防产品--</option>
            </select>
            <input type="text" class="t normal w480" style="width:640px;"  name="key">
            <input type="submit" value="搜索" class="yellow_btn">
	</div>
   </form>
	<div class="pro_mlist">
		<div class="prod pro_01">
        <?php $tree=get_tpl_list_nav();?>
		<?php if($tree){?>
        
        	<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
			<dl <?php if($nav['id']==out_id()){?>class="open"<?php }?>>
				<dt><?php echo $nav['cate_name'];?>(<?php echo $nav['content_num'];?>)</dt>
                <?php 
 $fun_return=list_product($nav['id']);if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
				<dd>
					<img src="<?php echo $v['thumb_pic'];?>" width="145" height="87" class="pro_imgs">
					<p class="p_title"><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?>><?php echo $v['title'];?></a></p>
					<p class="p_sort"><?php echo $v['cate_content'];?><?php echo date('Y-m-d',$v['updatetime']);?></p>
				</dd>
				<?php 
}
}?>
			</dl>
            <?php 
}
}?>
		<?php }?>
		</div>
	</div>
</div>
<?php }else{?>
<div class="wrap">
	<div class="col3 clearfix m15">
		<div class="new_cbox fl">
			<!--<div class="title n_blue">
				<a href="<?php cmspath('product');?>/product.php?id=11" class="news_more">more</a>
				<b>广电产品</b>
			</div>
            -->
			<div class="cbody nopadding">
            	<?php $tree=get_tpl_list_nav('11');?>
				<?php if($tree){?>
				<div class="c_pro_img"><img src="<?php cmspath('template');?>/images/a1.jpg"></div>
				<ul class="i_news" style="padding-left:10px;">
                	<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
					<li><a class="<?php echo $nav['class'];?>" href="<?php echo $nav['url'];?>" <?php echo $nav['target'];?> title="<?php echo $nav['cate_name'];?>"><?php echo $nav['cate_name'];?>(<?php echo $nav['content_num'];?>)</a></li>
					<?php 
}
}?>
				</ul>
                <?php }?>
			</div>
		</div>
		<div class="new_cbox fl" style="margin-left:13px; display:inline-block;">
        	<!--
			<div class="title n_d_green">
				<a href="<?php cmspath('product');?>/product.php?id=13" class="news_more">more</a>
				<b>视听产品</b>
			</div>
            -->
			<div class="cbody nopadding">
				<?php $tree=get_tpl_list_nav('13');?>
				<?php if($tree){?>
				<div class="c_pro_img"><img src="<?php cmspath('template');?>/images/a2.jpg"></div>
				<ul class="i_news" style="padding-left:10px;">
                	<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
					<li><a class="<?php echo $nav['class'];?>" href="<?php echo $nav['url'];?>" <?php echo $nav['target'];?> title="<?php echo $nav['cate_name'];?>"><?php echo $nav['cate_name'];?>(<?php echo $nav['content_num'];?>)</a></li>
					<?php 
}
}?>
				</ul>
                <?php }?>
			</div>
		</div>
		<div class="new_cbox fr">
        	<!--
			<div class="title n_green">
				<a href="<?php cmspath('product');?>/product.php?id=14" class="news_more">more</a>
				<b>安防产品</b>
			</div>
            -->
			<div class="cbody nopadding">
				<?php $tree=get_tpl_list_nav('14');?>
				<?php if($tree){?>
				<div class="c_pro_img"><img src="<?php cmspath('template');?>/images/a3.jpg"></div>
				<ul class="i_news" style="padding-left:10px;">
                	<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
					<li><a class="<?php echo $nav['class'];?>" href="<?php echo $nav['url'];?>" <?php echo $nav['target'];?> title="<?php echo $nav['cate_name'];?>"><?php echo $nav['cate_name'];?>(<?php echo $nav['content_num'];?>)</a></li>
					<?php 
}
}?>
				</ul>
                <?php }?>
			</div>
		</div>
	</div>
	<div class="clearfix m15">
		<div class="new_cbox">
			<div class="title n_orange">
				<b>产品推荐</b>
			</div>
			<div class="cbody nopadding">
            	<div class="iprolist">
                	<ul class="clearfix">
                    	<?php 
 $fun_return=get_cate_content($cate_id='5',$limit='0,4');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                    	<li>
                        	<a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><img src="<?php echo $v['thumb_pic'];?>" width="221" height="137" class="pro_imgs"></a>
                            <p class="p_title"><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],200);?></a></p>
                        </li>
                        <?php 
}
}?>
                    </ul>
                </div>
				
			</div>
		</div>
	</div>
</div>


<?php }?>
<?php $this->display('foot',1,1);?>
</body>
</html>