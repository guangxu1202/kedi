<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo content('info');?>">
<meta name="keywords" content="<?php echo content('keywords');?>">
<title><?php echo content('title');?>_<?php echo cateinfo('cate_title_seo');?>_<?php echo webinfo('web_name');?></title>
<link href="<?php cmspath('template');?>/style/common.css" rel="stylesheet" type="text/css" />
<script src="<?php cmspath('template');?>/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.q_body ul li').click(function(){
		$index=$('.q_body ul li').index(this);
		$(this).addClass('focus').siblings().removeClass('focus');
		$('.show_q_body').find('#body').eq($index).show().siblings().hide();
	});
});
</script>
</head>
<body>
<?php $this->display('head',1,1);?>

<div class="banner">
	<ul class="sub_banner">
		<li class="b1">
			<img src="<?php cmspath('template');?>/images/b_joinus.jpg">
		</li>
	</ul>
</div>

<div class="wrap">
	<div class="innerWrap one clearfix">
		<div class="i_main">
			<div class="guide">
				<?php position(); ?> > <?php echo content('style_title');?>
			</div>
            <div class="g_title news_title"><?php echo get_cate(out_id());?></div>
            <div class="g_wrap min500">
            	<div class="gw_head"><?php echo date('Y-m-d',content('updatetime'));?> <?php echo content('style_title');?></div>
                <?php if(out_id()<>62){?>
                <div class="job_list">
                   <ul>
                    <li><span>招聘职位:</span><?php echo content('jobnum');?></li>
                    <li><span>隶属部门:</span><?php echo content('zwyq');?></li>
                    <li><span>工作地点:</span><?php echo content('jopaddress');?></li>
                    <li><span>截止日期:</span><?php echo content('joblasttime');?></li>
                   </ul>
                </div>
                <?php }?>
				<div class="gw_body">
					<?php echo content('content');?>
				</div>
                
			</div>
		</div>
	</div>
</div>


<?php $this->display('foot',1,1);?>
</body>
</html>