<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo cateinfo('cate_info_seo');?>">
<meta name="keywords" content="<?php echo cateinfo('cate_key_seo');?>">
<title><?php echo cateinfo('cate_title_seo');?>_<?php echo webinfo('web_name');?></title>
<link href="<?php cmspath('template');?>/style/common.css" rel="stylesheet" type="text/css" />
<script src="<?php cmspath('template');?>/js/jquery.js" type="text/javascript"></script>
</head>
<body>
<?php $this->display('head',1,1);?>
<div class="banner m15">
	<ul class="sub_banner">
		<li class="b1">
			<img src="<?php cmspath('template');?>/images/b_joinus.jpg">
		</li>
	</ul>
</div>

<?php if(out_id()==52){?>
<div class="wrap">
	<div class="col3 clearfix m15">
		<div class="new_cbox fl">
        	<!--
			<div class="title n_orange">
				<a href="<?php cmspath('job');?>/job.php?id=60" class="news_more">more</a>
				<b>校园招聘</b>
			</div>
            -->
			<div class="cbody nopadding min5">
            	<div class="c_pro_img">
                    <a href="<?php cmspath('job');?>/job.php?id=60">
                    <img src="<?php cmspath('template');?>/images/job01.jpg">
                    </a>
                </div>
				<ul class="i_news">
                	<?php 
 $fun_return=get_cate_content($cate_id='60',$limit='0,5');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<li><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],60);?></a></li>
                    <?php 
}
}?>
				</ul>
			</div>
		</div>
		<div class="new_cbox fl" style="margin-left:13px; display:inline-block;">
        	<!--
			<div class="title n_green1">
				<a href="<?php cmspath('job');?>/job.php?id=61" class="news_more">more</a>
				<b>社会招聘</b>
			</div>
            -->
			<div class="cbody nopadding min5">
            	<div class="c_pro_img">
                    <a href="<?php cmspath('job');?>/job.php?id=61">
                    <img src="<?php cmspath('template');?>/images/job02.jpg">
                    </a>
                </div>
				<ul class="i_news">
					<?php 
 $fun_return=get_cate_content($cate_id='61',$limit='0,5');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<li><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],60);?></a></li>
                    <?php 
}
}?>
				</ul>
			</div>
		</div>
		<div class="new_cbox fr">
        	<!--
			<div class="title n_blue1">
				<a href="<?php cmspath('job');?>/job.php?id=62" class="news_more">more</a>
				<b>成长在科迪</b>
			</div>
            -->
			<div class="cbody nopadding min5">
				<div class="c_pro_img">
                    <a href="<?php cmspath('job');?>/job.php?id=62">
                    <img src="<?php cmspath('template');?>/images/job03.jpg">
                    </a>
                </div>
				<ul class="i_news">
					<?php 
 $fun_return=get_cate_content($cate_id='62',$limit='0,5');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
					<li><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],60);?></a></li>
                    <?php 
}
}?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php }else{?>
<div class="wrap min500">
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
<?php }?>
<!--
<div class="wrap">
	<div class="new_cbox m15">
		<div class="title n_orange">
			<a href="<?php cmspath('job');?>/job.php?id=55" class="news_more">more</a>
			<b>招聘动态</b>
		</div>
		<div class="cbody" style="padding:20px;">
			<table class="job_table">
            	<colgroup width="50%"></colgroup>
				<tr>
					<td style="border-right:1px solid #c0c0c0;border-bottom:1px solid #c0c0c0;">
						<div class="job_box">
                        	<?php 
 $fun_return=get_cate_content($cate_id='55',$limit='0,1');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
							<b><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],60);?></a></b>
							<p>职位要求</p>
							<div class="i_jobs">
								<?php echo $v['zwyq'];?>
							</div>
                            <?php 
}
}?>
						</div>
					</td>
					<td style="border-bottom:1px solid #c0c0c0;">
						<div class="job_box">
							<?php 
 $fun_return=get_cate_content($cate_id='55',$limit='1,2');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
							<b><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],60);?></a></b>
							<p>职位要求</p>
							<div class="i_jobs">
								<?php echo $v['zwyq'];?>
							</div>
                            <?php 
}
}?>
						</div>
					</td>
				</tr>
				<tr>
					<td style="border-right:1px solid #c0c0c0;">
						<div class="job_box">
							<?php 
 $fun_return=get_cate_content($cate_id='55',$limit='2,3');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
							<b><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],60);?></a></b>
							<p>职位要求</p>
							<div class="i_jobs">
								<?php echo $v['zwyq'];?>
							</div>
                            <?php 
}
}?>
						</div>
					</td>
					<td>
						<div class="job_box">
							<?php 
 $fun_return=get_cate_content($cate_id='55',$limit='3,4');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
							<b><a title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>" <?php echo $v['target'];?> <?php if($v['style']){?>style="<?php echo $v['style'];?>"<?php }?>><?php echo cn_substr($v['title'],60);?></a></b>
							<p>职位要求</p>
							<div class="i_jobs">
								<?php echo $v['zwyq'];?>
							</div>
                            <?php 
}
}?>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
-->


<?php $this->display('foot',1,1);?>
</body>
</html>