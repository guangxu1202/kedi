<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo content('info');?>">
<meta name="keywords" content="<?php echo content('keywords');?>">
<title><?php echo content('title');?>_<?php echo cateinfo('cate_title_seo');?>_<?php echo webinfo('web_name');?></title>

<link href="<?php cmspath('template');?>/style/common.css" rel="stylesheet" type="text/css" />
<script src="<?php cmspath('template');?>/js/jquery.js" type="text/javascript"></script>

</head>
<body>
<?php $this->display('head',1,1);?>

<div class="banner">
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



<div class="wrap">
	<div class="innerWrap one clearfix">
		
		<div class="i_main">
			<div class="guide">
				<?php position(); ?> > <?php echo content('style_title');?>
			</div>
			<div class="pro_title"><?php echo content('title');?></div>
			<div class="pro_imain">
            <?php 
 $fun_return=album('pics');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                <a rel="zoom" title="<?php echo $v['alt'];?>" href="<?php echo $v['pic'];?>" rev="<?php echo $v['pic'];?>">
                <img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['alt'];?>" />
                </a>
            <?php 
}
}?>
				
			</div>
			<div class="pro_mlist">
				<div class="m_headtop m_headtop1">
					<ul>
						<li onclick="ctab(this,1)" class="selected">产品概述</li>
						<li onclick="ctab(this,2)">产品特征</li>
						<li onclick="ctab(this,3)">技术参数</li>
						<li onclick="ctab(this,4)">订购指南</li>
					</ul>
				</div>
				<div class="prod pro_01">
					<div class="pro_detail">
						<?php echo content('cpgs');?>
					</div>
				</div>
				<div class="prod pro_02">
					<div class="pro_detail">
						<?php echo content('content');?>
					</div>
					
				</div>
				<div class="prod pro_03">
					<div class="pro_detail">
						<?php echo content('jscs');?>
					</div>
				</div>
				<div class="prod pro_04">
					<div class="pro_detail">
						<?php echo content('dgzn');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php $this->display('foot',1,1);?>
</body>
</html>