<!DOCTYPE HTML>
<html>
<head>
<title> search_<?php echo webinfo('web_name');?> </title>
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<link href="<?php cmspath('template');?>/style/common.css" rel="stylesheet" type="text/css" />
<script src="<?php cmspath('template');?>/js/jquery.js" type="text/javascript"></script>

</head>
<body>

<?php $this->display('head',1,1);?>

<div class="wrap min500">
	<div class="guide m15" style="margin-top:15px;">
        搜索 <span style="color:red; font-weight:bold"><?php echo get_web_param('key');?></span> 的结果如下<a href="<?php cmspath('index');?>" class="fr">返回首页</a>
    </div>

<?php if(!get_search()){?>
	<div class="search_content">
		<h2>没有相关内容</h2>
	</div>
<?php }else{?>	
	<div class="newsbox">
        <div class="news_list">
            <ul class="i_news">
                <?php 
 $fun_return=get_search();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                <li><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['title'];?></a></li>
                
                <?php 
}
}?>
            </ul>
            <div class="list_page">
                <div class="page_fy">
                <?php echo get_search_page();?>
                </div>
            </div>
        </div>
    </div>
	
<?php }?>	
	
</div>
<?php $this->display('foot',1,1);?>
</body>
</html>