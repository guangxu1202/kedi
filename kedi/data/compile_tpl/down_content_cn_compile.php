<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo content('info');?>">
<meta name="keywords" content="<?php echo content('keywords');?>">
<title><?php echo content('title');?>_<?php echo cateinfo('cate_title_seo');?>_<?php echo webinfo('web_name');?></title>
<link href="<?php cmspath('template');?>/style/common.css" rel="stylesheet" type="text/css" />
<script src="<?php cmspath('template');?>/js/jquery.js" type="text/javascript"></script>
<style>
.soft_info li{ line-height:24px; padding-left:40px;}
</style>

</head>
<body>
<?php $this->display('head',1,1);?>
<div class="banner m15">
	<ul class="sub_banner">
		<li class="b1">
			<img src="<?php cmspath('template');?>/images/b_tech.jpg">
		</li>
	</ul>
</div>

<div class="wrap min500">
	<div class="innerWrap one clearfix">
		
		<div class="i_main">
			<div class="guide"><?php position(); ?> > <?php echo content('style_title');?></div>
			<div class="g_title news_title"><?php echo get_cate(out_id());?></div>
			<div class="g_wrap">
				<div class="gw_head"><?php echo date('Y-m-d',content('updatetime'));?> <?php echo content('style_title');?></div>
				<div class="gw_body">
                	<ul class="soft_info">
                     <?php $down=content('down');?>
                      <li><span>文件类型:</span><?php echo $down['type'];?></li>
                      <li><span>文件大小:</span><?php echo $down['size'];?>KB</li>
                      <li><span>文件下载:</span><a href="<?php echo $down['url'];?>" target="_blank" style="color:#cc0000;text-decoration:underline;">点击下载</a></li>
                     </ul><!--下载信息-->
					<?php echo content('content');?>
				</div>
			</div>
		</div>
	</div>
</div>



<?php $this->display('foot',1,1);?>
</body>
</html>