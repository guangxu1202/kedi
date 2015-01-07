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
			<img src="<?php cmspath('template');?>/images/b_tech.jpg">
		</li>
	</ul>
</div>


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
				 <?php $down=get_down_info($v['id'],'down',$table='down');?>
				<li><span class="time"><?php echo date('Y-m-d 	H:m:s',$v['updatetime']);?></span><a href="<?php echo $v['url'];?>" style="<?php echo $v['style'];?>" <?php echo $v['target'];?>><?php echo $v['style_title'];?>(<?php echo round($down['file_size']/1024,2);?>KB)</a></li>
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


<?php $this->display('foot',1,1);?>
</body>
</html>