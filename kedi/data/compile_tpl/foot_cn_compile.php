<div class="fast_link clearfix">
	<div class="wrap">
		<dl>
        <?php $tree=get_tpl_list_nav(11);?>
        	<dt><a href="<?php cmspath('product');?>/product.php?id=11">广电产品</a></dt>
        <?php if($tree){?>
        	<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
			<dd><a href="<?php echo $nav['url'];?>" title="<?php echo $nav['cate_name'];?>"><?php echo $nav['cate_name'];?> </a></dd>
            <?php 
}
}?>
        <?php }?>
		</dl>
		<dl>
		<?php $tree=get_tpl_list_nav(13);?>
        	<dt><a href="<?php cmspath('product');?>/product.php?id=13">视听产品</a></dt>
        <?php if($tree){?>
        	<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
			<dd><a href="<?php echo $nav['url'];?>" title="<?php echo $nav['cate_name'];?>"><?php echo $nav['cate_name'];?> </a></dd>
            <?php 
}
}?>
        <?php }?>
		</dl>
		<dl>
		<?php $tree=get_tpl_list_nav(14);?>
        	<dt><a href="<?php cmspath('product');?>/product.php?id=14">安防产品</a></dt>
        <?php if($tree){?>
        	<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
			<dd><a href="<?php echo $nav['url'];?>" title="<?php echo $nav['cate_name'];?>"><?php echo $nav['cate_name'];?> </a></dd>
            <?php 
}
}?>
        <?php }?>
		</dl>
		<dl>
		<?php $tree=get_tpl_list_nav(2);?>
        	<dt><a href="<?php cmspath('article');?>/article.php?id=4">新闻中心</a></dt>
        <?php if($tree){?>
        	<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
			<dd><a href="<?php echo $nav['url'];?>" title="<?php echo $nav['cate_name'];?>"><?php echo $nav['cate_name'];?> </a></dd>
            <?php 
}
}?>
        <?php }?>
		</dl>
		<dl>
		<?php $tree=get_tpl_list_nav(24);?>
        	<dt><a href="<?php cmspath('article');?>/article.php?id=24">技术服务</a></dt>
        <?php if($tree){?>
        	<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
			<dd><a href="<?php echo $nav['url'];?>" title="<?php echo $nav['cate_name'];?>"><?php echo $nav['cate_name'];?> </a></dd>
            <?php 
}
}?>
        <?php }?>
		</dl>
		<dl>
        <?php $tree=get_tpl_list_nav(8);?>
        	<dt><a href="<?php cmspath('alone');?>/alone.php?id=8">关于科迪</a></dt>
        <?php if($tree){?>
        	<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
			<dd><a href="<?php echo $nav['url'];?>" title="<?php echo $nav['cate_name'];?>"><?php echo $nav['cate_name'];?> </a></dd>
            <?php 
}
}?>
        <?php }?>
		</dl>
        <!--
		<dl>
        <?php $tree=get_tpl_list_nav(54);?>
			<dt><a href="<?php cmspath('job');?>/job.php?id=54">加入科迪</a></dt>
             <?php if($tree){?>
                <?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
                <dd><a href="<?php echo $nav['url'];?>" title="<?php echo $nav['cate_name'];?>"><?php echo $nav['cate_name'];?> </a></dd>
                <?php 
}
}?>
            <?php }?>
		</dl>
        -->
		<dl style="margin-right:-21px;">
		<?php $tree=get_tpl_list_nav(23);?>
        	<dt><a href="<?php cmspath('alone');?>/alone.php?id=23">联系我们</a></dt>
        <?php if($tree){?>
        	<?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav){?>
			<dd><a href="<?php echo $nav['url'];?>" title="<?php echo $nav['cate_name'];?>"><?php echo $nav['cate_name'];?> </a></dd>
            <?php 
}
}?>
        <?php }?>
		</dl>
	</div>
</div>

<div class="footer">
	<div class="wrap">
		<div class="fr">大连科迪视频技术有限公司 　版权所有</div>
		<a href="<?php cmspath('sitemap');?>/sitemap.php">网站地图</a> | <a href="<?php cmspath('alone');?>/alone.php?id=23">联系科迪</a> | <a href="<?php cmspath('legal');?>/legal.php">法律声明</a> | <a href="<?php cmspath('links');?>/links.php">友情链接</a>
	</div>
</div>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? "  https://" : "  http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fed370c030778f8b1f30ca7a31984b99f' type='text/javascript'%3E%3C/script%3E"));
</script>
<script src="<?php cmspath('template');?>/js/common.js" type="text/javascript"></script>

