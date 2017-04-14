<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 			template.php
* @Package:		GetSimple
* @Action:		Innovation theme for GetSimple CMS
*
*****************************************************/


# Get this theme's settings based on what was entered within its plugin.
# This function is in functions.php

# Include the header template
include('header.inc.php');

if (return_page_slug()=='index')  {
		get_component('slider');
		get_component('index-about');
		get_component('index-serv');
		get_component('index-why');
}

if (return_page_slug()=='contacts')  {
    get_component('main-contacts');
    get_component('feed-form');
    get_component('yandex-map');
}

if (return_page_slug()=='about')  {
    get_component('about-page');
}

if (return_page_slug()=='services') {
  get_component('main-services');
}

if (return_page_slug()=='doma-bani') {
  get_component('build-services');
}

if (return_page_slug()=='okna-dveri') {
  get_component('windows-services');
}

if (return_page_slug()=='zabory') {
  get_component('zabory-services');
}






include('footer.inc.php'); ?>