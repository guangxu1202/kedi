<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo content('info');?>">
<meta name="keywords" content="<?php echo content('keywords');?>">
<title><?php echo content('title');?>_<?php echo webinfo('web_name');?></title>
<link href="<?php cmspath('template');?>/style/common.css" rel="stylesheet" type="text/css" />
<script src="<?php cmspath('template');?>/js/jquery.js" type="text/javascript"></script>
</head>
<body>
<?php $this->display('head',1,1);?>



<div class="banner">
	<ul class="sub_banner">
		<li class="b1">
        	<?php if(get_pid()==8){?>
			<img src="<?php cmspath('template');?>/images/b_about.jpg">
            <?php }?>
            <?php if(get_pid()==23){?>
			<img src="<?php cmspath('template');?>/images/b_contract.jpg">
            <?php }?>
            <?php if(out_id()==31){?>
			<img src="<?php cmspath('template');?>/images/b_tech.jpg">
            <?php }?>
		</li>
	</ul>
</div>
<div class="wrap">
<?php if(out_id()==31){?>
	<div class="innerWrap one clearfix">
		
		<div class="i_main">
			<div class="guide">
            	<a href="<?php cmspath('index');?>" class="fr">退出登录</a>
            	<?php position(); ?>
            </div>
			<div class="g_title">货单管理</div>
			<div class="g_wrap">
				<div class="gw_body min5">
					<?php echo content('content');?>
				</div>
			</div>
		</div>
	</div>
<?php }else{?>
	<div class="innerWrap two clearfix">
		<div class="i_left">
        	<?php $tree=get_tpl_list_nav();?>
			<?php if($tree){?>
            <!--关于科迪-->
            <?php if(get_pid()==8){?>
			<div class="ihead"><img src="<?php cmspath('template');?>/images/about_kedi.jpg"></div>
            <?php }?>
            <!--联系我们-->
            <?php if(get_pid()==23){?>
			<div class="ihead"><img src="<?php cmspath('template');?>/images/contactus.jpg"></div>
            <?php }?>
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
			</div>
            <?php }?>
		</div>
		<div class="i_main">
			<div class="guide"><?php position(); ?></div>
			<div class="g_title"><?php echo get_cate(out_id());?></div>
			<div class="g_wrap">
				<div class="gw_body">
					<?php echo content('content');?>
				</div>
			</div>
		</div>
	</div>
<?php }?>
</div>


<?php $this->display('foot',1,1);?>
</body>
</html>