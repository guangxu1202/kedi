<?php
/**
 * $Author: BEESCMS $
 * ============================================================================
 * 网站地址: http://www.beescms.com
 * 您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

/*获取网页id*/
function out_id(){
	$cate_id = empty($cate_id)?$GLOBALS['cateid']:$cate_id;
	return $cate_id;
}

/*获取网页栏目父ID*/
function get_pid(){
	$lang=$GLOBALS['lang'];
	global $cateid;
	if(empty($tpl_id))
	{
		$cate = $GLOBALS['cat_id'];
	}
	else
	{
		$tpl_id = intval($tpl_id);//获得栏目模板ID，不存在获取内容页的栏目模板ID
		$sql="SELECT id from ".DB_PRE."category WHERE lang='".$lang."' AND temp_id=".$tpl_id;
		$cate_rel=$GLOBALS['mysql']->fetch_asc($sql);
		$cate=empty($cate_rel[0]['id'])?$GLOBALS['cateid']:$cate_rel[0]['id'];
	}
	//如果当前栏目没有下级，存在上级则返回上级
	if(!empty($cate)){
		if(file_exists(DATA_PATH.'cache_cate/cache_category_all.php')){include(DATA_PATH.'cache_cate/cache_category_all.php');}
		$cate_info=get_cate_info($cate,$category);
		$child_num=$GLOBALS['mysql']->fetch_asc("select COUNT(id) as haschild from ".DB_PRE."category where cate_parent=".$cate);
		$cate=($child_num[0]['haschild'])?$cate:$cate_info['cate_parent'];
	}
	return $cate;
}

function list_product($id){
	
	global $page,$cat_id,$list_cate,$r_count,$page_size,$child,$lang,$cate_info,$channel_info,$category;
	$_confing=get_confing($lang);
	if(empty($cat_id) || empty($list_cate))
	{
		return;
	}
	//获取频道表，只能获取父级栏目频道表
	$table = $channel_info['channel_table'];
	//表不存在，退出函数
	if(empty($table))
	{
		return;
	}
	$rel = array();
	$row = empty($page_size) ? 20 : $page_size;
	$page = empty($page) ? 1 : $page;
	$offset = ($page-1) * $row;
	$rel = $GLOBALS['mysql'] -> fetch_asc("select m.*,f.* from ".DB_PRE."maintb as m left join ".DB_PRE.$table." as f on m.id=f.id where m.lang='".$lang."' and m.id=f.id and category in (".$id.") order by m.top desc,m.updatetime desc limit ".$offset.",".$page_size);
	$path = CMS_SELF;
	if(!empty($rel))
	{
		$i = 1;
		$num = count($rel);
		$list_php = empty($channel_info['list_php'])?'show_list.php':$channel_info['list_php'];
		$content_php = empty($channel_info['content_php'])?'show_content.php':$channel_info['content_php'];
		foreach($rel as $k=>$v){
			//标题样式
			if($rel[$k]['title_color']||$rel[$k]['title_style']||$rel[$k]['is_open']){
				$font_style='';
				$font_style.=empty($rel[$k]['title_color'])?'':'color:'.$rel[$k]['title_color'].';';
				if($rel[$k]['title_style']==1){
					$font_style.='font-weight:bold;';
				}elseif($rel[$k]['title_style']==2){
					$font_style.='font-style:italic;';
				}elseif($rel[$k]['title_style']==3){
					$font_style.='text-decoration:underline;';
				}
				$rel[$k]['style'] = $font_style;
				$rel[$k]['style_title']=$rel[$k]['title'];//样式标题
			}else{
				$rel[$k]['style_title']=$rel[$k]['title'];
			}
			$rel[$k]['target']=$v['is_open']?'target="_blank"':'';//新窗口	

			$v['tbpic']=empty($v['tbpic'])?'no_pc.gif':$v['tbpic'];//缩略图
			$rel[$k]['thumb_pic']=CMS_SELF.'upload/'.$v['tbpic'];
			$cate_info=get_cate_info($v['category'],$category);//获取各内容的栏目信息
			$cate_url=(!$v['is_html']&&!($GLOBALS['_confing']['web_html'][0]))?$path.$list_php.'?id='.$cate_info['id']:$path.$cate_info['cate_fold_name'].'.html';
			$rel[$k]['cate_url'] = $cate_url;//栏目url
			
			$html_url = empty($v['custom_url'])?date('YmdHms',$v['addtime']):$v['custom_url'];//自定义内容url
			$rel[$k]['url']=(!$v['is_html']&&!($_confing['web_html'][0])||$v['purview'])?$path.$content_php.'?id='.$v['id']:$path.$cate_info['cate_fold_name'].'/'.$html_url.'.html';//内容url
			$rel[$k]['url']=($v['is_url'])?$v['url_add']:$rel[$k]['url'];
			
			$rel[$k]['cate_name'] = $cate_info['cate_name'];//栏目名称
			$rel[$k]['cate_name'] = $cate_info['cate_name'];//栏目名称
			$rel[$k]['autoindex']=$i;//内容序号
			$rel[$k]['first']=($i==1)?1:0;
			$rel[$k]['last']=($num==$i)?1:0;
			
			$rel[$k]['cate_content']=no_tag($v['cpgs']);
			$i=$i+1;
		}
	}
	return $rel;
}

function no_tag($con){
	$html = preg_replace('/\s/', '',$con);
	preg_match_all ("|<[^>]+>(.*)</[^>]+>|U", $html, $matches);
	for ($i=0; $i< count($matches[0]); $i++) {
	  $str= $str.$matches[1][$i];
	}
	return cn_substr($str,250);
}
function request($tag){
	return $_POST[$tag];
}
?>