<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>友情链接_<?php echo webinfo('web_name');?></title>
<link href="<?php cmspath('template');?>/style/common.css" rel="stylesheet" type="text/css" />
<script src="<?php cmspath('template');?>/js/jquery.js" type="text/javascript"></script>
<style>
.sitemap_box li{ height:auto; line-height:18px; text-indent:2em; padding:10px 10px 0px; width:200px; text-align:center; height:70px;}
.sitemap_box li a{float:none;}
.sitemap_box li img{ max-width:200px;}
.sitemap_box h2{ font-weight:700;}
.g_title{ margin-bottom:20px;}
</style>
</head>
<body>
<?php $this->display('head',1,1);?>
<div class="wrap m15 min500">
	<div class="sitemap clearfix">
	  <div class="sitemap_box">
	  	<div class="g_title">友情链接</div>
	  	<h2>视听 行业</h2>
	    <?php $logo=get_link(1,'AV');?>
        <?php if($logo){?>
            <ul class="link_logo">
            <?php 
 $fun_return=$logo;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                <li>
                    <a href="<?php echo $v['link_url'];?>" title="<?php echo $v['link_name'];?>" target="_blank">
                    <img src="<?php echo $v['link_logo'];?>"  border="0"  />
                    </a>
                </li>
                <?php 
}
}?>
            </ul>
        <?php }?>	
		<div class="clearfix m15"></div>
        
        <h2>广电 行业</h2>
	    <?php $logo=get_link(1,'广电');?>
        <?php if($logo){?>
            <ul class="link_logo">
            <?php 
 $fun_return=$logo;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                <li>
                    <a href="<?php echo $v['link_url'];?>" title="<?php echo $v['link_name'];?>" target="_blank">
                    <img src="<?php echo $v['link_logo'];?>"  border="0"  />
                    </a>
                </li>
                <?php 
}
}?>
            </ul>
        <?php }?>	
		<div class="clearfix m15"></div>
        
         <h2>安防 行业</h2>
	    <?php $logo=get_link(1,'安防');?>
        <?php if($logo){?>
            <ul class="link_logo">
            <?php 
 $fun_return=$logo;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                <li>
                    <a href="<?php echo $v['link_url'];?>" title="<?php echo $v['link_name'];?>" target="_blank">
                    <img src="<?php echo $v['link_logo'];?>"  border="0"  />
                    </a>
                </li>
                <?php 
}
}?>
            </ul>
        <?php }?>	
		<div class="clearfix m15"></div>
       
	  </div>	 
	</div><!--友情链接-->
</div>
<?php $this->display('foot',1,1);?>
</body>
</html>