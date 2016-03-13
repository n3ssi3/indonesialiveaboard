<?php
$mosConfig_offline = '0';
//$mosConfig_host = 'localhost';
//$mosConfig_user = 'root';
//$mosConfig_password = 'password';
//$mosConfig_db = 'liveaboards';
//$mosConfig_host = 'localhost';
//$mosConfig_user = 'indonesi_indlius';
//$mosConfig_password = 'inl135';
//$mosConfig_db = 'indonesi_indliveabd';
$mosConfig_host = 'localhost';
$mosConfig_user = 'inlivuser';
//$mosConfig_password = 'inl123';
$mosConfig_password = 'Axel.!/4012';
$mosConfig_db = 'indonesialiveaboarddbmysql';
$mosConfig_dbprefix = 'mos_';
$mosConfig_lang = 'english';
//$mosConfig_absolute_path = 'http://localhost/liveaboards';
$mosConfig_absolute_path = 'http://indonesialiveaboard.com';
$mosConfig_live_site = '';
$mosConfig_sitename = 'Liveaboards Site';
$mosConfig_shownoauth = '0';
$mosConfig_useractivation = '1';
$mosConfig_uniquemail = '1';
$mosConfig_offline_message = 'This site is down for maintenance.<br /> Please check back again soon.';
$mosConfig_error_message = 'This site is temporarily unavailable.<br /> Please notify the System Administrator';
$mosConfig_debug = '0';
$mosConfig_lifetime = '900';
$mosConfig_MetaDesc = 'liveaboards';
$mosConfig_MetaKeys = 'liveaboards';
$mosConfig_MetaTitle = '1';
$mosConfig_MetaAuthor = '1';
$mosConfig_locale = 'en_GB';
$mosConfig_offset = '0';
$mosConfig_hideAuthor = '0';
$mosConfig_hideCreateDate = '0';
$mosConfig_hideModifyDate = '0';
$mosConfig_hidePdf = '0';
$mosConfig_hidePrint = '0';
$mosConfig_hideEmail = '0';
$mosConfig_enable_log_items = '0';
$mosConfig_enable_log_searches = '0';
$mosConfig_enable_stats = '0';
$mosConfig_sef = '0';
$mosConfig_vote = '0';
$mosConfig_gzip = '0';
$mosConfig_multipage_toc = '1';
$mosConfig_allowUserRegistration = '1';
$mosConfig_link_titles = '0';
$mosConfig_error_reporting = -1;
$mosConfig_list_limit = '10';
$mosConfig_caching = '0';
$mosConfig_cachepath = '';
$mosConfig_cachetime = '900';
$mosConfig_mailer = 'mail';
$mosConfig_mailfrom = '';
$mosConfig_fromname = '';
// how many rows to show per page
$rowsPerPage = 20;

// by default we show first page
$pageNum = 1;

// if $_GET['page'] defined, use it as page number
if(isset($_GET['page']))
{
	$pageNum = $_GET['page'];
	$schedule = $_GET['s'];
	$destination = $_GET['d'];
	$boats = $_GET['b'];
}

// counting the offset
$offset = ($pageNum - 1) * $rowsPerPage;

?>
