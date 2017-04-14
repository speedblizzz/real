<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			functions.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/
function get_navigation_main($currentpage,$classPrefix = "") {

	$menu = '';

	global $pagesArray;

	$pagesSorted = subval_sort($pagesArray,'menuOrder');
	if (count($pagesSorted) != 0) {


    /*var_dump($classes);*/
		foreach ($pagesSorted as $page) {
			$sel = ''; $classes = '';
			$url_nav = $page['url'];





			if ($page['menuStatus'] == 'Y') {
				/*$parentClass = !empty($page['parent']) ? $classPrefix.$page['parent'] . " " : "";*/
				/*$classes = trim( $parentClass.$classPrefix.$url_nav);*/
				if ("$currentpage" == "$url_nav") $classes .= " main-active";


				if ($page['menu'] == '') { $page['menu'] = $page['title']; }
				if ($page['title'] == '') { $page['title'] = $page['menu']; }
				$menu .= '<li class="header_menu-item"><a class="header_menu-link'.$classes.'" href="'. $page['url'] . '" title="'. encode_quotes(cl($page['title'])) .'">'.strip_decode($page['menu']).'</a></li>'."\n";
			}
		}
	}
	echo exec_filter('menuitems',$menu);
}


function get_navigation_mobile($currentpage,$classPrefix = "") {

	$menu = '';

	global $pagesArray;

	$pagesSorted = subval_sort($pagesArray,'menuOrder');
	if (count($pagesSorted) != 0) {


    /*var_dump($classes);*/
		foreach ($pagesSorted as $page) {
			$sel = ''; $classes = '';
			$url_nav = $page['url'];



			if ($page['menuStatus'] == 'Y') {
				/*$parentClass = !empty($page['parent']) ? $classPrefix.$page['parent'] . " " : "";*/
				/*$classes = trim( $parentClass.$classPrefix.$url_nav);*/
				if ("$currentpage" == "$url_nav") $classes .= " is-active";


				if ($page['menu'] == '') { $page['menu'] = $page['title']; }
				if ($page['title'] == '') { $page['title'] = $page['menu']; }
				$menu .= '<li><a class="header_mobmenu-item'.$classes.'" href="'. $page['url']. '" title="'. encode_quotes(cl($page['title'])) .'">'.strip_decode($page['menu']).'</a></li>'."\n";
			}
		}


	}

	echo exec_filter('menuitems',$menu);
}

function parent_link($name) {
	$file = GSDATAPAGESPATH . $name .'.xml';
	if (file_exists($file)) {
		$p = getXML($file);
		$title = $p->title;
		$parent = $p->parent;
		$slug = $p->slug;
		echo '<a href="'. find_url($name,'') .'" class="head-container_index-link">'. $title .'</a> &#47;&nbsp;&nbsp; ';
	}
}

