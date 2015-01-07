<div class="i_login">
	<span class="i_close" onclick="closeLog()"></span>
    <form name="form2" id="fomr2" action="<?php cmspath('alone');?>/alone.php?id=31" method="post">
    	<input type="text" id="uname" name="uname" class="log_t log_name" />
        <input type="password" id="password" name="password" class="log_t log_pw" />
        <input type="button" value="" class="log_submit" onclick="checkUser()" />
    </form>
</div>
<div class="wrapbg"></div>

<script>

function mylogin(){
	$(".wrapbg").show();
	$(".i_login").show();
	$(".wrapbg").css("height",$(document).height());
	$(".i_login").css("top",$(document).scrollTop()+$(window).height()/2);
}
function closeLog(){
	$(".wrapbg").hide();
	$(".i_login").hide();
}
</script>

<div class="header wrap">
	<div class="search fr">
    <form name="form1" action="<?php cmspath('search');?>">
		<input type="submit" class="s_submit fr" value="">
		<input type="text" class="s_text fl"  name="key">
    </form>
	</div>
	<a href="<?php cmspath('index');?>" class="logo"><img src="<?php cmspath('template');?>/images/logo.gif"></a>
</div>
<div class="nav">
	<ul>
		<li class="n1 <?php echo get_web_param('index_focus');?>"><a href="<?php cmspath('index');?>" class="i_a">首页</a></li>
        <?php 
 $fun_return=nav_middle();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav_child){?> 
		<li class="<?php echo $nav_child['class'];?>"><a href="<?php echo $nav_child['url'];?>" class="i_a" <?php echo $nav_child['target'];?>><span><?php echo $nav_child['cate_name'];?></span></a>
        	<?php if($nav_child['id']==4){?>
        		<div class="sub">
                    <div class="inner">
                        <dl class="pro03 clearfix">
                            <dd>
                            <?php 
 $fun_return=$nav_child['child'];if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                             <p><a href="<?php echo $v['url'];?>"> <?php echo $v['cate_name'];?></a></p>
                            <?php 
}
}?>
                            </dd>
                        </dl>
                    </div>
                    <div class="filter alpha60"></div>
                </div>
            <?php }?>
            <?php if($nav_child['id']==5){?>
        		<div class="sub">
                    <div class="inner">
                    	<?php 
 $fun_return=$nav_child['child'];if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                         <dl class="pro0<?php echo $v['childnum'];?> clearfix">
                            <dt><?php echo $v['cate_name'];?></dt>
                            <dd>
                            <?php 
 $fun_return=$v['child'];if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                            <p><a href="<?php echo $v['url'];?>"><?php echo $v['cate_name'];?></a></p>
                             <?php 
}
}?>
                            </dd>
                        </dl>
                        <?php 
}
}?>
                    </div>
                    <div class="filter alpha60"></div>
                </div>
            <?php }?>
            <?php if($nav_child['id']==57){?>
        		<div class="sub">
                    <div class="inner">
                        <dl class="pro03 clearfix">
                            <dd>
                            <?php 
 $fun_return=$nav_child['child'];if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                             <p><a href="<?php echo $v['url'];?>"> <?php echo $v['cate_name'];?></a></p>
                            <?php 
}
}?>
                            </dd>
                        </dl>
                    </div>
                    <div class="filter alpha60"></div>
                </div>
            <?php }?>
            <?php if($nav_child['id']==24){?>
        		<div class="sub">
                    <div class="inner">
                        <dl class="pro03 clearfix">
                            <dd>
                            <?php 
 $fun_return=$nav_child['child'];if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                             <p><a href="<?php echo $v['url'];?>"> <?php echo $v['cate_name'];?></a></p>
                            <?php 
}
}?>
                            </dd>
                        </dl>
                    </div>
                    <div class="filter alpha60"></div>
                </div>
            <?php }?>
            <?php if($nav_child['id']==8){?>
        		<div class="sub">
                    <div class="inner">
                        <dl class="pro03 clearfix">
                            <dd>
                            <?php 
 $fun_return=$nav_child['child'];if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                             <p><a href="<?php echo $v['url'];?>"> <?php echo $v['cate_name'];?></a></p>
                            <?php 
}
}?>
                            </dd>
                        </dl>
                    </div>
                    <div class="filter alpha60"></div>
                </div>
            <?php }?>
            <?php if($nav_child['id']==23){?>
        		<div class="sub">
                    <div class="inner">
                        <dl class="pro03 clearfix">
                            <dd>
                            <?php 
 $fun_return=$nav_child['child'];if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                             <p><a href="<?php echo $v['url'];?>"> <?php echo $v['cate_name'];?></a></p>
                            <?php 
}
}?>
                            </dd>
                        </dl>
                    </div>
                    <div class="filter alpha60"></div>
                </div>
            <?php }?>
		</li>
		<?php 
}
}?>
	</ul>
</div>